<h1>{{$category->name}}</h1>
<ul>
    @foreach($category->products as $product)
        <li>{{$product->name}}</li>
    @endforeach
</ul>
