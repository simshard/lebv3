<div class="form-group">
  <label for="floorArea">Floor Area (m²)</label>
  <input  name="floorArea" type="text" id="floorArea" class="form-control col-md-6 {{ $errors->has('floorArea')?'is-invalid':'' }}" value="{{old('floorArea',$project->floorArea)}}" required="required">
</div>

<div class="form-group">
  <label for="floorAreaCalcMethod">Floor Area Calculation method </label>
  <select required="required" id="floorAreaCalcMethod" name="floorAreaCalcMethod" class="form-control  col-md-6 {{ $errors->has('floorAreaCalcMethod')?'is-invalid':'' }}">
    <option value="">Please select Floor Area Calculation Method...</option>
    @foreach($FLOORAREACALCArr as $floorAreaCalcMethod)
      <option value="{{$floorAreaCalcMethod}}" {{ old('floorAreaCalcMethod',$project->floorAreaCalcMethod)==$floorAreaCalcMethod ?'selected':''}}>{{$floorAreaCalcMethod}}</option>
    @endforeach
  </select>
 </div>



 <div class="form-group">
   <label for="electric_predev_fuelUse">Pre-refurbishment annual electric fuelUse (kWh/yr)</label>
   <input  name="electric_predev_fuelUse" type="text" id="electric_predev_fuelUse" class="form-control col-md-6 {{ $errors->has('electric_predev_fuelUse')?'is-invalid':'' }}" value="{{old('electric_predev_fuelUse',$project->electric_predev_fuelUse)}}">
 </div>

 <div class="form-group">
   <label for="gas_predev_fuelUse">Pre-refurbishment annual gas fuelUse (kWh/yr)</label>
   <input  name="gas_predev_fuelUse" type="text" id="gas_predev_fuelUse" class="form-control col-md-6 {{ $errors->has('gas_predev_fuelUse')?'is-invalid':'' }}" value="{{old('gas_predev_fuelUse',$project->gas_predev_fuelUse)}}">
 </div>

 <div class="form-group">
   <label for="oil_predev_fuelUse">Pre-refurbishment annual oil fuelUse (kWh/yr)</label>
   <input  name="oil_predev_fuelUse" type="text" id="oil_predev_fuelUse" class="form-control col-md-6 {{ $errors->has('oil_predev_fuelUse')?'is-invalid':'' }}" value="{{old('oil_predev_fuelUse',$project->oil_predev_fuelUse)}}">
 </div>

 <div class="form-group">
   <label for="lpg_predev_fuelUse">Pre-refurbishment annual lpg fuelUse (kWh/yr)</label>
   <input  name="lpg_predev_fuelUse" type="text" id="lpg_predev_fuelUse" class="form-control col-md-6 {{ $errors->has('lpg_predev_fuelUse')?'is-invalid':'' }}" value="{{old('lpg_predev_fuelUse',$project->lpg_predev_fuelUse)}}">
 </div>

 <div class="form-group">
   <label for="wood_predev_fuelUse">Pre-refurbishment annual Solid Fuel &amp; Wood fuelUse (kWh/yr)</label>
   <input  name="wood_predev_fuelUse" type="text" id="wood_predev_fuelUse" class="form-control col-md-6 {{ $errors->has('wood_predev_fuelUse')?'is-invalid':'' }}" value="{{old('wood_predev_fuelUse',$project->wood_predev_fuelUse)}}">
 </div>





  <div class="form-group">
    <label for="electric_forecast_fuelUse">Forecast annual electric fuelUse (kWh/yr)</label>
    <input  name="electric_forecast_fuelUse" type="text" id="electric_forecast_fuelUse" class="form-control col-md-6 {{ $errors->has('electric_forecast_fuelUse')?'is-invalid':'' }}" value="{{old('electric_forecast_fuelUse',$project->electric_forecast_fuelUse)}}">
  </div>

  <div class="form-group">
    <label for="gas_forecast_fuelUse">Forecast annual gas fuelUse (kWh/yr)</label>
    <input  name="gas_forecast_fuelUse" type="text" id="gas_forecast_fuelUse" class="form-control col-md-6 {{ $errors->has('gas_forecast_fuelUse')?'is-invalid':'' }}" value="{{old('gas_forecast_fuelUse',$project->gas_forecast_fuelUse)}}">
  </div>

  <div class="form-group">
    <label for="oil_forecast_fuelUse">Forecast annual oil fuelUse (kWh/yr)</label>
    <input  name="oil_forecast_fuelUse" type="text" id="oil_fuelUse" class="form-control col-md-6 {{ $errors->has('oil_forecast_fuelUse')?'is-invalid':'' }}" value="{{old('oil_forecast_fuelUse',$project->oil_forecast_fuelUse)}}">
  </div>

  <div class="form-group">
    <label for="lpg_forecast_fuelUse">Forecast annual lpg fuelUse (kWh/yr)</label>
    <input  name="lpg_forecast_fuelUse" type="text" id="lpg_fuelUse" class="form-control col-md-6 {{ $errors->has('lpg_forecast_fuelUse')?'is-invalid':'' }}" value="{{old('lpg_forecast_fuelUse',$project->lpg_forecast_fuelUse)}}">
  </div>

  <div class="form-group">
    <label for="wood_forecast_fuelUse">Forecast annual Solid Fuel &amp; Wood fuelUse (kWh/yr)</label>
    <input  name="wood_forecast_fuelUse" type="text" id="wood_forecast_fuelUse" class="form-control col-md-6 {{ $errors->has('wood_forecast_fuelUse')?'is-invalid':'' }}" value="{{old('wood_forecast_fuelUse',$project->wood_forecast_fuelUse)}}">
  </div>




 <div class="form-group">
   <label for="electric_fuelUse">Measured annual electric fuelUse (kWh/yr)</label>
   <input  name="electric_fuelUse" type="text" id="electric_fuelUse" class="form-control col-md-6 {{ $errors->has('electric_fuelUse')?'is-invalid':'' }}" value="{{old('electric_fuelUse',$project->electric_fuelUse)}}">
 </div>

 <div class="form-group">
   <label for="gas_fuelUse">Measured annual gas fuelUse (kWh/yr)</label>
   <input  name="gas_fuelUse" type="text" id="gas_fuelUse" class="form-control col-md-6 {{ $errors->has('gas_fuelUse')?'is-invalid':'' }}" value="{{old('gas_fuelUse',$project->gas_fuelUse)}}">
 </div>

 <div class="form-group">
   <label for="oil_fuelUse">Measured annual oil fuelUse (kWh/yr)</label>
   <input  name="oil_fuelUse" type="text" id="oil_fuelUse" class="form-control col-md-6 {{ $errors->has('oil_fuelUse')?'is-invalid':'' }}" value="{{old('oil_fuelUse',$project->oil_fuelUse)}}">
 </div>

 <div class="form-group">
   <label for="lpg_fuelUse">Measured annual lpg fuelUse (kWh/yr)</label>
   <input  name="lpg_fuelUse" type="text" id="lpg_fuelUse" class="form-control col-md-6 {{ $errors->has('lpg_fuelUse')?'is-invalid':'' }}" value="{{old('lpg_fuelUse',$project->lpg_fuelUse)}}">
 </div>

 <div class="form-group">
   <label for="wood_fuelUse">Measured annual Solid Fuel &amp; Wood fuelUse (kWh/yr)</label>
   <input  name="wood_fuelUse" type="text" id="wood_fuelUse" class="form-control col-md-6 {{ $errors->has('wood_fuelUse')?'is-invalid':'' }}" value="{{old('wood_fuelUse',$project->wood_fuelUse)}}">
 </div>


  <div class="form-group">
    <label for="annualHeatReq">Annual Heat Requirement (kWh/m&#178;.yr) </label>
    <input  name="annualHeatReq" type="text" id="annualHeatReq" class="form-control col-md-6 {{ $errors->has('annualHeatReq')?'is-invalid':'' }}" value="{{old('annualHeatReq',$project->annualHeatReq)}}">
  </div>

  <div class="form-group">
    <label for="heatLoad">Heat Load (W/m&#178;)</label>
    <input  name="heatLoad" type="text" id="heatLoad" class="form-control col-md-6 {{ $errors->has('heatLoad')?'is-invalid':'' }}" value="{{old('heatLoad',$project->heatLoad)}}">
  </div>


