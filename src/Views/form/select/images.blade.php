<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <label class="form-label">{{ $label }}</label>
  <div class="row row-sm">
  @foreach($options as $id=>$url)
    <div class="col-6 col-sm-4">
      <label class="form-imagecheck mb-2">
        <input name="form-imagecheck" type="checkbox" value="{{$id}}" class="form-imagecheck-input">
        <span class="form-imagecheck-figure">
          <img src="{{$url}}" class="form-imagecheck-image">
        </span>
      </label>
    </div>
  @endforeach
  </div>
</div>
