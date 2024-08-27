@extends('layouts.app')
@section('title','Home Page - IMEC')
@section('content')
<div class="text-center">
    Welcome to the IMEC<br>
    <a href="{{route('product.create')}}" class="btn btn-primary">Create a Product</a>
    <a href="{{route('product.index')}}" class="btn btn-secondary">Show Products</a>
</div>
@endsection