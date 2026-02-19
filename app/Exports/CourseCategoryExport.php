<?php

namespace App\Exports;

use App\Models\CourseCategory;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CourseCategoryExport implements FromView
{
  public function view(): View
  {
    return view('admin.exports.course-categories-list', [
      'rows' => CourseCategory::where('website', 'MYS')->get()
    ]);
  }
}
