@if ($link)
  <a href="{{ $link }}" target="_blank">{{ $viewText }}</a>
@else
  <span>{{ $nullText }}</span>
@endif
