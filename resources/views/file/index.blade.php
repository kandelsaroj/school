@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
              manage file
              @endsection
             

              <a href="{{route('file.create')}}" class="btn btn-danger btn-md" role="button">
                ADD FILE
            </a>
              <!-- /.card-header -->
              <div class="card-body">
          <form action="#" method="GET">
            <input type="text" class="col-lg-10" name="search" require/>
            <button type="text" class="btn btn-primary btn-sm mb-1" type="submit"> <i class="fa fa-search" aria-hidden="true"> search</i></button>
          
          </form>
      
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>title</th>
                    <th>Details</th>
                    <th> image</th>
                    <th>ext</th>
                
                    <th> Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      @if($files)
                      @foreach($files as $file)

                  <tr>
                    
                    
                        <form action="{{route('file.destroy',$file->id)}}" method="POST">
                            @csrf
                         @method('DELETE')
                         
                        
                      
                
                    
                    <!-- <td>
                        {{$file->name}}
                    </td>
                    <td>
                        {{$file->file_link}}
                    </td> -->
                            
                    <td>{{$loop->iteration}}</td>
                 
                    <td>{{$file->title}}</td>
                    <td>{{$file->details}}</td>
                    <td>{{$file->image}}</td>
                    <td>{{$file->ext}}</td>
                    <td>
                         <div class="col-md-3">
                           
                           <button class="btn btn-danger btn-sm " type="submit" >delete </button>
                         
                       
                           
                           <button class="btn btn-info btn-sm " type="submit" >edit </button>
                         </div>
                         </td>
                        
                   
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              
                {!! $files->links() !!}
                
               

              </div>
              
    @endsection
  



  