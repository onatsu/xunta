<form action="{{route('product.comment', $product->id)}}" method="post">
    @csrf
    <textarea name="content"></textarea>
    <input type="submit" value="commentar">
</form>
