@extends('mdbcrud.layout')
@section('title')
Home Page
@stop
@section("content")


<div class="row mt-5 bg-light p-5">
  
    <div class="col-md-4">
    <img
      src="https://mdbootstrap.com/img/new/standard/city/041.jpg"
      class="card-img-top"
      alt="..."
    />

    </div>
    <div class="col-md-8">
        <h4>Register form </h4>
        <hr style="border:solid 1px black; width: 50%">
        <form method="post" action="">
        @csrf 
        <div class="form-group  col-md-6 mt-2">
            <label>Email * </label>
            <input type="text" name="em" placeholder="Email*" class="form-control">
        </div>  


        <div class="form-group  col-md-6 mt-2">
            <label>Password * </label>
            <input type="password" name="pass" placeholder="Password*" class="form-control">
        </div>  

        <div class="form-group  col-md-6 mt-2">
           
            <input type="submit" name="reg" class="btn btn-lg btn-info" value="Register">

            
            <input type="reset" name="res" class="btn btn-lg btn-danger" value="Reset">

        </div> 
        
        <div class="form-group  col-md-6 mt-2">
           
       
           <b>Already Have an Account ?<a href="#">Login Here</a></b>
       </div> 

          


        </form>
    </div>
</div>



@endsection
