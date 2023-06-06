<h1>Listado de productos</h1>
<ul>
    @foreach($productsList as $product)
        <li>
            <p>Nombre: {{$product->name}}</p>
            <p>Descripción: {{$product->description}}</p>
            <p>
                <a href="{{route('product.destroy', $product->id)}}">delete</a>
            </p>
        </li>
    @endforeach
</ul>
