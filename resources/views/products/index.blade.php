<!DOCTYPE html>
    <div class="container">
        <h1>Product List</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Retail Price</th>
                    <th>Wholesale Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->retail_price }}</td>
                        <td>{{ $product->wholesale_price }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
?>
