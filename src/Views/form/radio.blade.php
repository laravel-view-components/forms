<label {{ $attributes->merge(['class' => 'form-check']) }}>
  <input name="{{ $name }}" type="radio" class="form-check-input">
  <span class="form-check-label">{{ $label }}</span>
  @error($name)
  <div class="form-check-description invalid-feedback">{{ $message }}</div>
  @enderror
</label>
