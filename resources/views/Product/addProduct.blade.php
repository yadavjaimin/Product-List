<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add Product</title>
    <link rel="stylesheet" href="css/addProduct.css">

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Check for flash message
            const successMessage = document.getElementById("success-message");
            if (successMessage) {
                alert(successMessage.textContent);
            }
        });
    </script>
</head>

<body>

    <!-- Flash message (hidden by default) -->
    @if(session('success'))
        <div id="success-message" style="display: none;">
            {{ session('success') }}
        </div>
        @endif

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
                <a href="dataList" class="display-btn">Display Products</a>
            </div>
        </form>
    </div>

</body>

</html>
