@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Servicio</th>
      <th scope="col">Publicado por</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($services as $service)
    <tr>
      <th scope="row">{{$service->id}}</th>
      <td>{{$service->name}}</td>
      <td>{{$service->user['name']}}</td>
      <td><form action="servicio/{{ $service->id }}" method="post" value="DELETE">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form></td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection