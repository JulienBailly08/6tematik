@extends('template')

@section('content')
    <section class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @if ($cars->count() > 0)
                @foreach ($cars as $car)
                    <div class="col">
                        <a class="text-decoration-none" href="{{ route('detail', ['id' => $car->id]) }}">
                            <div class="card shadow-sm">
                                <img class="img-fluid" src="{{ Storage::url($car->picture) }}"
                                    alt="une image de véhicule">
                                <div class="cardbody">
                                    <p class="ms-1 my-3 card-text text-dark">
                                        {{ $car->brand }}<br>
                                        {{ $car->model }}
                                    </p>

                                </div>
                            </div>
                        </a>
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
