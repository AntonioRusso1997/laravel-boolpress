@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <div class="card my-bg mb-3 my-shadow">
                    <div class="card-header my-bg-dark py-0 px-4">
                        <h2 class="mt-2 mb-3 text-white">Invia una richiesta</h2>
                    </div>
                    <div class="card-body d-flex flex-column py-3 my-hr px-4">
                        <form action="{{ route('contacts.send') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="text-white my-font-s20" for="name">Nome:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white my-font-s20" for="email">La tua email:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="text-white my-font-s20" for="message">Messaggio:</label>
                                <textarea name="message" id="message" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Invia">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection