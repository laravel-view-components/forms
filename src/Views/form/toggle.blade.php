<label {{ $attributes->merge(['class' => 'form-check form-switch']) }}>
  <input name="{{ $name }}" type="checkbox" class="form-check-input" {{ $checked ? 'checked' : old($name) }}>
  <span class="form-check-label">{{ $slot }}</span>
  @error($name)
  <div class="form-check-description invalid-feedback">{{ $message }}</div>
  @enderror
</label>
