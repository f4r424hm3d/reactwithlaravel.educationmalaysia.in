<?php

use App\Http\Controllers\Front\ReactAppController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Reoptimized class loader:
Route::get('/optimize', function () {
  $exitCode = Artisan::call('optimize:clear');
  return '<h1>Reoptimized class loader</h1>';
});

//For MIgrate:
Route::get('/migrate', function () {
  $exitCode = Artisan::call('migrate');
  return '<h1>Migrated</h1>';
});


// SITE MAP
// Route::get('sitemap.xml', [SitemapController::class, 'sitemap']);
// Route::get('sitemap-home.xml', [SitemapController::class, 'home']);
// Route::get('sitemap-exams.xml', [SitemapController::class, 'exam']);
// Route::get('sitemap-services.xml', [SitemapController::class, 'services']);
// Route::get('sitemap-universities.xml', [SitemapController::class, 'selectuni']);
// Route::get('sitemap-university.xml', [SitemapController::class, 'university']);
// Route::get('sitemap-university-program.xml', [SitemapController::class, 'universityProgram']);
// Route::get('sitemap-specialization.xml', [SitemapController::class, 'specialization']);
// Route::get('sitemap-course.xml', [SitemapController::class, 'courses']);
// Route::get('sitemap-blog.xml', [SitemapController::class, 'article']);
// Route::get('sitemap-course-level.xml', [SitemapController::class, 'sitemapCourseLevel']);
// Route::get('sitemap-courses-in-malaysia.xml', [SitemapController::class, 'sitemapCoursesInMalaysia']);

// ============================================================================
// CATCH-ALL ROUTE: Serve React SPA with Server-Side Meta Tags
// ============================================================================
// This MUST be the last route in this file. It catches all GET requests
// that don't match any previous route and serves the React app via Blade
// with dynamically rendered meta tags for SEO.
//
// Excluded paths: /api/*, /admin/*, /storage/*, sitemap*.xml
// ============================================================================
Route::get('/{any}', [ReactAppController::class, 'index'])->where('any', '^(?!api|admin|storage|sitemap).*$');
