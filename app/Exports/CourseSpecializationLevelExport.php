<?php

namespace App\Exports;

use App\Models\SpecializationLevel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CourseSpecializationLevelExport implements FromView
{
  public function view(): View
  {
    return view('admin.exports.course-specialization-levels', [
      'rows' => SpecializationLevel::all()
    ]);
  }
}
