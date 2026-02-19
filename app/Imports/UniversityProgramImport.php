<?php

namespace App\Imports;

use App\Models\CourseSpecialization;
use App\Models\UniversityProgram;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UniversityProgramImport implements ToCollection, WithHeadingRow, WithChunkReading, WithBatchInserts
{
  /**
   * @param Collection $collection
   */
  // public function __construct(array $data)
  // {
  //   $this->group_id = $data['group_id'];
  //   $this->question_type = $data['question_type'];
  // }
  protected $university_id;
  public function __construct(array $data)
  {
    $this->university_id = $data['university_id'];
  }
  private function cleanText($value)
  {
    if ($value === null) {
      return null;
    }

    // Remove ZERO WIDTH SPACE & invisible chars
    $value = preg_replace('/\x{200B}|\x{FEFF}/u', '', $value);

    // Normalize spaces
    $value = trim(preg_replace('/\s+/u', ' ', $value));

    return $value;
  }

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
      $courseName = $this->cleanText($row['course_name'] ?? null);
      $level      = $this->cleanText($row['level'] ?? null);

      $where = [
        'university_id' => $this->university_id,
        'specialization_id' => $row['specialization_id'],
        'level' => $level,
        'course_name' => $courseName
      ];
      $data = UniversityProgram::where($where)->count();
      if ($data == 0) {
        $spc = CourseSpecialization::find($row['specialization_id']);
        if ($spc != false) {
          UniversityProgram::create([
            'university_id' => $this->university_id,
            'course_category_id' => $spc->course_category_id,
            'specialization_id' => $row['specialization_id'] ?? null,
            'level' => $level,
            'course_name' => $courseName,
            'slug' => slugify($courseName ?? ''),
            'duration' => $row['duration'] ?? null,
            'study_mode' => isset($row['study_mode'])
              ? (is_array($row['study_mode']) ? implode(',', $row['study_mode']) : $row['study_mode'])
              : null,
            'intake' => isset($row['intake'])
              ? (is_array($row['intake']) ? implode(',', $row['intake']) : $row['intake'])
              : null,
            'application_deadline' => $row['application_deadline'] ?? null,
            'tution_fee' => $row['tution_fee'] ?? null,
            'overview' => $row['overview'] ?? $row['Overview'] ?? null,
            'entry_requirement' => $row['entry_requirement'] ?? null,
            'exam_required' => $row['exam_required'] ?? null,
            'mode_of_instruction' => $row['mode_of_instruction'] ?? null,
            'scholarship_info' => $row['scholarship_info'] ?? null,
            'total_fee' => $row['total_fee'] ?? null,
            'total_tuition_fee' => $row['total_tuition_fee'] ?? null,
            'annual_tuition_fee' => $row['annual_tuition_fee'] ?? null,
            'registration_fee' => $row['registration_fee'] ?? null,
            'laboratory_fee' => $row['laboratory_fee'] ?? null,
            'library_fee' => $row['library_fee'] ?? null,
            'technology_fee' => $row['technology_fee'] ?? null,
            'student_activity_fee' => $row['student_activity_fee'] ?? null,
            'insurance_fee' => $row['insurance_fee'] ?? null,
            'examination_fee' => $row['examination_fee'] ?? null,
            'application_fee' => $row['application_fee'] ?? null,
            'emgs_processing_fee' => $row['emgs_processing_fee'] ?? null,
            'international_student_fee' => $row['international_student_fee'] ?? null,
            'international_security_deposit' => $row['international_security_deposit'] ?? null,
            'international_student_charge' => $row['international_student_charge'] ?? null,
            'international_administration_fee' => $row['international_administration_fee'] ?? null,
            'personal_bond_fee' => $row['personal_bond_fee'] ?? null,
            'resources_fee' => $row['resources_fee'] ?? null,
            'commitment_fee' => $row['commitment_fee'] ?? null,
            'facilities_fee' => $row['facilities_fee'] ?? null,
            'other_fee' => $row['other_fee'] ?? null,
            'currency' => $row['currency'] ?? null,
            'additional_note' => $row['additional_note'] ?? null,
            'scholarship_amount' => $row['scholarship_amount'] ?? null,
            'tution_fee_after_scholarship' => $row['tution_fee_after_scholarship'] ?? null,
            'year1_tuition_fee' => $row['year1_tuition_fee'] ?? null,
            'year2_tuition_fee' => $row['year2_tuition_fee'] ?? null,
            'year3_tuition_fee' => $row['year3_tuition_fee'] ?? null,
            'year4_tuition_fee' => $row['year4_tuition_fee'] ?? null,
            'accommodation_fee' => $row['accommodation_fee'] ?? null,
            'airport_pickup_fee' => $row['airport_pickup_fee'] ?? null,
            'anual_tuition_fee_local' => $row['anual_tuition_fee_local'] ?? null,
            'year1_tuition_fee_local' => $row['year1_tuition_fee_local'] ?? null,
            'year2_tuition_fee_local' => $row['year2_tuition_fee_local'] ?? null,
            'year3_tuition_fee_local' => $row['year3_tuition_fee_local'] ?? null,
            'year4_tuition_fee_local' => $row['year4_tuition_fee_local'] ?? null,
            'total_tuition_fee_local' => $row['total_tuition_fee_local'] ?? null,
            'campus' => $row['campus'] ?? null,
            'accreditations' => pipeToJson($row['accreditations'] ?? null),
            'is_local' => data_get($row, 'is_local'),
            'is_international' => data_get($row, 'is_international'),
            'status' => 1,
          ]);
          $rowsInserted++;
        } else {
          $spcArr[] = $row['specialization_id'];
        }
      } else {
        $exist++;
      }
      $totalRows++;
    }
    $spcjson = json_encode($spcArr);
    $nir = $totalRows - $rowsInserted;
    $emsg = '';
    if ($rowsInserted > 0) {
      session()->flash('smsg', $rowsInserted . ' out of ' . $totalRows . ' rows imported succesfully.');
      if (count($spcArr) > 0) {
        $emsg .= 'There are ' . count($spcArr) . ' entry with wrong specialization id. List of wrong id : ' . $spcjson . '. ';
      }
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
