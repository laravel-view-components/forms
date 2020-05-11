<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <label for="{{ $id }}" class="form-label">{{ $label }} <span class="form-label-description">0/100</span></label>
  <textarea id="{{ $id }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}">{{ old($name) }}</textarea>
  @error($name)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

@push('scripts')
<script type="text/javascript" defer>
  document.getElementById("{{ $id }}").oninput = function () {
    document.querySelector("label[for={{ $id }}]").querySelector("span.form-label-description").innerText = this.value.length + "/200";
  };

  autosize(document.getElementById("{{ $id }}"));
</script>
@endpush
