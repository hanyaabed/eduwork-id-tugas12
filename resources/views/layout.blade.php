<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home_page') }}" aria-current="page" class="nav-link text-white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('product_page') }}" aria-current="page"
                            class="nav-link text-white">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cart_page') }}" aria-current="page" class="nav-link text-white">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>
        @yield('header')
    </h1>
    <main class="flex-grow-1">
        @yield('content')
    </main>
    <footer class="bg-body-tertiary text-center text-lg-start mt-auto">
        <div class="text-center p-3">
            This is footer
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>