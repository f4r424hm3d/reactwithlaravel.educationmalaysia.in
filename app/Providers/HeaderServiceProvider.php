<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\CourseCategory;
use App\Models\Exam;
use App\Models\Level;
use App\Models\SitePage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
  public function boot()
  {
    View::composer('front.layouts.header', function ($view) {
      if (session()->has('modal_math_question') && session()->has('modal_math_key')) {
        // Reuse after failed submit (flashed by controller)
        $q   = session('modal_math_question');
        $key = session('modal_math_key');
      } else {
        $q   = generateMathQuestion2(); // returns ['label' => 'What is 3 + 4?', 'answer' => 7]
        $key = 'captcha_answer.header_modal.' . uniqid();
        session([$key => $q['answer']]);
      }

      $view->with([
        'exams' => Exam::where('hview', 1)->where('website', site_var)->inRandomOrder()->limit(4)->get(),
        'sitePages' => SitePage::where('hview', 1)->inRandomOrder()->limit(4)->get(),
        'phonecodesSF' => Country::select('phonecode', 'name')->where('phonecode', '!=', '0')->orderBy('phonecode', 'asc')->get(),
        'countriesSF' => Country::orderBy('name', 'asc')->get(),
        'levels' => Level::groupBy('level')->orderBy('level', 'ASC')->get(),
        'course_categories' => CourseCategory::orderBy('name', 'asc')->get(),
        'modalCaptcha' => generateMathQuestion(),
        'mathQuestion'        => $q,
        'mathCaptchaKey'      => $key,
      ]);

      session(['modal_captcha_answer' => generateMathQuestion()['answer']]);
    });
  }
}
