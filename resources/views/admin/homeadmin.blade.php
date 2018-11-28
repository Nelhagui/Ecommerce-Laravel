@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="jumbotron-heading"><?="Bienvenido!" ?></h1>
                    <p class="lead text-muted">Tu perfil es el de "Administrador" y estás autorizado a modificar los siguientes parámetros:</p>
                    <p>
                    <a href="" class="btn btn-primary my-2">Usuarios</a>
                    <a href="" class="btn btn-primary my-2">Servicios Activos</a>
                    <a href="/categorias" class="btn btn-primary my-2">Categorías</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
