<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <label class="form-label">{{ $label }}</label>
  <div class="row row-sm">
    @php
      $colors = ['blue', 'azure', 'indigo', 'purple', 'pink', 'red', 'orange', 'yellow', 'lime', 'green', 'teal', 'cyan', 'gray', 'gray-dark']
    @endphp
    @foreach($colors as $color)
    <div class="col-auto">
      <label class="form-colorinput">
        <input name="{{ $name }}" type="radio" value="{{ $color }}" class="form-colorinput-input">
        <span class="form-colorinput-color bg-{{ $color }}"></span>
      </label>
    </div>
    @endforeach
  </div>
</div>
