<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>

<div class="container">
    <div class="product-card">
        <h1>Edit Product</h1>

        <form action="/products/{{ $item->id }}" method="POST" class="product-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name123" value="{{ $item->name }}">
            </div>

            <div class="form-group">
                <label>Price:</label>
                <input type="text" name="price123" value="{{ $item->price }}">
            </div>


            <div class="form-group">
    <label for="category_id">Category:</label>
    <select name="category_id" required>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}" 
                {{ $item->category_id == $cat->id ? 'selected' : '' }}>
                {{ $cat->category_name }}
            </option>
        @endforeach
    </select>
</div>

            <button type="submit" class="btn-save">Update</button>
        </form>

        <hr class="separator">

        <div class="back-link">
            <a href="/products">Back to List</a>
        </div>
    </div>
</div>

</body>
</html>