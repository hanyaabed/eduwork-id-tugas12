@extends('layout')
@section('title', 'Products')
@section('header', 'Halaman Produk')
@section('content')
    <ol>
        @foreach($produk as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ol>
@endsection