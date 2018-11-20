@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php foreach($services as $service): ?>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{$service->imagedescription}}" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="mb-1">{{ $service->name}}</h5>
                                <p class="card-text">{{$service->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                         <a href="servicio/{{ $service->id }}/edit" class="btn btn-sm btn-outline-secondary">Editar</a>
                                        </div>
                                        <small class="text-muted">Precio: ${{$service->price}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
@endsection