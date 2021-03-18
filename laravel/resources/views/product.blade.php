<html>
<head>
    <title>Alle Produkte</title>
</head>

<body>
<table>
    <tr>
        <th>Name</th>
        <th>Preis</th>
        <th>Details</th>
    </tr>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="/product/{{ $product->id }}">X</a></td>
            <td><a href="/card/{{ $product->id }} ">Zum Warenkorb hinzufügen</a></td>
        </tr>
    @endforeach
    <a href="/cart">Warenkorb</a>
</table>
</body>
</html>