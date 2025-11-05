<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
</head>
<body>
    <h1>Seja bem-vindo!</h1>
    <a href="{{ route('products.index') }}">Ver produtos</a><br>
    <a href="{{ route('products.create') }}">Novo produto</a>
</body>
</html>