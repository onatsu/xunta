<h1>{{$tag->name}}</h1>
<ul>
    @foreach($tag->products as $product)
        <li>{{$product->name}}</li>
    @endforeach
</ul>
