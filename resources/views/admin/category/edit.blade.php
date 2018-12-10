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
        
        <form class="" action="/admin/categorias/{{ $category ->id }}/edit" method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Titulo</label>
                <input type="text" name="name" value="{{ $category ->name }}" class="form-control">
            </div>
        
            <div class="form-group">
                <label for="description">Descripción</label>
            <textarea class="form-control" rows="5" id="description" name="description">
                
                {{  $category->description }}</textarea>
            </div>
        
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Confirmar Cambios">
            </div>
        </form>
    </div>
@endsection