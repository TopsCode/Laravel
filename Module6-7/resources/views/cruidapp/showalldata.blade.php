@extends('cruidapp.layout')
@section('title')
Home page
@stop
@section('content')


      <div class="container-fluid content mt-5">
        <div class="col-lg-12">


        @if(Session::has('success'))
            <div class="alert alert-success">
            
                <strong> {!! Session::get('success') !!}  </strong>
                <a href="#" aria-label="close" class="alert-sm  float-right" data-dismiss="alert">&times</a>
            </div>

            @endif


        @if(Session::has('del'))
            <div class="alert alert-danger">
            
                <strong> {!! Session::get('del') !!}  </strong>
                <a href="#" aria-label="close" class="alert-sm  float-right" data-dismiss="alert">&times</a>
            </div>

            @endif

            <h2 class="text-dark text-center">Manage alldata</h2>
            <hr class="border border-1 w-50 border-secondary">
        
             <div class="container-fluid">

            <div class="col-lg-12 mt-2">
                <div class="img-thumbnail p-5 shadow-lg">
            
               
                <h2>Manage data</h2>
                 <div class="form-group">
                     <form method="post" enctype="multipart/form-data">
                         @csrf
    

                         <table align="center" class="table  table-stripped table-bordered  table-hover" max-width="100%">
                         <tr>
                             <th>ID</th>
                             <th>Photo</th>
                             <th>FirstName</th>
                             <th>LastName</th>
                             <th>Username</th>
                             <th>Email</th>
                             <th>gender</th>
                             <th>mobile</th>
                             <th>address</th>
                             <th>Action</th>
                             
                         
                         </tr>
                         @foreach($shw as $shw1)

                         <tr>
                             <td>{{ $shw1->rid }}</td>
                             <td><img src="{{ URL::to('/')}}/uploads/{{ $shw1->photo }}" width="55px" height="55px"></td>
                             <td>{{ $shw1->firstname }}</td>
                             <td>{{ $shw1->lastname }}</td>
                             <td>{{ $shw1->username }}</td>
                             <td><div style="overflow: hidden; width: 150px;">{{ $shw1->email }}</div></td>
                             <td>{{ $shw1->gender }}</td>
                             <td>{{ $shw1->mobile }}</td>
                             <td>{{ $shw1->address }}</td>
                             <td><div style="width: 180px;"><a href='{{ url("read/{$shw1->rid}")}}' class="btn btn-sm btn-info"><span class="bi bi-book"></span>Read</a> | 
                             
                             <a href='{{ url("deletedata/{$shw1->rid}")}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete Data')"><span class="bi bi-trash"></span></a> | 
                             
                             
                             <a href='{{ url("editdata/{$shw1->rid}")}}' class="btn btn-sm btn-success"><span class="bi bi-pencil-square"></span></a></div></td>
                             
                         </tr>
                         @endforeach

                         </table>
              

                        </form>
                 </div>    

            </div>
          </div>
</div>
</div>
</div>



@endsection

