@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-categories">
                
                    <h1>Lista de Categorías activas:</h1>
                <div class="list-group">
                    <?php foreach($categories as $category): ?>
                    <div class="row categories-admin">
                        <div class="col-sm-4 col-xs-12"><img width="250px" src="{{$category->image}}" alt="" style="border-radius: 6px"></div>
                        <div class="col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <h5>{{ $category->name}}</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <h5 class="mb-1">{{ $category->description}}</h5>
                                </div>
                            </div>
    
                        </div>    
                        <hr width="100%" >
                    </div>
    
                    <?php endforeach ?>
                    {!! $categories->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection