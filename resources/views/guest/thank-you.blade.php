@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <div class="card my-bg mb-3 my-shadow">
                    <div class="card-header my-bg-dark py-0 px-4">
                        <h2 class="mt-2 mb-3 text-white">Richiesta inviata</h2>
                    </div>
                    <div class="card-body d-flex flex-column py-3 px-4">
                        <p class="text-white fs-4">Abbiamo ricevuto la tua richiesta che verrà elaborata al più presto. Riceverai una risposta entro 24/48h</p>
                        <a href="/" class="btn btn-primary" style="width: 200px">Torna alla Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection