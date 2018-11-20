@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-categories">
                <div class="list-group">
                    <?php foreach($services as $service): ?>
    
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $service->name}}</h5>
                                <a href="" class="btn btn-primary my-2">Editar</a>
                            </div>
                        </div>
                    <?php endforeach ?>
                    {!! $services->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection