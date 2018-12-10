@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->role}}</td>
      <td><form action="usuario/{{ $user->id }}" method="post" value="DELETE">
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
