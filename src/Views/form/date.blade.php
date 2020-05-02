Date input coming soon...

@if(false)
<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <label class="form-label">Datepicker</label>
  <input id="{{ $id }}" type="date" value="2020-06-20" class="form-control mb-2" placeholder="Select a date" />
</div>

@push('scripts')
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function () {
  	flatpickr(document.getElementById('{{ $id }}'), {
  	});
  });
</script>
@endpush
@endif
