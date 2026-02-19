<?php

namespace App\Imports;

use App\Models\SpecializationLevel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CourseSpecializationLevelBulkUpdateImport implements ToCollection, WithHeadingRow, WithChunkReading, WithBatchInserts
{
  /**
   * @param Collection $collection
   */
  public function startRow(): int
  {
    return 2;
  } // if you want to use Str helpers

  public function collection(Collection $rows)
  {
    $rowsInserted = 0;
    $totalRows = 0;

    // Optional: inspect headings once while debugging
    // \Log::debug('Headings: ' . json_encode($rows->first()->keys()->toArray()));

    foreach ($rows as $row) {
      $totalRows++;

      // skip fully empty rows
      if ($row->filter()->isEmpty()) {
        continue;
      }

      // require an id to update
      $id = $row->get('id') ?? $row->get('ID') ?? null;
      if (!$id) {
        // optionally log or collect for report
        continue;
      }

      $field = SpecializationLevel::find($id);
      if (!$field) {
        // no record found, skip or create if you want
        continue;
      }

      $field->specialization_id = $row->get('specialization_id') ?? $field->specialization_id;
      $field->level = $row->get('level') ?? $field->level;
      $field->level_slug = slugify($field->level);
      $field->duration = $row->get('duration') ?? $field->duration;
      $field->tuition_fees = $row->get('tuition_fees') ?? $field->tuition_fees;
      $field->intake = $row->get('intake') ?? $field->intake;
      $field->accreditation = $row->get('accreditation') ?? $field->accreditation;

      $field->save();
      $rowsInserted++;
    }

    if ($rowsInserted > 0) {
      session()->flash('smsg', $rowsInserted . ' out of ' . $totalRows . ' rows imported successfully.');
    } else {
      session()->flash('emsg', 'Data not imported. Duplicate rows found or no valid rows.');
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
