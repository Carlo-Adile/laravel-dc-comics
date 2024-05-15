@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- jumbotron --}}
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Welcome to Laravel DC Comics library</h1>
                    <p class="col-md-8 fs-4">
                        We use Laravel 10 to manage a collection of comics. In addition to displaying our data as cards, we
                        will also create a post system to allow an admin to input data and create fresh new items.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- main section --}}
    <div class="container-xl py-4 mb-4">
        <div class="row">
            {{-- header --}}
            <div class="col-12 px-4 mb-4">
                <h3>Current DC Comics archive</h3>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($comics as $comic)
                  <tr>
                    <td scope="row">{{$comic->id}} </td>
                    <td><img src="{{$comic->thumb}}" alt="" width="60"></td>
                    <td>{{$comic->title}} </td>
                    <td>{{$comic->series}} </td>
                    <td>{{$comic->type}} </td>
                    <td>{{$comic->sale_date}} </td>
                    <td>{{$comic->price}} </td>
                    <td>
                      <a href="{{route('comics.show', $comic)}}"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                        /Edit/Delete
                    </td>
                  </tr>
                  @empty 
                  <tr>
                    <td scope="row">no available data</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>


        </div>
    </div>
    </div>


    {{-- @forelse($comics as $comic)
<p>{{$comic['title']}}</p>
@empty
<p>Nothing to see here...</p>
@endforelse --}}
@endsection
