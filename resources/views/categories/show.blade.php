@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1>{{$category->name}}</h1>
                <p>{{$category->description}}</p>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <h6>USUARIOS </h6>
                    @foreach ($category->services as $service)
                        <a href="">
                            <ul>{{$service->user->name}}</ul> 
                        </a>
                    @endforeach

                    <h6>CATEGORIAS</h6>
                    @foreach ($allcategories as $navcategory)
                        <a href="/servicio/categoria/{{ $navcategory->id }}">
                            <ul>{{$navcategory->name}}</ul> 
                        </a>
                    @endforeach
                </div>
                <div class="col-sm-10">
                    <div class="row">
                        @foreach ($category->services as $service)
                            <div class='col-sm-4'>
                                <img width="100%" src="{{$service->imagedescription}}" alt=""> 
                                <p>{{$service->name}}</p>
                                <p>Usuario: {{$service->user->name}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection