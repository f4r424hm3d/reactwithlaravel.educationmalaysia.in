<?php

namespace App\Imports;

use App\Models\CourseSpecialization;
use App\Models\UniversityProgram;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UniversityProgramBulkUpdateImport implements ToCollection, WithHeadingRow, WithChunkReading, WithBatchInserts
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
  public function startRow(): int
  {
    return 2;
  }
  public function collection(collection $rows)
  {
    $rowsInserted = 0;
    $totalRows = 0;
    foreach ($rows as $row) {
      $spc = CourseSpecialization::find($row['specialization_id']);

      $field = UniversityProgram::find($row['id']);
      $field->course_category_id = $spc->course_category_id;
      $field->specialization_id = $row['specialization_id'];
      $field->course_name = $row['course_name'];
      $field->slug = slugify($row['course_name']);
      $field->level = $row['level'];
      $field->duration = $row['duration'];
      $field->study_mode = $row['study_mode'];
      $field->intake = $row['intake'];
      $field->application_deadline = $row['application_deadline'];
      $field->tution_fee = $row['tution_fee'];
      $field->total_fee = $row['total_fee'];
      $field->total_tuition_fee = $row['total_tuition_fee'];
      $field->annual_tuition_fee = $row['annual_tuition_fee'];
      $field->registration_fee = $row['registration_fee'];
      $field->laboratory_fee = $row['laboratory_fee'];
      $field->library_fee = $row['library_fee'];
      $field->technology_fee = $row['technology_fee'];
      $field->student_activity_fee = $row['student_activity_fee'];
      $field->insurance_fee = $row['insurance_fee'];
      $field->examination_fee = $row['examination_fee'];
      $field->application_fee = $row['application_fee'];
      $field->emgs_processing_fee = $row['emgs_processing_fee'];
      $field->international_student_fee = $row['international_student_fee'];
      $field->international_security_deposit = $row['international_security_deposit'];
      $field->international_student_charge = $row['international_student_charge'];
      $field->international_administration_fee = $row['international_administration_fee'];
      $field->personal_bond_fee = $row['personal_bond_fee'];
      $field->resources_fee = $row['resources_fee'];
      $field->commitment_fee = $row['commitment_fee'];
      $field->facilities_fee = $row['facilities_fee'];
      $field->other_fee = $row['other_fee'];
      $field->scholarship_amount = $row['scholarship_amount'];
      $field->tution_fee_after_scholarship = $row['tution_fee_after_scholarship'];
      $field->currency = $row['currency'];
      $field->additional_note = $row['additional_note'];

      $field->campus = $row['campus'];
      $field->accreditations = pipeToJson($row['accreditations'] ?? null);

      $field->year1_tuition_fee = $row['year1_tuition_fee'];
      $field->year2_tuition_fee = $row['year2_tuition_fee'];
      $field->year3_tuition_fee = $row['year3_tuition_fee'];
      $field->year4_tuition_fee = $row['year4_tuition_fee'];
      $field->accommodation_fee = $row['accommodation_fee'];
      $field->airport_pickup_fee = $row['airport_pickup_fee'];

      $field->anual_tuition_fee_local = $row['anual_tuition_fee_local'];
      $field->year1_tuition_fee_local = $row['year1_tuition_fee_local'];
      $field->year2_tuition_fee_local = $row['year2_tuition_fee_local'];
      $field->year3_tuition_fee_local = $row['year3_tuition_fee_local'];
      $field->year4_tuition_fee_local = $row['year4_tuition_fee_local'];
      $field->total_tuition_fee_local = $row['total_tuition_fee_local'];

      $field->is_local = $row->get('is_local') ?? $field->is_local;
      $field->is_international = $row->get('is_international') ?? $field->is_international;

      $field->overview = $row->get('overview') ?? $field->overview;
      $field->entry_requirement = $row->get('entry_requirement') ?? $field->entry_requirement;
      $field->exam_required = $row->get('exam_required') ?? $field->exam_required;
      $field->mode_of_instruction = $row->get('mode_of_instruction') ?? $field->mode_of_instruction;
      $field->scholarship_info = $row->get('scholarship_info') ?? $field->scholarship_info;


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
