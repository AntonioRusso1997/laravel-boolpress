@extends('layouts.app')
@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <div class="col-12 d-flex flex-column bg-light">
                <p class="mb-0">Visualizzazione post {{$post->id}}</p>
                <hr class="w-100">
                <h1 class="mt-2 mb-3">{{$post['title']}}</h1>
                <img class="align-self-center w-50 mb-4" src="{{$post['thumb']}}" alt="{{$post['title']}}">
                <p class="text-dark">{!! $post['content'] !!}</p>
                <hr class="w-100">
                <p class="text-muted">Lo slug è:{{$post['slug']}}</p>
            </div>
        </div>
    </div>
@endsection