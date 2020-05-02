<div {{ $attributes->merge(['class' => 'row']) }} id="{{$id}}">
  <div class="col-md-12">
    <x-form-text name="{{$name}}[street]" label="Street" placeholder="Enter Street" class="mb-2"/>
  </div>
  <div class="col-md-4">
    <x-form-text name="{{$name}}[address_level3]" label="City" placeholder="Enter City" class="mb-2"/>
  </div>
  <div class="col-md-4">
    <x-form-text name="{{$name}}[address_level1]" label="State" placeholder="Enter State" class="mb-2"/>
  </div>
  <div class="col-md-4">
    <x-form-text name="{{$name}}[postal_code]" label="Zip" placeholder="Enter Zip" class="mb-2"/>
  </div>
</div>
