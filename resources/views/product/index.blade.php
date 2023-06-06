<h1>Listado de productos</h1>
<ul>
    @foreach($productsList as $product)
        <li>
            <p>Nombre: {{$product->getName()}}</p>
            <p>Descripción: {{$product->getDescription()}}</p>
            <p>
                <a href="{{route('product.destroy', $product->getId())}}">delete</a>
            </p>
        </li>
    @endforeach
</ul>
