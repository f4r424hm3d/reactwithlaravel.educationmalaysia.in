<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileStorageHelper
{
  /**
   * Handle file upload and replace old file if exists
   *
   * @param \Illuminate\Http\UploadedFile|null $file
   * @param string $folder
   * @param string|null $oldFilePath
   * @param string|null $extension
   * @return array|null  ['filename' => string, 'path' => string]
   */
  public static function upload(?\Illuminate\Http\UploadedFile $file, string $folder, ?string $oldFilePath = null, ?string $extension = null): ?array
  {
    if (!$file) {
      return $oldFilePath
        ? ['file_name' => basename($oldFilePath), 'file_path' => $oldFilePath]
        : null;
    }

    // Delete old file if exists
    if ($oldFilePath && Storage::disk('public')->exists($oldFilePath)) {
      Storage::disk('public')->delete($oldFilePath);
    }

    // Generate new filename
    $ext = $extension ?: $file->extension();
    $file_name = Str::uuid() . '.' . $ext;

    // Add folder structure with year/month
    $folderPath = 'uploads/' . trim($folder, '/') . '/' . date('Y') . '/' . date('m') . '/' . date('d');

    // Store file
    $path = $file->storeAs($folderPath, $file_name, 'public');

    return [
      'file_name' => $file_name,
      'file_path' => $path
    ];
  }
}
