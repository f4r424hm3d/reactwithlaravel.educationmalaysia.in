<?php

namespace App\Exports;

use App\Models\MalaysiaApplication;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MalaysiaApplicationExport implements FromView
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function view(): View
  {
    return view('admin.exports.malaysia-application-list', [
      'rows' => MalaysiaApplication::get()
    ]);
  }
}
