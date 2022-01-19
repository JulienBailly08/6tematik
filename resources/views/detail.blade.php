@extends('template')

@section('content')


    <section class="container">
            <h2 class="text-center my-4">{{ $car->brand }}</h2>
            <h3 class="text-center mb-5">{{ $car->model }}</h3>
            <div class="row border border-dark rounded">
                <div class="col-6 my-4">
                    <img class="img-fluid" src="{{ Storage::url($car->picture) }}" alt="une image de véhicule">
                </div>
                <div class="col-6 my-4 d-flex flex-column justify-content-between">
                    <p>Année : {{ $car->year }}</p>
                    <p>Puissance : {{ $car->power }} chevaux</p>
                    <p>Finition et spécificité : {{ $car->pack }}</p>
                    <p>{{ $car->description }}</p>
                    <p>Tarif : {{$car->price}} €</p>
                </div>
            </div>
    </section>

@endsection
