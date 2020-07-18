@extends('layouts.app')
@section('container')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/rental_1.png')}}" class=" d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/rental_2.png')}}" class="d-block w-100" height="500px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/rental_3.jpg')}}" class="d-block w-100" height="500px" alt="...">
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
<h1 class=" text-dark"><marquee>WELCOME TO AFFISAL.COM RENTAL PLAY STATION</marquee></h1>
<div class="container">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <br>
      <!-- Blog post -->
      <div class="card" style="width: 18rem;">
  <img src="{{asset('assets/images/rental_3.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

      <!-- Blog post -->
      <div class="card" style="width: 18rem;">
  <img src="{{asset('assets/images/rental_5.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

      <!-- Blog post -->
      <div class="card mb-4 border shadow-lg">
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="inner">
              <img class="card-img-top" src="{{asset('assets/images/rental_6.jpg ')}}" alt="Card image cap" style="height:220px;">
            </div>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-primary">Rental PS 4 Kota Tegal</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="col-md-4 shadow-lg">

      <!-- Search Widget -->
     
      <!-- Categories Widget -->
      <div class="card my-4 border border-primary shadow-lg">
        <h5 class="card-header bg-primary text-dark">CONTENT</h5>
        <div class="inner">
          <img src="{{asset('assets/images/rental_4.jpg')}}" class="card-img-top" alt="..." height="185px;">
          <div class="card-body">
            <h5 class="card-title text-primary">Rental PS 4 Brebes</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>

      </div>

    </div>
    </div>
    <div>
@endsection