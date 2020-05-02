<div {{ $attributes->merge(['class' => 'form-group']) }}>
  <label class="form-label">{{ $label }}</label>
  <select name={{$name}} id={{$id}} class="form-select">
    <option>Click to select...</option>
  @foreach($options as $value=>$option)
    <option value="{{ $value }}">{{ $option }}</option>
  @endforeach
  </select>
</div>

@push('scripts')
<script type="text/javascript">
  $(document).ready(function () {
  	$('#{{$id}}').selectize({
  	});
  });
</script>
@endpush
