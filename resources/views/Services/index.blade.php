
@extends('admin.layouts.app')
@section('content')

    <div class="content-body">
          {{-- main content goes here. --}}
        @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ Session::get('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
          <section id="multi-column">
            <div class="row">
              <div class="col-12">
                <div class="card">
                 
                  <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <div class="row mb-1">
                            <div class="col-md-6">
                            <a name="" id="" class="btn btn-info" href="{{route('services.create')}}" role="button"><i class="la la-plus-square"></i></a>
                            <a name="" id="" class="btn btn-success" href="{{url('admin/services')}}" role="button"><i class="la la-refresh"></i></a>
                            </div>
                            <div class="col-md-6">
                            @if( request()->get('data-show') )
                            <a name="" id="" class="btn btn-primary float-right" href="{{url('admin/services')}}" role="button"><i class="la la-bars"
                                                       
                            ></i></a>
                            @else
                            <a name="" id="" class="btn btn-danger float-right" href="{{url('admin/services?data-show=trashed')}}" role="button"><i class="la la-trash"></i></a>
                            @endif
                            </div>
                        </div>
                      <table class="table table-striped table-bordered multi-ordering">
                        <thead>
                          <tr>
                            <th>S.N.</th>
                            <th>htext</th>
                            <th>shead</th>
                            <th>stext</th>
                            <th>Status</th>
                            <th>Action</th>

                           
                          </tr>
                        </thead>
                        <tbody>
                       @foreach($services as $service)
                          <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $service->htext}}</td>
                          <td>{{ $service->shead}}</td>
                         
                          <td>{{ $service->stext}}</td>
                            <td>
                                @if($service->status==1)
                                     <p class="btn btn-primary btn-sm">Active</p>
                                @else
                                     <p class="btn btn-secondary btn-sm">Deactive</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('services.show',['service'=>$service->id])}}" name="submit" class="btn btn-info btn-sm float-left"><i class="la la-eye"></i></a>
                                @if( request()->get('data-show') )
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#iconModal">
                                        <i class="la la-trash"></i>
                                </button>
                                @else
                                <form action="{{ route('services.destroy',$service) }}" method="POST" enctype="multipart/form-data" class="float-left">
                                    @csrf
                                    @method('delete')
                                    <button name="submit" class="btn btn-danger btn-sm"><i class="la la-trash"></i></button>
                                </form>
                                @endif
                                {{-- Force delete modal --}}
                                <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                                aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel2"><i class="la la-road2"></i>Are you sure you want to permanently delete this record?</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{ route('services.destroy',$service) }}" method="POST" enctype="multipart/form-data" class="float-left">
                                            @csrf
                                            @method('delete')
                                        <button name="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- Force delete modal --}}
                            </td>
                          </tr>
                          @endforeach
                          <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>htext</th>
                                <th>shead</th>
                                <th>stext</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          {{-- main content goes here. --}}
    </div>
  </div>
</div>
@endsection
