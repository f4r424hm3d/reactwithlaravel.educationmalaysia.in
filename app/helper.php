<?php

use App\Helpers\FileStorageHelper;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

define('TO_EMAIL', 'studytutelage@gmail.com');
define('TO_NAME', 'Team tutelage Study');
define('CC_EMAIL', 'vandana@educationmalaysia.in');
define('CC_NAME', 'Vandana Sarswat');

// define('TO_EMAIL', 'farazahmad280@gmail.com');
// define('TO_NAME', 'Mohd Faraz');
// define('CC_EMAIL', '4hm3df4r42@gmail.com');
// define('CC_NAME', 'Education Malaysia Education');

// define('BCC_EMAIL', 'amanahlawat1918@gmail.com');
// define('BCC_NAME', 'Aman Ahlawat');


define('BCC_EMAIL', 'farazahmad280@gmail.com');
define('BCC_NAME', 'Mohd Faraz');

define('site_var', 'MYS');
define('DOMAIN', 'educationmalaysia.in');

define('phone_india', ' +91-98185-60331');
define('contact_email', ' info@educationmalaysia.in');

define('IMAGE_DOMAIN', 'https://www.images.britannicaoverseas.com/em');

if (!function_exists('ftpFile')) {

  function ftpFile($path)
  {
    $output = IMAGE_DOMAIN . $path;
    return $output;
  }
}


if (!function_exists('printArray')) {
  function printArray($data)
  {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }
}
if (!function_exists('getFormattedDate')) {
  function getFormattedDate($date, $formate)
  {
    return date($formate, strtotime($date));
  }
}
if (!function_exists('slugify')) {
  function slugify($text)
  {
    // Swap out Non "Letters" with a -
    $text = preg_replace('/[^\\pL\d]+/u', '-', $text);
    // Trim out extra -'s
    $text = trim($text, '-');
    // Convert letters that we have left to the closest ASCII representation
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Make text lowercase
    $text = strtolower($text);
    // Strip out anything we haven't been able to convert
    $text = preg_replace('/[^-\w]+/', '', $text);
    return $text;
  }
}
if (!function_exists('unslugify')) {
  function unslugify($text)
  {
    // Swap out Non "-" with a space
    $text = str_replace('-', ' ', $text);
    $text = str_replace('_', ' ', $text);
    // Trim out extra spaces
    $text = trim($text, ' ');
    // Make text lowercase
    $text = ucwords($text);
    return $text;
  }
}
if (!function_exists('dateDiff')) {
  function dateDiff($date1, $date2)
  {
    $date1_ts = strtotime($date1);
    $date2_ts = strtotime($date2);
    return $days_between = ceil(abs($date2_ts - $date1_ts) / 86400);
  }
}
if (!function_exists('aurl')) {
  function aurl($path = null)
  {
    $path = strtolower($path);
    if ($path != '') {
      return url('/admin/' . $path);
    } else {
      return url('/admin/');
    }
  }
}
if (!function_exists('uurl')) {
  function uurl($path = null)
  {
    $path = strtolower($path);
    if ($path != '') {
      return url('/user/' . $path);
    } else {
      return url('/user/');
    }
  }
}
if (!function_exists('j2s')) {
  function j2s($data)
  {
    if (!empty($data)) {
      $arr = json_decode($data, true);
      if (is_array($arr)) {
        $output = implode(', ', $arr);
      } else {
        $output = 'N/A';
      }
    } else {
      $output = 'N/A';
    }
    return $output;
  }
}

