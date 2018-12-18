@extends('layouts.app')
@section('content')
    <!-- START THE FEATURETTES -->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

<div class="container">

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-3">
        <img width="200px" height="170px" class="card-img-right flex-auto d-none d-lg-block" src="{{$service->imagedescription}}" alt="Card image cap">
        </div>
      <div class="col-md-9">
        <h2 class="featurette-heading">{{$service->name}} <span class="text-muted">| {{$service->user['name']}}</span></h2>
        <p class="lead">{{$service->description}}</p>
      <form action="/carrito/agregar" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $service->id }}">
            
            <input class="btn btn-info" type="submit" name="submit" value="Agregar a Carrito (${{$service->price}})">
        </form>                            

      </div>

    </div>

    <hr class="featurette-divider">
</div>



    <!-- /END THE FEATURETTES -->
@endsection