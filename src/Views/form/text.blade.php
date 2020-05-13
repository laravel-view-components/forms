<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <label for="{{ $name }}" class="form-label">{{ $label }}</label>
  <input name="{{ $name }}" type="text" class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" value="{{ old($name) }}">
  @error($name)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
