@extends('layouts.app')

@section('content')

<div class="container">
        @if (session()->has('info'))
        <div class="alert alert-success"> {{ session('info')}} </div>
        @endif
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{-- {{dd($user->avatar)}} --}}
                <img width="150px" src="{{Storage::url($user->avatar)}}" style="float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name }}</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Subir imágen de perfil</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary" value="Guardar ">
                </form>
            </div>
        </div>
    </div>
@endsection
