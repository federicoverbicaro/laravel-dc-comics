@extends('layouts.LayoutBase')


@section('title', 'Movies | Index')

@section('main')

<h1>Movies</h1>

<div
    class="table-responsive"
>
<a class="btn btn-primary" href="{{ route('movies.create') }}"
name=""
id=""
role="button">inserisci un nuovo film</a>

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
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($movies as $element )
            <tr class="">
                <td>{{$element->id}}</td>
                <td>
                    <a href="{{route('movies.show',['movie' => $element['id'] ] )}}">
                        {{$element->Title}}</a>
                </td>
                <td>{{$element->Description}}</td>
                <td>{{$element->Thumb}}</td>
                <td>{{$element->Price}}</td>
                <td>{{$element->Series}}</td>
                <td>{{$element->Sale_date}}</td>
                <td>{{$element->Type}}</td>
                <td>
                   <button class="btn btn-primary "> Edit</button>
                </td>
                <td>
                    <button class="btn btn-primary "> delete</button>
                </td>


            </tr>
            @endforeach



        </tbody>
    </table>
</div>


@endsection
