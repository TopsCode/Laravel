@extends('cruidapp.layout')
@section('title')
Home page
@stop
@section('content')


      <div class="container content mt-5">
        <div class="col-lg-12">
            <h2 class="text-dark text-center">Update Your data</h2>
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
                  <img src="{{ asset('images/banner3.jpg') }}" class="rounded w-100 mt-2" alt="features" width="350" height="180">
                  
                  <p><a class="btn btn-lg btn-primary mt-4 ml-5" href="" role="button">Reach us >></a></p>
              </div>
            </div>



            <div class="col-lg-7 mt-2">
                <div class="img-thumbnail p-5 shadow-lg">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


               
                <h2>Edit and Update Your Data</h2>
                 <div class="form-group">
                     <form method="post" enctype="multipart/form-data" action="{{url('/updatedata',array($ed->rid))}}">
                         @csrf

                         <div class="form-group">
                         <img src="{{ URL::to('/')}}/uploads/{{ $ed->photo }}" width="55px" height="55px">   
                          <input type="file" name="img" placeholder="Photo *" class="form-control">
                      </div>

                     
                      <div class="form-group">
                          <input type="text" name="f_name" value="{{ $ed->firstname}}" placeholder="FirstName *" class="form-control">
                      </div>
                      
                      <div class="form-group">
                          <input type="text" name="l_name" value="{{ $ed->lastname}}" placeholder="LastName *" class="form-control">
                      </div>

                      <div class="form-group">
                          <input type="text" name="u_name" value="{{ $ed->username}}" placeholder="usernameName *" class="form-control">
                      </div>
                      <div class="form-group">
                          <input type="text" name="e_mail" value="{{ $ed->email}}" placeholder="Email" *" class="form-control">
                      </div>


                      <div class="form-group">
                          male :<input type="radio" name="gender" value="male" class="" @if ($ed->gender=='male') checked='checked' @endif>
                          
                          female :<input type="radio" name="gender" value="female" class="" @if ($ed->gender=='female') checked='checked' @endif>
                      </div>


                      
                      <div class="form-group">
                          <input type="text" name="mob" value="{{ $ed->mobile}}"  placeholder="Mobile *" class="form-control">
                      </div>


                      <div class="form-group">
                          <textarea  name="address" placeholder="Addreess *" class="form-control">{{ $ed->address}} </textarea>
                      </div>

<!--                       
                      <div class="form-group">
                          <select   name="country" placeholder="country *" class="form-control">

                          <option value="">Select Country</option>
                          <option value=""></option>
                          </select>
                      </div> -->

                      
                      <!-- <div class="form-group">
                          <select name="state" placeholder="state *" class="form-control">

                          <option value="">Select State</option>
                          <option value=""></option>
                          </select>
                      </div>
                      
                      <div class="form-group">
                          <select name="city" placeholder="city *" class="form-control">

                          <option value="">Select City</option>
                          <option value=""></option>
                          </select>
                      </div> -->

                      


                      
                      <div class="form-group">
                          <input type="submit" name="upd" value="Update!" class="btn btn-lg btn-info">
                      
                      </div>

                     </form>
                 </div>    

            </div>
          </div>
</div>
</div>
</div>



@endsection

