@extends('layouts.app')

@section('content')


{{-- SLIDER --}}
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="images/banner-home.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="images/banner-home.jpg" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="images/banner-home.jpg" alt="Third slide">
              <div class="container">
                <div class="carousel-caption text-right">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
  </div>
{{-- FIN SLIDER    --}}

  <div class="container">
      <div class="album py-5 bg-light">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-xs-12">
                <h2>1. Crear un Servicio</h2>
                <p>Regístrese de forma gratuita, configure su Gig y ofrezca su trabajo a nuestra audiencia global.</p>
              </div>
              <div class="col-sm-4 col-xs-12">
                <h2>2. Demostrá tu talento</h2>
                <p>Regístrese de forma gratuita, configure su Gig y ofrezca su trabajo a nuestra audiencia global.</p>
              </div>
              <div class="col-sm-4 col-xs-12">
                <h2>3. Nuevo cliente</h2>
                <p>Regístrese de forma gratuita, configure su Gig y ofrezca su trabajo a nuestra audiencia global.</p>
              </div>
            </div>
            <hr>
            <div class="titulo-categoria">
              <h1>No te quedes atrás</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
              <div class="row">
                  <?php foreach($categories as $category): ?>
                      <div class="col-md-3">
                          <div class="card mb-4 shadow-sm">
                          {{-- <img class="card-img-top" src="{{ Storage::url($category->imagedescription)}}" alt="Card image cap"> --}}
                              <div class="card-body">
                              <h5 class="mb-1">{{ $category->name}}</h5>
                              {{-- <p class="card-text">{{$category->category['description']}}</p> --}}
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="btn-group">
                                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver Servicio</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      {{-- <div class="col-3"></div> --}}
                  <?php endforeach ?>
              </div>
          </div>
      </div>
  </div>

@endsection
