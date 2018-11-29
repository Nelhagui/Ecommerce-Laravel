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
            </div>
            <div class="carousel-item">
              <img class="second-slide" src="images/banner-home.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="images/banner-home.jpg" alt="Third slide">
              <div class="container">
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
              <div class="row imagenescategorias">
                <div class="col-sm-4 col-xs-12 ">
                  <a href="#">
                    <h3>Deportes</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                    <img id="imagencategoria" width="100%" src="images/categories/deporte.jpg" alt="">
                  </a>
                </div>
                <div class="col-sm-4 col-xs-12">
                  <a href="#">
                    <h3>Gastronomía</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                      <img id="imagencategoria" width="100%" src="images/categories/gastronomia.jpg" alt="">
                    </a>
                  </div>
                  <div class="col-sm-4 col-xs-12">
                    <a href="#">
                      <h3>Educación</h3>
                      <p>Lorem ipsum dolor sit amet</p>    
                      <img id="imagencategoria" width="100%" src="images/categories/educacion.jpeg" alt="">
                    </a>
                    </div>
      
              </div>
          </div>
      </div>
  </div>

@endsection
