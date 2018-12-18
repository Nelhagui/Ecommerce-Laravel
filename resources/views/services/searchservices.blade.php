@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row categorias">
                {{-- <hr style="width: 100%"> --}}
                {{-- {{dd($search_service)}} --}}
                {{-- <hr style="width: 100%"> --}}
            </div>
            <div class="row mb-2">
                @if (!count($search_service) )
                    <h1>No hay resultados que coincidan con la búsqueda</h1>
                 @else 
                    <h4>Servicios que coinciden con tu búsqueda:</h4>
                    <hr style="width: 100%">
                            <?php foreach($search_service as $service): ?>
                                <div class="col-md-6">
                                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                        <div class="card-body d-flex flex-column align-items-start">
                                            {{-- <strong class="d-inline-block mb-2 text-primary">World</strong> --}}
                                            <h3 class="mb-0">
                                            <h4 class="text-dark">{{ $service->name}}</h4>
                                            </h3>
                                            <div class="mb-1 text-muted">Precio: ${{$service->price}}</div>
                                            <p class="card-text mb-auto">{{$service->description}}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="/servicio/detalle/{{$service->id}}" class="btn btn-info" role="button">Ver Servicio</a>
                                                </div>
                                            </div>                                
                
                
                                        </div>
                                        <img width="200px" height="170px" class="card-img-right flex-auto d-none d-lg-block" src="{{($service->imagedescription) }}" alt="Card image cap">
                                    </div>
                                </div>
                            <?php endforeach ?>
                @endif            
                        </div>
                    </div>
@endsection