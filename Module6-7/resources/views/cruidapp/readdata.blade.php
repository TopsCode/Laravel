@extends('cruidapp.layout')
@section('title')
Home page
@stop
@section('content')


      <div class="container content mt-5">
      <h2 class="text-dark text-center">Read Data</h2>
            <hr class="border border-1 w-50 border-secondary">
    

      <div class="row">
            
            <div class="col-lg-4 mt-2">
                  <div class="img-thumbnail p-5 shadow-lg">
                  <img src="{{ asset('images/banner3.jpg') }}" class="rounded w-100 mt-2" alt="features" width="350" height="180">
                  
                  <p><a class="btn btn-lg btn-primary mt-4 ml-5" href="" role="button">Reach us >></a></p>
              </div>
            </div>



        <div class="col-lg-8">
        
      



            <div class="col-lg-12 mt-2">
                <div class="img-thumbnail p-5 shadow-lg">
                

               
                <h2>Read a single Data</h2>
                 <div class="form-group">
                     <form method="post" enctype="multipart/form-data">
                         @csrf
    

                         <table align="center" class="table  table-stripped table-bordered  table-hover" width="100%">
                         <tr>
                             <th>Photo</th>
                             <td><img src="{{ URL::to('/')}}/uploads/{{ $shw->photo }}" width="55px" height="55px"></td>
                             
                         </tr>
                             <tr>
                             <th>FirstName</th>
                             <td>{{ $shw->firstname }}</td>

                             </tr>

                             <tr>
                             <th>LastName</th>
                             <td>{{ $shw->lastname }}</td>

                             </tr>
                         
                             <tr>
                             <th>Username</th>
                             <td>{{ $shw->username }}</td>

                             </tr>
                             <tr>
                             <th>Email</th>
                             <td>{{ $shw->email }}</td>

                             </tr>

                             <tr>
                             <th>Mobile</th>
                             <td>{{ $shw->mobile }}</td>

                             </tr>

                             <tr>
                             <th>Gender</th>
                             <td>{{ $shw->mobile }}</td>

                             </tr>

                             <tr>
                             <th>Address</th>
                             <td>{{ $shw->address }}</td>

                             </tr>
                           
                             <tr>
                             <td colspan="2" align="center"><div style="width: 180px;">
                             
                             <a href='{{ url("deletedata/{$shw->rid}")}}' class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete Data')"><span class="bi bi-trash"></span></a> | 
                             
                             
                             <a href='{{ url("editdata/{$shw->rid}")}}' class="btn btn-sm btn-success"><span class="bi bi-pencil-square"></span></a></div></td>
                             
                         </tr>
                        

                         </table>
              

                        </form>
                 </div>    

            </div>
          </div>
</div>
</div>
</div>



@endsection

