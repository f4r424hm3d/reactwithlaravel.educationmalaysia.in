@props([
    'label' => '',
    'name',
    'id' => null,
    'checked' => false,
])

<div class="form-check">
  <input type="checkbox" name="{{ $name }}" id="{{ $id ?? $name }}" class="form-check-input" value="1"
    {{ old($name, $sd[$name] ?? null) ? 'checked' : '' }} {{ $checked ? 'checked' : '' }}>

  <label class="form-check-label" for="{{ $id ?? $name }}">
    {{ $label }}
  </label>
</div>
