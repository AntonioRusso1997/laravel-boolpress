@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card my-bg mb-3 my-shadow">
                <div class="card-header my-bg-dark text-center text-white">{{ __('Dashboard') }}</div>

                <div class="card-body my-bg text-white my-font-s20">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in !') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
