@extends('layouts.app')
@section('title','Home Page - IMEC')
@section('content')
<div class="text-center">
    <h5>¡Welcome to "IMEC STORE"!</h5><br>
    <a href="{{route('product.create')}}" class="btn" style="background-color: #a37ed1; color: #fff;">Create a Product</a>
    <a href="{{route('product.index')}}" class="btn" style="background-color: #310e47; color: #fff;">Show Products</a>
</div>
@endsection