@extends('layouts.LayoutBase')

@section('title', 'Movies | Edit')

@section('main')
    <h2 class="text-center ">Inserisci un nuovo film</h2>

    <div>
        <form action="{{ route('movies.update', $movies->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">

                <label for="Title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="Title" id="Title" value="{{ old('Title') ?? $movies->Title}}"/>

                <label for="Description" class="form-label">Descrizione</label>
                <textarea name="Description" id="Description" cols="30" rows="10" class="form-control">{{ old('Description') ?? $movies->Description}}"</textarea>




                <label for="Thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="Thumb" id="Thumb" value="{{ old('Thumb') ?? $movies->Thumb}}" />


                <label for="Price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="Price" id="Price" value="{{ old('Price') ?? $movies->Price}}" />

                <label for="Series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="Series" id="Series" value="{{ old('Series') ?? $movies->Series}}" />

                <label for="Sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" name="Sale_date" id="Sale_date" value="{{ old('Sale_date') ?? $movies->Sale_date}}" />

                <label for="Type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="Type" id="Type" value="{{ old('Type') ?? $movies->Type}}"/>

            </div>

            <button type="submit" class="btn btn-primary "> Crea</button>
        </form>

    </div>


@endsection
