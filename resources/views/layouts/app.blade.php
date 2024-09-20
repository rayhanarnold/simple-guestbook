<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Simple Store') }}</title>

    <!-- CSS Styles (optional) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!-- Navbar (Optional) -->
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('products.index') }}">Product List</a></li>
            <li><a href="{{ route('products.create') }}">Create Product</a></li>
        </ul>
    </nav>

    <!-- Main Content Section -->
    <main>
        @yield('content') <!-- Ini adalah area untuk memasukkan konten dari view lain -->
    </main>

    <!-- Footer (Optional) -->
    <footer>
        <p>&copy; {{ date('Y') }} Simple Store. All rights reserved.</p>
    </footer>

    <!-- Optional JS scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
