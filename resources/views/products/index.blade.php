<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product E-Commerce</title>
</head>
<body>
    <h1>Daftar Product</h1>
    <ul>
        @foreach ($products as $id => $products)
        <li>
            <a href="{{ url('/product/' . $id) }}">
                {{ $products['name'] }} - Rp{{ number_format($products['price'], 0, ',', '.') }}
            </a>
        </li>
        @endforeach
    </ul>
</body>
</html>