@extends('layouts.app')

@section('title', 'Comic List')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="m-3 text-center text-white">
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
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" id="comic_img">
                            </td>
                            <td>
                                {{ $comic['price']  }}
                            </td>
                            <td>
                                {{ $comic['series']  }}
                            </td>
                            <td>
                            <a href=" {{ route('admin.comics.show', $comic -> id) }} ">
                            See more about this comic
                            </a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
            <button type="button" class="btn btn-secondary m-auto d-flex justify-content-center mb-2 bg-white">
                <a href="{{route('admin.comics.create')}}">
                    Create a new Comic
                </a>
            </button>
            </div>
        </div>
    </div>

</div>



@endsection