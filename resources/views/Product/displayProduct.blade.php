<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Product Table</title>
  <link rel="stylesheet" href="css/displayProduct.css">
</head>
<body>

  <div class="container">
    <h2 class="text-center my-4">Product Table</h2>

    <!-- Product Table -->
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th>Product Title</th>
          <th>Price (USD)</th>
          <th>Short Notes</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($alldata as $product)
        <tr>
          <td>{{ $product->productTitle }}</td>
          <td>{{ $product->productPrice }}</td>
          <td>{{ $product->productNotes }}</td>
          <td>
            <div class="action-buttons">
              <a href="#" class="btn btn-primary btn-sm">Edit</a>
              <a href="{{ 'deleteProduct/' . $product->id }}" class="btn btn-danger btn-sm">Delete</a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <!-- Add New Product Button -->
    <div class="text-center">
      <a href="add" class="add-btn">Add New Products</a>
    </div>
  </div>

</body>
</html>
