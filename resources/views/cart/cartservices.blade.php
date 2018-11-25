@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                
                @empty($services) 
                <h1>No hay productos en el carrito</h1>
                
                @else
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Servicio</th>
                                <th class="text-center">Valor</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $total=0; @endphp
                        @foreach ($services as $product)
                            <tr>
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ Storage::url($product->imagedescription)}}" style="width: 72px; height: 72px;"> </a>
                                        <div class="media-body">
                                        <h4 class="media-heading"><a href="#">{{$product->name}}</a></h4>
                                            <span>Usuario: </span><span class="text-success"><strong>{{$product->user['name']}}</strong></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>${{$product->price}}</strong></td>
                                <td class="col-sm-1 col-md-1">
                                <a href="/carrito/{{$product->id}}/quitar" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>                                
                                </td>
                            </tr>
                            @php
                              $total += $product->price;  
                            @endphp
                        @endforeach
        
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td><h3>Total</h3></td>
                                <td class="text-right"><h3><strong>{{$total}}</strong></h3></td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td>   </td>
                                <td>
                                <a href="/servicio/todos" class="btn btn-info" role="button">Seguir Buscando</a>
                                {{-- <button type="button" class="btn btn-default">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Seguir buscando servicios
                                </button> --}}
                                </td>
                                <td>
                                <button type="button" class="btn btn-success">
                                    Continuar <span class="glyphicon glyphicon-play"></span>
                                </button></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    {{-- <a href="{{route('cart.removeAll')}}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Remove All</a> --}}
                @endempty
            </div>
        </div>
    </div>

    @endsection
