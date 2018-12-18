@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row categorias">
                <hr style="width: 100%">
                
                @foreach ($categories as $category)
                    <ul><a href="/servicio/categoria/{{$category->id}}">{{$category->name}}<a></ul> 
                @endforeach
            </div>
            <hr style="width: 100%">
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
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="/servicio/detalle/{{$service->id}}" class="btn btn-info" role="button">Ver Servicio</a>
                                                </div>
                                            </div>                                
                
                
                                        </div>
                                        <img width="200px" height="170px" class="card-img-right flex-auto d-none d-lg-block" src="{{$service->imagedescription}}" alt="Card image cap">
                                    </div>
                                </div>
                            <?php endforeach ?>
                            {!! $services->links() !!}
                
                        </div>
                    </div>


    






@endsection