<div class="mb-3">
  <label class="form-label">Advanced tags input</label>
  <select name={{$name}} id={{$id}} class="form-select" multiple>
    <option value="HTML">HTML</option>
    <option value="JavaScript">JavaScript</option>
    <option value="CSS">CSS</option>
    <option value="jQuery">jQuery</option>
    <option value="Bootstrap">Bootstrap</option>
    <option value="Ruby" selected>Ruby</option>
    <option value="Python" selected>Python</option>
  </select>
</div>

@push('scripts')
<script type="text/javascript">
  $(document).ready(function () {
  	$('#{{$id}}').selectize({
  		maxItems: 15,
  		plugins: ['remove_button'],
  	});
  });
</script>
@endpush
