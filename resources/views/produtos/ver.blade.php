<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Produtos</title>
</head>
<body>
    <label>Nome do Produto:</label> 
    <input type="text" name="nome" value="{{ $produto ->Nome }}">
    <br><br>
    <label>Valor do Produto:</label> 
    <input type="text" name="valor" value="{{ $produto ->valor }}">
    <br><br>
    <label>Quantidade em estoque:</label>
    <input type="text" name="estoque" value="{{ $produto ->Estoque }}">
    <br><br>
 </body>
</html>