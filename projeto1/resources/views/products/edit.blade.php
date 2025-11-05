<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
</head>
<body>
    <h1>Editar produto</h1>
    <a href=" {{ route('products.index') }}">Visualizar produtos</a>
    <a href=" {{ route('home') }}">Inicio</a>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome</label><br>
        <input type="text" name="name" placeholder="Nome" value="{{ $product->name }}" required><br>
        <label>Descrição</label><br>
        <input type="text" name="description" placeholder="Descrição" value="{{ $product->description }}"><br>
        <label>Preço</label><br>
        <input type="number" name="price" placeholder="Preço" step="0.01" min="0" value="{{ $product->price }}" required><br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>