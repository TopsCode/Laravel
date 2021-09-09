<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Material Design in Bootstrap using MDB UI Kit @yield("title")</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ URL::asset('mdbassets/css/mdb.min.css')}}">

    <link rel='stylesheet' type='text/css' media='screen' href="{{ URL::asset('mdbassets/css/mdb.rtl.min.css')}}">

    <script src="{{ URL::asset('mdbassets/js/jquery.js')}}"></script>
    <script src="{{ URL::asset('mdbassets/js/mdb.min.js')}}"></script>
</head>
<body>
    <!-- header start here -->
    <header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pricing">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.jpg');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Heading</h1>
          <h4 class="mb-3">Subheading</h4>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button"
            >Call to action</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
<!-- closed here -->

    <!-- content start here -->
    <div class="container-fluid">
    
        @yield("content")
        
      </div>
    <!-- closed here -->
    
    <!-- footer start here -->
    
    <div class="container-fluid mt-5 bg-dark p-5 text-white">
    
        <h5 align="center" style="font-weight: 100; font-size: 17px; letter-spacing: 1px;">Copyright@2021 All right Reeserved</h5>
        
      </div>
    <!-- end here -->
</body>
</html>