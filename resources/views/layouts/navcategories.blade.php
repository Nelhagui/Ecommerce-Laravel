<div class="row categorias">
    <hr style="width: 100%">
    
    @foreach ($services as $service)
        <ul>{{$service->category['name']}}</ul> 
    @endforeach
    <hr style="width: 100%">
</div>
