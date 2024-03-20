@extends('layouts.LayoutBase')


@section('title', 'Movies | Index')

@section('main')

    <h1 class="text-center text-uppercase ">Movies</h1>
    <div class="container">
        <a class="btn btn-primary mb-3 " href="{{ route('movies.create') }}" name="" id=""
            role="button">inserisci un
            nuovo film
        </a>
    </div>

    <div class="container d-flex  gap-3 flex-wrap justify-content-center  ">

        @foreach ($movies as $element)
            <div class="card col-4  p-3">

                <div class="d-flex flex-column align-items-center ">
                    <img src="{{ $element->Thumb }}" alt="{{ $element->Title }}" height="100%" width="100%"
                        class="max-width-100">
                </div>
                <div class="card-body d-flex flex-column align-items-center ">
                    <a href="{{ route('movies.show', ['movie' => $element['id']]) }}">
                        {{ $element->Title }}</a>
                    <p class="card-text">{{ $element->Price }}$</p>
                    <p class="card-text">{{ $element->Series }}</p>
                    <p class="card-text">{{ $element->Type }}</p>
                </div>

                <div class="d-flex flex-column align-items-center  gap-2 ">
                    <a href="{{ route('movies.edit', $element->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('movies.destroy', $element->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="submit" class="btn btn-danger "> Delete</button>
                        </td>

                    </form>
                </div>
            </div>
        @endforeach


    </div>


@endsection
