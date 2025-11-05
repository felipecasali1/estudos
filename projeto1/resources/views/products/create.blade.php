<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produto</title>
</head>
<body>
    <h1>Cadastrar produto</h1>
    <a href=" {{ route('products.index') }}">Visualizar produtos</a>
    <a href=" {{ route('home') }}">Inicio</a>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Nome</label><br>
        <input type="text" name="name" placeholder="Nome" required><br>
        <label>Descrição</label><br>
        <input type="text" name="description" placeholder="Descrição"><br>
        <label>Preço</label><br>
        <input type="number" name="price" placeholder="Preço" step="0.01" min="0" required><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>