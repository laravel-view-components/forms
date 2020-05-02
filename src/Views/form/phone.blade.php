<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <label for="{{ $name }}" class="form-label">{{ $label }}</label>
  <input name="{{ $name }}" type="text" class="form-control @error($name) is-invalid @enderror" data-mask="(000) 000-0000" data-mask-visible="true" placeholder="{{ $placeholder }}" >
  @error($name)
  <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

@push('scripts')
<script type="text/javascript">
  (function () {
  	/**
  	 * Input mask
  	 */
  	var maskElementList = [].slice.call(document.querySelectorAll('[data-mask]'))
  	maskElementList.map(function (maskEl) {
  		return new IMask(maskEl, {
  			mask: maskEl.dataset.mask,
  			lazy: maskEl.dataset['mask-visible'] === 'true'
  		})
  	});
  })();
</script>
@endpush
