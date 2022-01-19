@extends('template')

@section('content')
    <section class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @if ($cars->count() > 0)
                @foreach ($cars as $car)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="img-fluid" src="{{ $car->picture }}" alt="une image de véhicule">
                            <div class="cardbody">
                                <p class="card-text">
                                    {{ $car->brand }}<br>
                                    {{ $car->model }}
                                </p>
                                <a href="{{ route('detail', ['id' => $car->id]) }}">Plus d'infos</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Désolé il n'y a plus aucun véhicule disponible pour le moment</p>

            @endif

        </div>
    </section>
    <div class="mt-3 d-flex justify-content-center">
        {!! $cars->links() !!}
    </div>

@endsection
