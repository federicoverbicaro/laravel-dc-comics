@extends('layouts.LayoutBase')

@section('title', 'Movies | Create')

@section('main')
    <h2 class="text-center ">Inserisci un nuovo film</h2>

    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger ">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('movies.store')}}" method="Post">
            @csrf
            <div class="mb-3">

                <label for="Title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="Title" id="Title" aria-describedby="" />

                <label for="Description" class="form-label">Descrizione</label>
                <textarea name="Description" id="Description" cols="30" rows="10" class="form-control"></textarea>




                <label for="Thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="Thumb" id="Thumb" aria-describedby="" />


                <label for="Price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="Price" id="Price" aria-describedby="" />

                <label for="Series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="Series" id="Series" aria-describedby="" />

                <label for="Sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" name="Sale_date" id="Sale_date" aria-describedby="" />

                <label for="Type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="Type" id="Type" aria-describedby="" />

            </div>

            <button type="submit" class="btn btn-primary "> Crea</button>
        </form>

    </div>


@endsection
