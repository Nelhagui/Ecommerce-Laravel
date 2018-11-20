@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-2">
            <?php foreach($services as $service): ?>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        {{-- <strong class="d-inline-block mb-2 text-primary">World</strong> --}}
                        <h3 class="mb-0">
                        <h4 class="text-dark">{{ $service->name}}</h4>
                        </h3>
                        <div class="mb-1 text-muted">Precio: ${{$service->price}}</div>
                        <p class="card-text mb-auto">{{$service->description}}</p>
                        <a href="servicio/{{ $service->id }}/edit">Editar</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" src="{{$service->imagedescription}}" alt="Card image cap">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
      </div>
  

@endsection