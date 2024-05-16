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
                <a class="btn btn-primary" href="{{ route('comics.create') }}">Add</a>
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
                                <td scope="row">{{ $comic->id }} </td>
                                <td><img src="{{ $comic->thumb }}" alt="" width="60"></td>
                                <td>{{ $comic->title }} </td>
                                <td>{{ $comic->series }} </td>
                                <td>{{ $comic->type }} </td>
                                <td>{{ $comic->sale_date }} </td>
                                <td>{{ $comic->price }} </td>
                                <td>
                                    <a href="{{ route('comics.show', $comic) }}"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                                    <a href="{{ route('comics.edit', $comic) }}"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalId-{{ $comic->id }}">
                                        <i class="fa-regular fa-trash-can text-danger"></i>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this comic? please note that this is
                                                    an irrreversible operation.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Deny</button>
                                                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                                          @csrf
                                                          @method('DELETE')
                                                          <input type="hidden" name="comic_id" value="{{ $comic->id }}">
                                                          <button type="submit" class="btn btn-danger">Confirm</button>
                                                      </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

            {{-- {{$comics->links('pagination-bootstrap-5')}} --}}


        </div>
    </div>
    </div>
@endsection
