<!DOCTYPE html>
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Retail Price:</strong> {{ $product->retail_price }}</p>
    <p><strong>Wholesale Price:</strong> {{ $product->wholesale_price }}</p>
    <p><strong>Minimum Wholesale Quantity:</strong> {{ $product->min_wholesale_qty }}</p>
    <p><strong>Quantity:</strong> {{ $product->quantity }}</p>
    @if($product->photo)
        <p><img src="{{ $product->photo }}" alt="{{ $product->name }}" class="img-thumbnail"></p>
    @endif
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
