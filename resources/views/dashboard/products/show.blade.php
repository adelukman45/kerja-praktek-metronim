@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $product->title }}</h2>
            </div>
        </div>
    </div>

    <a href="/dashboard/products" class="btn btn-success"> <span data-feather="arrow-left"> </span>
        Back to all my products</a>


    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->category->name }}"
                        class="img-fluid mt-3">
                </div>
                <div class="col-5">
                    <h3>{{ $product->name }}</h3>
                    <hr>
                    <p>{!! $product->detail !!}</p>
                </div>
                <div class="col my-3">
                    <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn btn-warning mb-2"> <span
                            data-feather="edit"> </span>
                        Edit</a>
                    <form action="/dashboard/products/{{ $product->slug }}" method="product" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Are you sure ?')"><span
                                data-feather="x-circle"></span> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
