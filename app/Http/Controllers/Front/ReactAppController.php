<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\SeoMetaService;
use Illuminate\Http\Request;

class ReactAppController extends Controller
{
  /**
   * Serve the React SPA with server-side rendered meta tags
   *
   * @param Request $request
   * @return \Illuminate\View\View
   */
  public function index(Request $request)
  {
    // Get the current path (without query string)
    $path = $request->path();

    // Resolve meta data using the SEO service
    $metaData = SeoMetaService::resolve($path);

    // If entity not found, return 404 status but still render the React app
    // (React's NotFound component will handle the UI)
    if ($metaData['notFound'] ?? false) {
      return response()
        ->view('layouts.react-app', $metaData)
        ->setStatusCode(404);
    }

    // Return the Blade layout with meta data
    return view('layouts.react-app', $metaData);
  }
}
