<?php

namespace App\Imports;

use App\Models\InternationalStudentData;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InternationalStudentDataImport implements ToCollection, WithHeadingRow, WithChunkReading, WithBatchInserts
{
  /**
   * @param Collection $collection
   */
  public function startRow(): int
  {
    return 2;
  }
  public function collection(collection $rows)
  {
    $rowsInserted = 0;
    $totalRows = 0;
    $exist = 0;
    $spcArr = [];
    foreach ($rows as $row) {
      $where = [
        'country_id' => $row['country_id'],
        'year' => $row['year'],
      ];
      $data = InternationalStudentData::where($where)->count();
      if ($data == 0) {
        InternationalStudentData::create([
          // Basic Info
          'country_id' => $row['country_id'],
          'year' => $row['year'],
          'count' => $row['count'],
        ]);
        $rowsInserted++;
      } else {
        $exist++;
      }
      $totalRows++;
    }
    $emsg = '';
    if ($rowsInserted > 0) {
      session()->flash('smsg', $rowsInserted . ' out of ' . $totalRows . ' rows imported succesfully.');
      if ($exist > 0) {
        $emsg .= $exist . ' rows with same data already exist.';
        session()->flash('emsg', $emsg);
      }
    } else {
      session()->flash('emsg', 'Data not imported. Duplicate rows found.');
    }
  }

  public function chunkSize(): int
  {
    return 1000;
  }
  public function batchSize(): int
  {
    return 1000;
  }
}
