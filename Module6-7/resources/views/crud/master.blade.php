<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CRUD operation Template Load Laravel @yield('title')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ URL::asset('assets/css/bootstrap.grid.min.css')}}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ URL::asset('assets/css/bootstrap.css.map')}}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{ URL::asset('assets/css/style.css')}}">

    <script src="{{ URL::asset('assets/js/jquery.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.bundle.js')}}"></script>
</head>
<body>
<!-- header start here -->

<!-- blade templates extends a master page layout  -->

<div class="container-fluid">
  
    <div class="row">
        <div class="col-md-3"><h2>Laravel</h2></div>
        
        <div class="col-md-9">
            
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/about_us') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Our Sylabus
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/laravel_introduction') }}">Laravel Introduction</a>
                        <a class="dropdown-item" href="#">Laravel Migrations</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Laravel Blade Template</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/contact_us') }}" tabindex="-1" aria-disabled="true">Contact</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>


        </div>
    </div>


</div>

<div class="clearfix"></div>

<!-- content start here -->
@yield('content')
<!-- content closed here -->
<!-- footer start here -->

<div class="footer mt-5 text-white">
  
    <h2 align="center">Copyright@2020-21 All right reserved.</h2>


</div>

<!-- footer closed here -->
<!-- modal start here -->
</body>
</html>