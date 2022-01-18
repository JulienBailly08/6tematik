@extends('template')

@section('content')

    <h2>Voici la liste de nos véhicules :</h2>

    @if ($cars->count() > 0)
        @foreach ($cars as $car)
            <h2>{{ $car->brand }}</h2>
            <h3>{{$car->model}}</h3>
            <img src="{{$car->picture}}" alt="une image de véhicule">
            @dump($car)
        @endforeach
    @else
        <p>Désolé il n'y a plus aucun véhicule disponible pour le moment</p>

    @endif





@endsection
