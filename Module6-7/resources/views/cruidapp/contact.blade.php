
@extends('cruidapp.layout')
@section('title')
Home page
@stop

@section('content')


      <div class="container content mt-5">
        <div class="col-lg-12">
            <h2 class="text-dark text-center">Our Contact us Form</h2>
            <hr class="border border-1 w-50 border-secondary">
            
             @if(Session::has('success'))
            <div class="alert alert-success">
            
                <strong> {!! Session::get('success') !!}  </strong>
                <a href="#" aria-label="close" class="alert-sm  float-right" data-dismiss="alert">&times</a>
            </div>

            @endif



          <div class="row">
            
            <div class="col-lg-5 mt-2">
                  <div class="img-thumbnail p-5 shadow-lg">
                  <img src="images/banner3.jpg" class="rounded w-100 mt-2" alt="features" width="350" height="180">
                  <h3>Our Address</h3>
                  <hr>

                  <p><b>Address:</b> Near, Hospital Chowk,<br> Lohana Para, Rajkot, Gujarat 360001</p>

                  <p><a class="btn btn-lg btn-primary" href="" role="button">Reach us >></a></p>
              </div>
            </div>



            <div class="col-lg-7 mt-2">
                <div class="img-thumbnail p-5 shadow-lg">
               
                <h2>Contact with us</h2>
                 <div class="form-group">
                     <form method="post">
                         @csrf

                         <div class="form-group">
                          <input type="text" name="name" placeholder="Name *" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="text" name="f_name" placeholder="FirstName *" class="form-control">
                      </div>
                      
                      <div class="form-group">
                          <input type="text" name="l_name" placeholder="LastName *" class="form-control">
                      </div>

                      
                      <div class="form-group">
                          <input type="text" name="e_mail" placeholder="Email" *" class="form-control">
                      </div>

                      
                      <div class="form-group">
                          <input type="text" name="mob" placeholder="Mobile *" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="text" name="subject" placeholder="Subject *" class="form-control">
                      </div>

                      
                      <div class="form-group">
                          <textarea name="msg" placeholder="Message *" class="form-control"></textarea>
                      </div>


                      
                      <div class="form-group">
                          <input type="submit" name="cont" value="Submit" class="btn btn-lg btn-info">
                          
                          <input type="reset"  name="res" value="Clear" class="btn btn-lg btn-danger">
                      </div>

                     </form>
                 </div>    
                 



            </div>
          </div>







</div>
</div>
</div>



@endsection

