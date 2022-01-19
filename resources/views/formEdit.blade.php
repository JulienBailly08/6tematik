@extends('template')

@section('content')

    <h2 class="text-center">Modification du véhicule</h2>

    <div class="container d-flex justify-content-center">
        <div class="col-8">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="text-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form class="mt-5" action="{{ route('update') }}" method="post" enctype="multipart/form-data">

                @csrf

                <input type="hidden" name="id" value="{{ $car->id }}">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ $car->brand }}" name="brand">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ $car->model }}" name="model">
                </div>

                <div class="input-group mb-3">
                    <input type="number" class="form-control" value="{{ $car->power }}" name="power">
                </div>

                <div class="input-group mb-3">
                    <input type="number" class="form-control" value="{{ $car->year }}" name="year">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ $car->pack }}" name="pack">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Description</span>
                    <textarea class="form-control" name="description">{{ $car->description }}</textarea>
                </div>

                <div class="input-group mb-3">
                    <input type="file" accept="image/jpg, image/png" class="form-control" name="picture">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ $car->price }}" name="price">
                </div>

                <button class="btn btn-dark" type="submit">Modifier</button>

            </form>

        </div>
    </div>

@endsection
