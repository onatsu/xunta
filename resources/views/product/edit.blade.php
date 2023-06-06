<form action="{{route('product.update', $product->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" placeholder="nombre" value="{{$product->name}}">
    <input type="text" name="description" placeholder="descripcion" value="{{$product->description}}">
    <input type="submit" value="enviar">
</form>
