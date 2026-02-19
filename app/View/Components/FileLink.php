<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileLink extends Component
{
  public $path;
  public $viewText;
  public $nullText;
  public $linkFunction;
  /**
   * Create a new component instance.
   */
  public function __construct($path, $viewText = 'View', $nullText = 'N/A', $linkFunction = 'asset')
  {
    $this->path = $path;
    $this->viewText = $viewText ?? 'View';
    $this->nullText = $nullText ?? 'N/A';
    $this->linkFunction = $linkFunction;
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.file-link');
  }
}
