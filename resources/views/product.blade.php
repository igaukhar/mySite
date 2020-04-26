@extends('layouts.master')
@section('title', 'Product')
@section('content')
        <h1></h1>
        <h2>{{ $product }}</h2>
        <h2></h2>
        <p>Цена: <b></b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
        <p>О</p>

        <form action="{{ route('basket-add', $product) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success" role="button"></button>
        </form>
@endsection
