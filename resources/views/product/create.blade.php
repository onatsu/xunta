<form action="/product" method="post">
    @csrf
    <input type="text" name="name" placeholder="nombre">
    <input type="text" name="description" placeholder="descripcion">
    <input type="text" name="id" placeholder="id">
    <input type="submit" value="enviar">
</form>
