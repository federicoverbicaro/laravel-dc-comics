@extends('layouts.LayoutBase')

@section('title', 'Movies | Show')

@section('main')

<main>
<div class="card">

    <div class="card-body text-center ">
        <h4 class="card-text">{{$movies->Title}}</h4>
        <p class="card-text">{{$movies->Thumb}}</p>
        <p class="card-text">Descrizione: <br>
            {{$movies->Description}}$</p>
        <p class="card-text">Prezzo: <br> {{$movies->Price}}$</p>
        <p class="card-text">Serie: <br> {{$movies->Series}}</p>
        <p class="card-text">Data: <br> {{$movies->Sale_date}}</p>
        <p class="card-text">Tipo: <br> {{$movies->Type}}</p>
    </div>
</div>

</main>

@endsection
