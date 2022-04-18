@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
              manage About us
              @endsection
             

              <a href="{{url('about/create')}}" class="btn btn-danger btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign">+</span>
        </a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>titletext</th>
                    <th>title</th>
                    <th>firsttext</th>
                    <th>secondtext</th>
                    <th>img</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @if($abouts)
                      @foreach($abouts as $about)

                  <tr>
                    
                    
                        <form action="{{route('about.destroy',$about->id)}}" method="POST">
                            @csrf
                         @method('DELETE')
                         
                        
                      
                
                     
                    <td>{{$loop->iteration}}</td>
                    <td>{{$about->titletext}}</td>
                    <td>{{$about->title}}</td>
                    <td>{{$about->firsttext}}</td>
                    <td>{{$about->secondtext}}</td>
                    <td>{{$about->img}}</td>
                    <td>
                    <div class="col-md-3">
                           
                           <button class="btn btn-danger btn-md" type="submit" >Delete </button>
                           <a name="" id="" class="btn btn-success btn-md" href="#" role="button">View</i></a>
                         </div>
                         <div class="col-md-3">
                           
                           <button class="btn btn-info btn-md " type="submit" >Edit </button>
                         </div>
                         </td>
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
               
               
              </div>
              
  
    
    @endsection
  



  