@extends('layout')
@section('title', 'My Ecommerce')
@section('content')
    <!-- Hero Section -->
    <header class="bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-4">Welcome to MyEcommerce</h1>
            <p class="lead">Find the best products with affordable prices</p>
            <a href="#products" class="btn btn-primary btn-lg">Shop Now</a>
        </div>
    </header>
    
    <!-- Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Our Products</h2>
            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">$20.00</p>
                            <a href="#" class="btn btn-success w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">$25.00</p>
                            <a href="#" class="btn btn-success w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">$30.00</p>
                            <a href="#" class="btn btn-success w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Product 4</h5>
                            <p class="card-text">$35.00</p>
                            <a href="#" class="btn btn-success w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection