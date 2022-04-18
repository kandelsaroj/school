@extends('.admin.layouts.app')
@section('content')
@section('title')
create_file
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('file.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">title</label>
    <input type="text" class="form-control" name="title" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Details</label>
    <input type="text" class="form-control" name="details" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label">Image</label> 
      <input type="file"   name="image" required>
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