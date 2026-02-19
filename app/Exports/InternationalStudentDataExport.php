<?php

namespace App\Exports;

use App\Models\InternationalStudentData;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InternationalStudentDataExport implements FromView
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function view(): View
  {
    return view('admin.exports.international-student-data-list', [
      'rows' => InternationalStudentData::get()
    ]);
  }
}
