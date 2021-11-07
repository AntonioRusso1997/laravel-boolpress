@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row d-flex justify-content-between align-items-center mb-2">
            <p class=" col-8 mb-3 d-flex align-items-center">Visualizzazione post {{$post->id}}</p>
            <div class="div col-4 d-flex justify-content-end align-items-center gx-3">
                <a class="btn btn-outline-warning mx-2 expand-button e-button" data-mdb-ripple-color="dark" href="{{ route('admin.posts.edit', $post['id']) }}" class="card-link"><i class="far fa-edit"></i> Edit</a>
                <form class="delete-post" method="post" action="{{ route('admin.posts.destroy', $post['id']) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger mx-2 expand-button e-button" data-mdb-ripple-color="dark" type="submit"><i class="far fa-trash-alt"></i> Delete</button>
                </form>
            </div>

        </div>
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <div class="card my-bg mb-3 my-shadow">
                    <div class="card-header my-bg-dark py-0 px-4">
                        <h2 class="mt-2 mb-3 text-white">{{$post['title']}}</h2>
                    </div>
                    <div class="card-body d-flex flex-column py-3 my-hr px-4">
                        <img class="align-self-center w-50 mb-4 my-shadow" src="{{$post['thumb']}}" alt="{{$post['title']}}">
                        <p class="text-white my-font-s20">{!! $post['content'] !!}</p>                        
                        <hr class="m-0 my-hr">
                        <p class="text-muted">Lo slug è: {{$post['slug']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection