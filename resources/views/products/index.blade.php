<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rice Management</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h1>Rice Inventory Management</h1>

    <form action="/rices/store" method="POST" class="product-form">
        @csrf
        
        <div class="form-group">
            <label for="rice_name">Rice Name:</label>
            <input type="text" id="rice_name" name="rice_name" required>
        </div>

        <div class="form-group">
            <label for="price_per_kg">Price per KG:</label>
            <input type="number" step="0.01" id="price_per_kg" name="price_per_kg" required>
        </div>

        <div class="form-group">
            <label for="stock_quantity">Initial Stock (kg):</label>
            <input type="number" id="stock_quantity" name="stock_quantity" required>
        </div>

        <button type="submit" class="btn-submit">Add Rice Product</button>
    </form>

    <hr>

    <table class="product-table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Rice Name</th>
                <th>Price/kg</th>
                <th>Current Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rice_list as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->rice_name }}</td>
                <td>₱{{ $item->price_per_kg }}</td>
                <td>{{ $item->stock_quantity }} kg</td>
                <td>
                    <a href="/rices/edit/{{ $item->id }}">Edit</a>

                    <form action="/rices/delete/{{ $item->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>