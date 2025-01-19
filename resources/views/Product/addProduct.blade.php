<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="css/addProduct.css">
</head>

<body>

    <div class="form-container">
        <h2>Add New Product</h2>
        <form action="addProduct" method="post">
            @csrf
            <div class="form-group">
                <label for="product-title">Product Title</label>
                <input type="text" id="product-title" name="productTitle" placeholder="Enter product title" required>
            </div>
            <div class="form-group">
                <label for="product-price">Price (USD)</label>
                <input type="number" id="product-price" name="productPrice" placeholder="Enter price in USD" required step="0.01">
            </div>
            <div class="form-group">
                <label for="product-notes">Short Notes</label>
                <textarea id="product-notes" name="productNotes" placeholder="Enter short notes about the product"></textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="submit-btn">Add Product</button>
            </div>
        </form>
    </div>

</body>

</html>