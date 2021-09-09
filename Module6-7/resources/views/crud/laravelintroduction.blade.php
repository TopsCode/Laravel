<!-- blade templates extends a master page layout  -->
@extends('crud.master')
@section('title')
Home Page
@endsection
@include("crud.header")

<div class="container-fluid mt-5">
    <div class="col-md-12">
    <div class="row">

<!-- content media here -->

<div class="media mt-5">
    <img src="{{ URL::asset('assets/images/1.png')}}" class="mr-3" alt="..." style="width: 30%;">
    <div class="media-body">
      <h5 class="mt-0">Laravel Introduction</h5>

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

<!-- modal button load -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
 -->

@include("crud.footer")
