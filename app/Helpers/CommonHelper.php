<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class CommonHelper
{
  /**
   * Assign common SEO fields to the model.
   *
   * @param \Illuminate\Database\Eloquent\Model $model
   * @param Request $request
   * @return void
   */
  public static function assignSeoFields($model, Request $request): void
  {
    $model->meta_title       = $request->input('meta_title');
    $model->meta_keyword     = $request->input('meta_keyword');
    $model->meta_description = $request->input('meta_description');
    $model->seo_rating       = $request->input('seo_rating');
    $model->best_rating      = $request->input('best_rating');
    $model->review_number    = $request->input('review_number');
  }
}
