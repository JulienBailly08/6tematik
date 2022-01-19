@extends('template')

@section('content')

    <h2 class="text-center">Création d'un nouveau véhicule</h2>

    <div class="container d-flex justify-content-center">
        <div class="col-8">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="text-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form class="mt-5" action="{{ route('store') }}" method="post" enctype="multipart/form-data">

                @csrf

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Marque" name="brand">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Modèle" name="model">
                </div>

                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Puissance" name="power">
                </div>

                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Année" name="year">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Finition" name="pack">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text">Description</span>
                    <textarea class="form-control" name="description"></textarea>
                </div>

                <div class="input-group mb-3">
                    <input type="file" accept="image/jpg, image/png" class="form-control" name="picture">
                </div>

                <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="Prix" name="price">
                </div>

                <button class="btn btn-dark" type="submit">Créer</button>

            </form>

        </div>
    </div>

@endsection
