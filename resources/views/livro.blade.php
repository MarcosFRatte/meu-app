<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

</head>
<body>
<a href="/livro/criar"> Novo Livro</a>

Livros recebidos: <br>

@foreach($livros as $livro)

{{ $livro->titulo }} <br>
{{ $livro->autor}} <br>

@endforeach

</body>
</html>