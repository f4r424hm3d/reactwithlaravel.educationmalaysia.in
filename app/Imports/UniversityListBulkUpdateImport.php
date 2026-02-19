<?php

namespace App\Imports;


use Illuminate\Support\Str;
use App\Models\InstituteType;
use App\Models\University;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UniversityListBulkUpdateImport implements ToCollection, WithHeadingRow, WithChunkReading, WithBatchInserts
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

      $field = University::find($id);
      if (!$field) {
        // no record found, skip or create if you want
        continue;
      }

      // find institute type safely
      $instituteTypeId = $row->get('institute_type') ?? null;
      $instituteType = $instituteTypeId ? InstituteType::find($instituteTypeId) : null;

      // Safe assignments using null coalescing
      $name = $row->get('name') ?? null;
      $field->name = $name;
      $field->uname = $name ? slugify($name) : $field->uname;

      $field->views = $row->get('views') ?? $field->views;
      $field->click = $row->get('click') ?? $field->click;
      $field->city = $row->get('city') ?? $field->city;
      $field->state = $row->get('state') ?? $field->state;
      $field->inst_type = $instituteType->type ?? $field->inst_type;
      $field->institute_type = $instituteTypeId ?? $field->institute_type;
      $field->rating = $row->get('rating') ?? $field->rating;
      // $field->rank = $row->get('rank') ?? $field->rank;
      $field->qs_rank = $row->get('qs_rank') ?? $field->qs_rank;
      $field->times_rank = $row->get('times_rank') ?? $field->times_rank;
      $field->qs_asia_rank = $row->get('qs_asia_rank') ?? $field->qs_asia_rank;

      $field->shortnote = $row->get('shortnote') ?? $field->shortnote;
      $field->featured = $row->get('featured') ?? $field->featured;
      $field->latitude_longitude = $row->get('latitude_longitude') ?? $field->latitude_longitude;
      $field->established_year = $row->get('established_year') ?? $field->established_year;
      $field->local_students = $row->get('local_students') ?? $field->local_students;
      $field->international_students = $row->get('international_students') ?? $field->international_students;
      $field->contact_number1 = $row->get('contact_number1') ?? $field->contact_number1;
      $field->contact_number2 = $row->get('contact_number2') ?? $field->contact_number2;

      // if pipeToJson expects a string, guard it
      $field->hostel_facility = pipeToJson($row->get('hostel_facility') ?? '');
      $field->accredited_by = pipeToJson($row->get('accredited_by') ?? '');
      $field->approved_by = pipeToJson($row->get('approved_by') ?? '');

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
