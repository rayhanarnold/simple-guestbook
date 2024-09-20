<!DOCTYPE html>
    <div class="container">
        <h1>Create Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="retail_price" class="form-label">Retail Price:</label>
                <input type="number" step="0.01" name="retail_price" id="retail_price" class="form-control">
            </div>

            <div class="mb-3">
                <label for="wholesale_price" class="form-label">Wholesale Price:</label>
                <input type="number" step="0.01" name="wholesale_price" id="wholesale_price" class="form-control">
            </div>

            <div class="mb-3">
                <label for="min_wholesale_qty" class="form-label">Minimum Wholesale Quantity:</label>
                <input type="number" name="min_wholesale_qty" id="min_wholesale_qty" class="form-control">
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control">
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo URL:</label>
                <input type="text" name="photo" id="photo" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
?>
