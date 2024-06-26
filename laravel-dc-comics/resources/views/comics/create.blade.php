@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <h1>Add a new Comic in the archive</h1>
        @include('partials.validation-errors')

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleHelper" placeholder="add the title here" value="{{old('title')}}">
              @error('title')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="descriptionHelper" placeholder="add the description here" value="{{old('description')}}">
              @error('description')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb</label>
              <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="add the thumb URL here" value="{{old('thumb')}}">
              @error('thumb')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" aria-describedby="priceHelper" placeholder="add the price here" value="{{old('price')}}">
              @error('price')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" aria-describedby="seriesHelper" placeholder="add the series here" value="{{old('series')}}">
              @error('series')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale Date</label>
              <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" aria-describedby="sale_DateHelper" placeholder="add the sale date here" value="{{old('sale_date')}}">
              @error('sale_date')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="typeHelper" placeholder="add the type here" value="{{old('type')}}">
              @error('type')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>


            <button type="submit" class="btn btn-primary">
                Create
            </button>
        </form>
    </div>
@endsection
