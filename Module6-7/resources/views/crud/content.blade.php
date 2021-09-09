<!-- blade templates extends a master page layout  -->
@extends('crud.master')
@section('title')
Home Page
@stop


@section("content")


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ URL::asset('assets/images/1.png')}}" class="d-block w-100" alt="..." style="width: 100%; height: 450px;">
      </div>
      <div class="carousel-item">
        <img src="{{ URL::asset('assets/images/2.png')}}" class="d-block w-100" alt="..." style="width: 100%; height: 450px;">
      </div>
      <div class="carousel-item">
        <img src="{{ URL::asset('assets/images/3.jpg')}}" class="d-block w-100" alt="..." style="width: 100%; height: 450px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- blade templates extends a master page layout  -->

<div class="container-fluid mt-5">
    <div class="col-md-12">
    <div class="row">

        <div class="col-md-4 ml-0">

            <div class="card" style="width: 25rem;">
                <img src="{{ URL::asset('assets/images/c.jpg')}}" class="card-img-top" alt="..." style="width: 100%; height: 220px;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
              <div class="col-md-4">
                <div class="card" style="width: 25rem;">
                    <img src="{{ URL::asset('assets/images/c1.webp')}}" class="card-img-top" alt="..." style="width: 100%; height: 220px;">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </div>

                  <div class="col-md-4">
                    <div class="card" style="width: 25rem;">
                        <img src="{{ URL::asset('assets/images/c2.png')}}" class="card-img-top" alt="..." style="width: 100%; height: 220px;">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                  </div>

<!-- content media here -->

<div class="media mt-5">
    <img src="{{ URL::asset('assets/images/1.png')}}" class="mr-3" alt="..." style="width: 30%;">
    <div class="media-body">
      <h5 class="mt-0">Media heading</h5>

      <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.

      Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.

      


      </p>
    </div>
  </div>

  <!-- media content over heeree -->

        </div>
    </div>
    </div>
</div>


@endsection
<!-- modal button load -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
 -->

