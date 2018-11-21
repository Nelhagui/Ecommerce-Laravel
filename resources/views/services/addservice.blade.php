@extends('layouts.app')

@section('content')

<div class="col-7 offset-1">
<h1 class="">Agregar Servicio</h1>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <form class="" action="/servicio/agregar" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                <label for="name">Titulo</label>
                <input type="text" name="name" value="{{ old("name") }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" name="price" value="{{ old("price") }}" class="form-control">
            </div>

        <div class="form-group">
                <label for="description">Descripción</label>
            <textarea class="form-control" rows="5" id="description" name="description" >{{ old("description") }}</textarea>
            </div>

        <div class="form-group">
            <label for="category">Categoría</label>
            <select class="form-control" name="category">
            @foreach($categories as $category)
            @if ($category->id == old("category"))
                <option value="{{ $category->id }}" selected>
                {{ $category->name }}
                </option>
            @else
                <option value="{{ $category->id }}">
                {{ $category->name }}
                </option>
            @endif
            @endforeach
        </select>
        </div>
        <div class="form-group">
            <label for="poster">Imagen</label>
            <input class="form-control" type="file" name="poster">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Agregar Servicio    ">
        </div>
    </form>
</div>

@endsection