@extends('layouts.app')

@section('title', 'Comic List')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="m-3">
                Comic's List
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover text-center table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comicList as $comic)
                        <tr>
                            <th scope="row">
                                {{ $comic['id'] }}
                            </th>
                            <td>
                                {{ $comic['title']  }}
                            </td>
                            <td>
                                {{ $comic['description']  }}
                            </td>
                            <td>
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="h-25">
                            </td>
                            <td>
                                {{ $comic['price']  }}
                            </td>
                            <td>
                                {{ $comic['series']  }}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary me-2"
                                    href="">
                                    View
                                </a>
                                <a class="btn btn-sm btn-success me-2">Edit</a>
                                <a class="btn btn-sm btn-warning me-2">Delete</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>



@endsection