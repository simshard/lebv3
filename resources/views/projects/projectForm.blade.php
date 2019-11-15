<fieldset>
  <div class="form-group">
    <label for="projectName">Project Name</label>
      <input required="required" name="projectName" type="text" id="projectName" class="form-control col-md-6 {{ $errors->has('projectName')?'is-invalid':'' }}" value="{{old('projectName',$project->projectName)}}" >
   </div>

<div class="form-group">
  <label for="shortDescription">Short Description of building project</label>
   <textarea aria-describedby="sDescHelpBlock" rows="2" name="shortDescription" cols="50" id="shortDescription" class="form-control col-md-6 {{ $errors->has('shortDescription')?'is-invalid':''}}">{{old('shortDescription',$project->shortDescription)}}</textarea>
    <small id="sDescHelpBlock" class="form-text text-muted">
 Please enter a  brief project description
</small>
</div>

<div class="form-group">
    <label for="projectLocation">Project Town/City</label>
    <input required="required" name="projectLocation" type="text" id="projectLocation" class="form-control col-md-6 {{ $errors->has('projectLocation')?'is-invalid':'' }}" value="{{old('projectLocation',$project->projectLocation)}}" >
</div>

<div class="form-group">
  <label for="projectCounty">Project County </label>
  <select required="required" id="projectCounty" name="projectCounty" class="form-control  col-md-6 {{ $errors->has('projectCounty')?'is-invalid':'' }}">
    <option value="">Please select UK county...</option>
    @foreach($ukcountiesArr as $ukcounty)
         <option value="{{$ukcounty}}"  {{$ukcounty==old('projectCounty',$project->projectCounty)?'selected':''}}>
           {{$ukcounty}}
         </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="projectCountry">Project Country</label>
  <select required="required" id="projectCountry" name="projectCountry" class="form-control  col-md-6">
    <option value="">Please select UK country...</option>
    @foreach($ukcountryArr as $ukcountry)
      <option value="{{$ukcountry}}" {{$ukcountry==old('projectCountry',$project->projectCountry)?'selected':''}}>{{$ukcountry}}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="energyStandard">Energy Standard</label>
  <select required="required" id="energyStandard" name="energyStandard" class="form-control  col-md-6">
    <option value="">Please select Energy Standard...</option>
    @foreach($ENERGYSTANDARDSArr as $energyStandard)
      <option value="{{$energyStandard}}" {{ $energyStandard==old('energyStandard',$project->energyStandard) ? 'selected' : '' }}>{{$energyStandard}}</option>
    @endforeach
  </select>
 </div>

<div class="form-group">
  <label for="alt_energyStandard">Other Energy Standard</label>

    <input type="text" name="alt_energyStandard"  class="form-control  col-md-6 {{ $errors->has('alt_energyStandard')?'is-invalid':'' }}" value="{{old('alt_energyStandard',$project->alt_energyStandard)}}" aria-describedby="altEsHelpBlock"  >
 <small id="altEsHelpBlock" class="form-text text-muted">
  If you selected <em>Other</em> for energy standard -please describe  it here.
</small>
</div>

<div class="form-group">
  <label for="buildType">Build Type</label>
  <select required="required" id="buildType" name="buildType" class="form-control  col-md-6 {{ $errors->has('buildType')?'is-invalid':'' }}">
    <option value="">Please select Build Type...</option>
    @foreach($BUILDTYPEArr as $buildType)
      <option value="{{$buildType}}" {{  $buildType==old('buildType',$project->buildType) ? 'selected' : '' }}>{{$buildType}}</option>
    @endforeach
  </select>
 </div>

<div class="form-group">
  <label for="buildingSector">Building Sector</label>
  <select required="required" id="buildingSector" name="buildingSector" class="form-control  col-md-6 {{ $errors->has('buildingSector')?'is-invalid':'' }}">
    <option value="">Please select building sector....</option>
    @foreach($BUILDINGSECTORArr as $buildingSector)
      <option value="{{$buildingSector}}" {{$buildingSector==old('buildingSector',$project->buildingSector) ? 'selected' : '' }}>{{$buildingSector}}</option>
    @endforeach
  </select>
 </div>

<div class="form-group">
  <label for="propertyType">Property Type</label>
  <select required="required" id="propertyType" name="propertyType" class="form-control  col-md-6 {{ $errors->has('propertyType')?'is-invalid':'' }}">
    <option value="">Please select Property Type...</option>
    @foreach($PROPERTYTYPEArr as $propertyType)
      <option value="{{$propertyType }}" {{old('propertyType',$project->propertyType) == $propertyType  ? 'selected' : '' }}>{{$propertyType }}</option>
    @endforeach
  </select>
 </div>

<div class="form-group">
<label for="constructionType">Construction Type</label>
<select required="required" id="constructionType" name="constructionType" class="form-control  col-md-6 {{ $errors->has('constructionType')?'is-invalid':'' }}">
  <option value="">Please select ...</option>
  @foreach($CONSTRUCTIONTYPEArr as $constructionType)
    <option value="{{$constructionType}}" {{ old('constructionType',$project->constructionType) == $constructionType ? 'selected' : '' }}>{{$constructionType}}</option>
  @endforeach
</select>
 </div>

<div class="form-group">
  <label for="alt_constructionType">Other Construction Type</label>
        <input type="text" name="alt_constructionType" id="alt_constructionType"  class="form-control  col-md-6 {{ $errors->has('alt_constructionType')?'is-invalid':'' }}" value="{{old('alt_constructionType',$project->alt_constructionType)}} " aria-describedby="altCtHelpBlock"  >
 <small id="altCtHelpBlock" class="form-text text-muted">
  If you selected <em>Other</em> for construction type -please describe  it here.
</small>
</div>


<div class="form-group">
  <button type="submit" name="submit"  class=" btn btn-primary btn-info">
    {{ $submitButtonText ?? 'Create Project' }}
</button>
 </div>
</fieldset>


<script>
    // console.log('JQUERY not yet loaded');
   jQuery(document).ready(function(){
     console.log('JQUERY loaded');
  });
</script>
