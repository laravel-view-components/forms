<div class="mb-3">
  <label class="form-label">{{ $label }}</label>
  <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
  @foreach($users as $user)
    <label class="form-selectgroup-item flex-fill">
      <input type="{{ $multiple ? 'checkbox' : 'radio' }}" name="{{$name}}[]" value="{{ $user->id }}" class="form-selectgroup-input">
      <div class="form-selectgroup-label d-flex align-items-center p-3">
        <div class="mr-3">
          <span class="form-selectgroup-check"></span>
        </div>
        <div class="form-selectgroup-label-content d-flex align-items-center">
          <span class="avatar mr-3" style="background-image: url({{ $user->avatar }})"></span>
          <div class="lh-sm">
            <div class="strong">{{ $user->name }}</div>
            <div class="text-muted">{{ $user->title }}</div>
          </div>
        </div>
      </div>
    </label>
  @endforeach
  </div>
</div>
