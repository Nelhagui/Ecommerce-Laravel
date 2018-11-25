@extends('layouts.app')
@section('content')
    <!-- START THE FEATURETTES -->
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5">
        <img width="400px" class="featurette-image img-fluid mx-auto" src="{{ Storage::url($service->imagedescription)}}" alt="Generic placeholder image">
        </div>
      <div class="col-md-7">
        <h2 class="featurette-heading">{{$service->name}} <span class="text-muted">| {{$service->user['name']}}</span></h2>
        <p class="lead">{{$service->description}}</p>
      <form action="/carrito/agregar" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $service->id }}">
            
            <input class="btn btn-info" type="submit" name="submit" value="Continuar (${{$service->price}})">
        </form>                            

      </div>

    </div>

    <hr class="featurette-divider">



    <!-- /END THE FEATURETTES -->
@endsection