if (!function_exists('jsonToTextByLimit')) {
  function jsonToTextByLimit($data, $limit)
  {
    if ($data != null) {
      $arr = json_decode($data, true); // Decode JSON as associative array
      $output = implode(', ', array_slice($arr, 0, $limit)); // Get the first three elements
    } else {
      $output = 'N/A';
    }
    return $output;
  }
}
if (!function_exists('replaceTag')) {
  function replaceTag($string, $array)
  {
    foreach ($array as $key => $value) {
      $string = $string == null ? null : str_replace('%' . $key . '%', $value, $string);
    }
    $string = trim(preg_replace('/\s+/', ' ', $string));
    //$string = ucwords($string);
    return $string;
  }
}
if (!function_exists('universityLogo')) {
  function universityLogo($path = null)
  {
    if ($path != '') {
      return asset($path);
    } else {
      return asset('storage/front/default/university-logo.png');
    }
  }
}
if (!function_exists('universityBanner')) {
  function universityBanner($path = null)
  {
    if ($path != '') {
      return asset($path);
    } else {
      return asset('storage/front/default/university-banner.jpeg');
    }
  }
}
if (!function_exists('getPerc')) {
  function getPerc($mult, $div)
  {
    return $result = ($mult * 100) / $div;
  }
}
if (!function_exists('userIcon')) {
  function userIcon($path = null)
  {
    if ($path != null || $path != '') {
      return asset($path);
    } else {
      return asset('storage/front/default/user-icon.png');
    }
  }
}
if (!function_exists('categoryIcon')) {
  function categoryIcon($path = null)
  {
    if ($path != null || $path != '') {
      return asset($path);
    } else {
      return asset('storage/front/default/category.svg');
    }
  }
}
if (!function_exists('json_to_string')) {
  function json_to_string($value)
  {
    $output = $value != null ? json_decode($value) : '';
    $output = $output != null ? implode(', ', $output) : '';
    return $output;
  }
}
if (!function_exists('colToStr')) {
  function colToStr($value)
  {
    $output = str_replace('_', ' ', $value);
    $output = ucwords($output);
    return $output;
  }
}
if (!function_exists('json_to_list')) {
  function json_to_list($value)
  {
    if ($value !== null) {
      $arr = json_decode($value);
      if ($arr !== null && (is_array($arr) || is_object($arr))) {
        $output = '<ul>';
        foreach ($arr as $item) {
          $output .= "<li>$item</li>";
        }
        $output .= '</ul>';
      } else {
        $output = 'N/A';
      }
    } else {
      $output = 'N/A';
    }
    return $output;
  }
}
if (!function_exists('gr_site_key')) {
  function gr_site_key()
  {
    return "6Lf6t2wpAAAAACTIO7byB8-ucDBfIssDXcxD3PAr";
  }
}
if (!function_exists('gr_secret_key')) {
  function gr_secret_key()
  {
    return "6Lf6t2wpAAAAAO39ZjeGK4-APTubxFFWR5Thi1ZD";
  }
}
if (!function_exists('generateMathQuestion')) {
  function generateMathQuestion()
  {
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $operator = ['+', '-', '*'][rand(0, 2)];

    $questionText = "$num1 $operator $num2";
    $answer = eval("return $num1 $operator $num2;");

    return [
      'text' => $questionText,
      'answer' => $answer,
    ];
  }
}
if (!function_exists('getISOFormatTime')) {
  /**
   * Get the ISO 8601 formatted time.
   *
   * @param  string  $time
   * @return string
   */
  function getISOFormatTime($time)
  {
    $time = Carbon::parse($time);
    return $time->format('Y-m-d\TH:i:sP');
  }
}
if (!function_exists('formatLocation')) {
  /**
   * Format location string based on city, state, and country values.
   *
   * @param string|null $city
   * @param string|null $state
   * @param string|null $country
   * @return string
   */
  function formatLocation(?string $city, ?string $state, ?string $country): string
  {
    $locationParts = [];

    if (!empty($city)) {
      $locationParts[] = $city;
    }

    if (!empty($state)) {
      $locationParts[] = $state;
    }

    if (!empty($country)) {
      $locationParts[] = $country;
    }

    return implode(', ', $locationParts);
  }
}
if (!function_exists('callPhoneNumber')) {
  function callPhoneNumber($phoneNumber)
  {
    // Remove all hyphens from the phone number
    return str_replace('-', '', $phoneNumber);
  }
}
if (!function_exists('ip_details')) {

  function ip_details($ip)
  {
    $json = file_get_contents("http://ipinfo.io/{$ip}");
    $details = json_decode($json);
    return $details;
  }
}
if (!function_exists('universityRating')) {

  function universityRating($rating)
  {
    $gs = ($rating * 100) / 5;
    $gs = $gs > 0 ? $gs : 90;
    $output = '<div class="fill-ratings" style="width:' . $gs . '%;"><span>★★★★★</span></div><div class="empty-ratings"><span>★★★★★</span></div>';
    return $output;
  }
}
if (!function_exists('reacturl')) {
  function reacturl($path = null)
  {
    $path = strtolower($path);
    return 'https://www.react.educationmalaysia.in/' . $path;
  }
}
if (! function_exists('cdnPath')) {
  function cdnPath($cdn, $asset)
  {
    return '//' . rtrim($cdn, '/') . '/' . ltrim($asset, '/');
  }
}

// global CDN link helper function
if (! function_exists('cdn')) {
  function cdn($asset)
  {
    // Verify if KeyCDN URLs are present in the config file
    if (! Config::get('app.cdn')) {
      return asset($asset);
    }

    // Get file name incl extension and CDN URLs
    $cdns = Config::get('app.cdn');
    $assetName = basename($asset);

    // Remove query string
    $assetName = explode("?", $assetName)[0];

    // Select the CDN URL based on the extension
    foreach ($cdns as $cdn => $types) {
      if (preg_match('/^.*\.(' . $types . ')$/i', $assetName)) {
        return cdnPath($cdn, $asset);
      }
    }

    // In case of no match use the last in the array
    end($cdns);
    return cdnPath(key($cdns), $asset);
  }
}

