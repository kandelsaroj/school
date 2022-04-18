@extends('.admin.layouts.app')
@section('content')     
@section('title')
create_services
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('services.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">htext</label>
    <input type="text" class="form-control" name="htext" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">shead</label>
    <input type="text" class="form-control" name="shead" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label"> stext</label> 
      <input type="text" class="form-control"  name="stext" required>
      <div class="invalid-feedback">
        Please choose a valid file.
      </div>
    </div>
  </div>
  
  <div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>
</form>

@endsection