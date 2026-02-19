@if ($path)
  <a href="{{ call_user_func($linkFunction, $path) }}" target="_blank">{{ $viewText }}</a>
@else
  <span>{{ $nullText }}</span>
@endif
