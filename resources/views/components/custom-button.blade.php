<a href="{{ $url }}" class="waves-effect waves-light btn {{ $btnSize }} {{ $btnColor }}" target="_blank">
  {{ $label }}
  @if ($count > 0)
    <span class="badge {{ $badgeClass }}">{{ $count }}</span>
  @endif
</a>
