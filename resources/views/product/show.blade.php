@extends('layouts.app')

@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])

@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      @if($viewData['product']->getImage())
        <img src="{{ asset('storage/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start" alt="{{ $viewData['product']->getName() }}">
      @else
        <img src="{{ asset('images/default.jpeg') }}" class="img-fluid rounded-start" alt="default">
      @endif
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">
          {{ $viewData['product']->getName() }}
        </h3>

        <h5>Description: </h5>
        <p class="card-text">{{ $viewData['product']->getDescription() }}</p>
        <h5>Price (USD): </h5>
        <p class="card-text">{{ $viewData['product']->getPrice() }}</p>
        <h5>Warranty (Months): </h5>
        <p class="card-text">{{ $viewData['product']->getWarranty() }}</p>

        <form action="{{ route('product.delete', $viewData['product']->getId()) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Product</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
