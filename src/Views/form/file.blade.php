<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <div class="form-label">{{ $label }}</div>
  <div class="form-file">
    <input type="file" class="form-file-input" id="{{ $name }}">
    <label class="form-file-label @error($name) is-invalid @enderror" for="{{ $name }}">
      <span class="form-file-text">Choose file...</span>
      <span class="form-file-button">Browse</span>
    </label>
  </div>
  @error($name)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
