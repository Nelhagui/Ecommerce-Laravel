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
                        <form action="/servicio/{{ $service->id }}" method="post" value="DELETE">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            
                            <a href="servicio/{{ $service->id }}/edit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Editar</a>

                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>
            


                    </div>
                    <img width="200px" height="170px" class="card-img-right flex-auto d-none d-lg-block" src="{{asset($service->imagedescription)}}" alt="Card image cap">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
      </div>
  

@endsection