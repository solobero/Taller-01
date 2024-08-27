@extends('layouts.app')
@section("title", $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create Product</div>
        <div class="card-body">
          @if(session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          @if($errors->any())
          <ul id="errors" class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif

          <form method="POST" action="{{ route('product.save') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" required />
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea id="description" class="form-control mb-2" placeholder="Enter description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" id="image" class="form-control mb-2" name="image" />
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" id="price" class="form-control mb-2" placeholder="Enter price" name="price" value="{{ old('price') }}" required />
            </div>
            <div class="form-group">
              <label for="warranty">Warranty (in months)</label>
              <input type="number" id="warranty" class="form-control mb-2" placeholder="Enter warranty period" name="warranty" value="{{ old('warranty') }}" />
            </div>
            <input type="submit" class="btn btn-primary" value="Save" />
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
