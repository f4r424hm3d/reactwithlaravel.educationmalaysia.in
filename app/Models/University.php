<?php

namespace App\Models;

use App\Models\Scopes\WebsiteScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

class University extends Model
{
  use HasFactory;
  protected $guarded = [];
  /**
   * Default fields used for frontend/select queries.
   * Edit this array to add/remove fields globally.
   *
   * @var string[]
   */
  protected static array $selectFields = ['id', 'name', 'uname', 'views', 'click', 'city', 'state', 'qs_rank', 'times_rank', 'qs_asia_rank', 'shortnote', 'click', 'established_year', 'local_students', 'international_students', 'accredited_by', 'approved_by', 'latitude_longitude', 'featured', 'rating', 'logo_path', 'banner_path', 'institute_type', 'is_local', 'is_international'];

  /**
   * Return the default select fields array.
   *
   * @return string[]
   */
  public static function getSelectFields(): array
  {
    return self::$selectFields;
  }

  /**
   * Scope to select the frontend/default fields.
   * Pass an array of extra fields to include (non-destructive).
   *
   * Usage:
   *   University::selectFrontendFields();
   *   University::selectFrontendFields(['some_extra_col']);
   *
   * @param  Builder  $query
   * @param  string[]  $extra
   * @return Builder
   */
  public function scopeSelectFrontendFields(Builder $query, array $extra = []): Builder
  {
    // merge default + extra and preserve order/unique
    $fields = array_values(array_unique(array_merge(self::$selectFields, $extra)));

    return $query->select($fields);
  }

  /**
   * If you sometimes want to ADD the default fields to an existing select call:
   * Example: University::select('id')->addSelectFrontendFields()->get();
   */
  public function scopeAddSelectFrontendFields(Builder $query): Builder
  {
    return $query->addSelect(self::$selectFields);
  }
  protected static function booted()
  {
    static::addGlobalScope(new WebsiteScope);
  }
  public function getSlugAttribute()
  {
    return $this->attributes['uname'];
  }
  public function instituteType()
  {
    return $this->hasOne(InstituteType::class, 'id', 'institute_type');
  }

  public function scholarships()
  {
    return $this->hasMany(UniversityScholarship::class, 'u_id', 'id');
  }
  public function reviews()
  {
    return $this->hasMany(Review::class, 'university_id', 'id')->where('status', 1);
  }
  public function programs()
  {
    return $this->hasMany(UniversityProgram::class, 'university_id', 'id');
  }
  public function activePrograms()
  {
    return $this->hasMany(UniversityProgram::class, 'university_id', 'id')->where('status', 1);
  }
  public function photos()
  {
    return $this->hasMany(UniversityPhoto::class, 'university_id', 'id');
  }
  public function videos()
  {
    return $this->hasMany(UniversityVideo::class, 'university_id', 'id');
  }
  public function facilities()
  {
    return $this->hasMany(UniversityFacility::class, 'u_id', 'id');
  }
  public function overviews()
  {
    return $this->hasMany(UniversityOverview::class, 'university_id', 'id')->orderBy('position');
  }
  public function scopeActive($query)
  {
    return $query->where('status', 1);
  }
  public function scopeHomeview($query)
  {
    return $query->where('homeview', 1);
  }
  public function scopeHead($query)
  {
    return $query->where('parent_university_id', null);
  }
  public function headUniversity()
  {
    return $this->hasOne(University::class, 'id', 'parent_university_id');
  }

  public function scopeWebsite($query)
  {
    return $query->where('website', site_var);
  }
  public function scopeExclude($query, array $columns)
  {
    static $all = null;
    $all ??= Schema::getColumnListing($this->getTable());
    return $query->select(array_diff($all, Arr::flatten($columns)));
  }
}
