@extends('layouts.LayoutBase')


@section('title', 'Movies | Index')

@section('main')

<h1>Movies</h1>

<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale_date</th>
                <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $element )
            <tr class="">
                <td>{{$element['id']}}</td>
                <td>
                    <a href="{{route('movies.show',['movie' => $element['id'] ] )}}">
                        {{$element['title']}}</a>
                </td>
                <td>{{$element['description']}}</a></td>
                <td>{{$element['thumb']}}</a></td>
                <td>{{$element['price']}}</a></td>
                <td>{{$element['series']}}</a></td>
                <td>{{$element['sale_date']}}</a></td>
                <td>{{$element['type']}}</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>


@endsection
