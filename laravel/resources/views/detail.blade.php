<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <p>ID {{ $product->id }}</p>
    <p>Name: {{ $product->name }}</p>
    <p>Preis: {{ $product->price }}</p>
    <p>Details: {{ $product->text }}</p>
    <p>Gebrauch: {{ $product->usage }}</p>
</body>
</html>