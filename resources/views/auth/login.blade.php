@extends('template')

@section('content')


    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-4 card bg-dark">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h5 class="my-4 text-center text-white">Veuillez vous authentifier</h3>
                 
                        <input id="email" class="form-control my-4" type="email" name="email" placeholder="E mail" required
                            autofocus />                 

                        <input id="password" class="form-control my-4" type="password" name="password"
                            placeholder="Mot de passe" required autocomplete="current-password" />
                    
                    <div class="text-end">
                        <button class="mt-5 mb-3 btn btn-outline-light">
                            Valider
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>



@endsection
