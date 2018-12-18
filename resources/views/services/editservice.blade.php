@extends('layouts.app')
@section('content')
    <div class="col-7 offset-1">
        <h1 class="">Editar Servicio</h1>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="" action="/servicio/{{ $service->id }}/edit" method="patch" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
        {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Titulo</label>
                <input type="text" name="name" value="{{ $service->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" name="price" value="{{ $service->price }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
            <textarea class="form-control" rows="5" id="description" name="description">{{ $service->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Categoría</label>
                <select class="form-control" name="category">
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
                <img width="150" src="{{ Storage::url($service->imagedescription)}}" alt="">
                <label for="imagedescription">Imagen</label>
                <input class="form-control" type="file" name="imagedescription">
            </div>
        
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Confirmar Cambios">
            </div>
        </form>
    </div>
@endsection