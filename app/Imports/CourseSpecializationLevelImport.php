<?php

namespace App\Imports;

use App\Models\SpecializationLevel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CourseSpecializationLevelImport implements ToCollection, WithHeadingRow, WithChunkReading, WithBatchInserts
{
  /**
   * @param Collection $collection
   */
  // public function __construct(array $data)
  // {
  //   $this->group_id = $data['group_id'];
  //   $this->question_type = $data['question_type'];
  // }
  public function startRow(): int
  {
    return 2;
  }
  public function collection(collection $rows)
  {
    $rowsInserted = 0;
    $totalRows = 0;
    foreach ($rows as $row) {
      $where = [
        'specialization_id' => $row['specialization_id'],
        'level' => $row['level'],
      ];
      $data = SpecializationLevel::where($where)->count();
      if ($data == 0) {
        SpecializationLevel::create([
          'specialization_id' => $row['specialization_id'],
          'level' => $row['level'],
          'level_slug' => slugify($row['level']),
          'duration' => $row['duration'],
          'tuition_fees' => $row['tuition_fees'],
          'intake' => $row['intake'],
          'accreditation' => $row['accreditation'],
        ]);
        $rowsInserted++;
      }
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
