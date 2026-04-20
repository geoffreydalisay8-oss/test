<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rice Product</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>

<div class="container">
    <div class="product-card">
        <h1>Edit Rice Details</h1>

        <form action="/rices/update/{{ $item->id }}" method="POST" class="product-form">
            @csrf
            <div class="form-group">
                <label>Rice Name:</label>
                <input type="text" name="rice_name" value="{{ $item->rice_name }}" required>
            </div>

            <div class="form-group">
                <label>Price per KG:</label>
                <input type="number" step="0.01" name="price_per_kg" value="{{ $item->price_per_kg }}" required>
            </div>

            <div class="form-group">
                <label>Stock Quantity:</label>
                <input type="number" name="stock_quantity" value="{{ $item->stock_quantity }}" required>
            </div>

            <button type="submit" class="btn-save">Update Rice</button>
        </form>

        <hr class="separator">

        <div class="back-link">
            <a href="/rices">Back to Inventory</a>
        </div>
    </div>
</div>

</body>
</html>