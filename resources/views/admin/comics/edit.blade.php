@extends('layouts.app')

@section('title', 'Single comic')

@section('main-content')

<div class="container p-5 text-white">
    <h1 class="text-center">
        Comic's form
    </h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <form action= "{{ route('admin.comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Title
                    </label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Description
                    </label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">
                        Image URL
                    </label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">
                        Price
                    </label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">
                        Type of serie
                    </label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">
                        Comic's type
                    </label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection