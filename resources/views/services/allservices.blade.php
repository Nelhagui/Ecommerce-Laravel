@extends('layouts.app')

@section('content')


<div class="container">
        <div class="album py-5 bg-light">
            <div class="container">
                <h1>Todos los servicios:</h1>
                {!! $services->links() !!}
                <div class="row">
                    <?php foreach($services as $service): ?>
                        <div class="col-md-3">
                            <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" src="{{ Storage::url($service->imagedescription) }}" alt="Card image cap">
                                <div class="card-body">
                                <h5 class="mb-1">{{ $service->name}}</h5>
                                <p class="card-text">{{$service->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/servicio/detalle/{{$service->id}}" class="btn btn-info" role="button">Ver Servicio</a>
                                        </div>
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