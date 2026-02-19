<?php

namespace App\Imports;

use App\Models\MalaysiaApplication;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class MalaysiaApplicationBulkUpdateImport implements ToCollection, WithHeadingRow, WithChunkReading, WithBatchInserts
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
    foreach ($rows as $row) {
      $field = MalaysiaApplication::find($row['id']);

      $field->category_id = $row['category_id'];
      $field->year = $row['year'];
      $field->count = $row['count'];

      $field->save();
      $rowsInserted++;
      $totalRows++;
    }
    if ($rowsInserted > 0) {
      session()->flash('smsg', $rowsInserted . ' out of ' . $totalRows . ' rows imported succesfully.');
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
