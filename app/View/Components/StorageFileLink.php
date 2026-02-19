<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class StorageFileLink extends Component
{
  public $path;
  public $viewText;
  public $nullText;
  public $link;

  /**
   * Create a new component instance.
   */
  public function __construct($path, $viewText = 'View', $nullText = 'N/A', $disk = 'public')
  {
    $this->path = $path;
    $this->viewText = $viewText ?? 'View';
    $this->nullText = $nullText ?? 'N/A';

    // If file exists, prepare the link
    /** @var \Illuminate\Filesystem\FilesystemAdapter $diskInstance */
    $diskInstance = Storage::disk($disk);

    if ($path && $diskInstance->exists($path)) {
      $this->link = asset('storage/' . $path);
    } else {
      $this->link = null;
    }
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.storage-file-link');
  }
}