if (! function_exists('storage_cdn')) {
  function storage_cdn($asset)
  {
    // Verify if KeyCDN URLs are present in the config file
    if (! Config::get('app.cdn')) {
      return asset('storage/' . $asset);
    }

    // Get file name incl extension and CDN URLs
    $cdns = Config::get('app.cdn');
    $assetName = basename($asset);

    // Remove query string
    $assetName = explode("?", $assetName)[0];

    // Select the CDN URL based on the extension
    foreach ($cdns as $cdn => $types) {
      if (preg_match('/^.*\.(' . $types . ')$/i', $assetName)) {
        return cdnPath($cdn, $asset);
      }
    }

    // In case of no match use the last in the array
    end($cdns);
    return cdnPath(key($cdns), $asset);
  }
}

if (!function_exists('upload_file')) {
  /**
   * Global helper for file upload
   *
   * @param \Illuminate\Http\UploadedFile|null $file
   * @param string $folder
   * @param string|null $oldFilePath
   * @param string|null $extension
   * @return array|null ['filename' => string, 'path' => string]
   */
  function upload_file(?\Illuminate\Http\UploadedFile $file, string $folder, ?string $oldFilePath = null, ?string $extension = null): ?array
  {
    return FileStorageHelper::upload($file, $folder, $oldFilePath, $extension);
  }
}
if (!function_exists('delete_file')) {
  function delete_file(?string $filePath): bool
  {
    if ($filePath && Storage::disk('public')->exists($filePath)) {
      return Storage::disk('public')->delete($filePath);
    }
    return false;
  }
}

if (! function_exists('storage_url')) {
  function storage_url($path)
  {
    return asset('storage/' . ltrim($path, '/'));
  }
}

if (! function_exists('generateMathQuestion2')) {
  /**
   * Generate a random math question and return question + answer.
   *
   * @return array ['label' => string, 'answer' => int]
   */
  function generateMathQuestion2(): array
  {
    $num1 = rand(1, 9);
    $num2 = rand(1, 9);

    $operations = [
      '+' => $num1 + $num2,
      '-' => $num1 - $num2,
    ];

    $operator = Arr::random(array_keys($operations));

    return [
      'label'  => "What is {$num1} {$operator} {$num2}?",
      'answer' => $operations[$operator],
    ];
  }
}
if (!function_exists('pipeToJson')) {
  /**
   * Convert a pipe-separated string into JSON array.
   *
   * @param string|null $string
   * @return string|null
   */
  function pipeToJson(?string $string): ?string
  {
    if (empty($string)) {
      return null;
    }

    // 1) Convert string → array
    $array = array_map('trim', explode('|', $string));

    // 2) Convert array → JSON
    return json_encode($array);
  }
}
if (!function_exists('jsonToPipe')) {
  /**
   * Convert a JSON array into a pipe-separated string.
   *
   * @param string|null $json
   * @return string|null
   */
  function jsonToPipe(?string $json): ?string
  {
    if (empty($json)) {
      return null;
    }

    $array = json_decode($json, true);

    if (!is_array($array)) {
      return null;
    }

    return implode(' | ', $array);
  }
}
if (!function_exists('arrayToPipe')) {
  /**
   * Convert an array into a pipe-separated string.
   *
   * @param array|null $array
   * @return string|null
   */
  function arrayToPipe(?array $array): ?string
  {
    if (empty($array)) {
      return null;
    }

    return implode(' | ', $array);
  }
}
if (!function_exists('stringToArray')) {
  /**
   * Convert a comma or pipe separated string into an array.
   *
   * @param string|null $string
   * @return array|null
   */
  function stringToArray(?string $string): ?array
  {
    if (empty($string)) {
      return null;
    }

    // Split by comma OR pipe
    $array = preg_split('/[,\|]/', $string);

    // Trim values and remove empty entries
    $array = array_filter(array_map('trim', $array));

    return array_values($array);
  }
}
if (!function_exists('arrayToString')) {
  /**
   * Convert an array into a pipe-separated string.
   *
   * @param array|null $array
   * @return string|null
   */
  function arrayToString(?array $array): ?string
  {
    if (empty($array)) {
      return null;
    }

    $array = array_filter(array_map('trim', $array));

    return implode(' , ', $array);
  }
}
if (!function_exists('sitemap_url')) {
  function sitemap_url($path = null)
  {
    $path = strtolower($path);
    if ($path != '') {
      return 'https://www.educationmalaysia.in/' . $path;
    } else {
      return 'https://www.educationmalaysia.in/';
    }
  }
}
