@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="list-categories">
                <div class="list-group">
                    <?php foreach($categories as $category): ?>
    
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $category->name}}</h5>
                            </div>
                        </div>
                    <?php endforeach ?>
                    {!! $categories->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection