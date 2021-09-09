@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Blogs Here</div>

                <div class="card-body">

                    <div class="form-group">
                        <form method="post">
                            
                    <div class="form-group">
                        <label>Blog Title</label>
                        <input type="text" name="title" placeholder="Title" required class="form-control">
                    </div>

                              
                    <div class="form-group">
                        <label>Blog Photo</label>
                        <input type="file" name="photo" placeholder="photo" required class="form-control">
                    </div>

                              
                    <div class="form-group">
                        <label>Blog Descriptions</label>
                        <textarea  name="desc" placeholder="Descriptions" required class="form-control"></textarea>
                    </div>

                              
                    <div class="form-group">
                     
                        <input type="submit" name="sub"  class="btn btn-lg btn-info" value="AddBlogs">
                        
                        <input type="reset" name="sub"  class="btn btn-lg btn-danger" value="Reset Blogs">
                    </div>

                        </form>
                    </div>

                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
