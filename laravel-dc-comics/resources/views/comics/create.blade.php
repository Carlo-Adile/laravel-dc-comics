@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <h1>Add a new Comic in the archive</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="add the title here">
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control" name="description" id="description" aria-describedby="descriptionHelper" placeholder="add the description here">
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb</label>
              <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper" placeholder="add the thumb URL here">
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Price</label>
              <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper" placeholder="add the price here">
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Series</label>
              <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper" placeholder="add the series here">
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Sale Date</label>
              <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_DateHelper" placeholder="add the sale date here">
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Type</label>
              <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper" placeholder="add the type here">
            </div>


            <button type="submit" class="btn btn-primary">
                Create
            </button>
        </form>
    </div>
@endsection
