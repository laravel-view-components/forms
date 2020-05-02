<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <div class="row row-sm">
    <div class="col">
      <input name="{{ $name }}" value="{{ old($name) }}" type="text" class="form-control" placeholder="{{ $placeholder }}" autocomplete="off">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-white btn-icon">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="10" cy="10" r="7"></circle><line x1="21" y1="21" x2="15" y2="15"></line></svg>
      </button>
    </div>
  </div>
</div>
