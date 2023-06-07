<h1>{{$product->name}}</h1>
<h2><a href="{{route('category.show', $product->category->id)}}">{{$product->categoryName}}</a></h2>
<p>{{$product->description}}</p>
<p>Barcode: {{$product->codeBar}}</p>

<p><strong>Etiquetas:</strong></p>
<ul>
    @foreach($product->tags as $tag)
        <li>{{$tag->name}}</li>
    @endforeach
</ul>
