@extends('layouts.app')
@section('content')
    <div class="container-fluid w-75 mx-auto">
        <p class=" col-8 mb-3 d-flex align-items-center text-light">Categoria: <a class="ml-2 my-text-lightblue" href="{{ route('categories.show', $post->category['id']) }}">{{ $post->category['name'] }}</a></p>
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <div class="card my-bg mb-3 my-shadow">
                    <div class="card-header my-bg-dark py-0 px-4">
                        <h2 class="mt-2 mb-3 text-white">{{$post['title']}}</h2>
                    </div>
                    <div class="card-body d-flex flex-column py-3 my-hr px-4">
                        {{-- <img class="align-self-center w-50 mb-4 my-shadow" src="{{$post['thumb']}}" alt="{{$post['title']}}"> --}}
                        <img src="{{ asset('storage/'.$post->thumb)}}" alt="{{ $post->title}}">
                        <p class="text-white my-font-s20">{!! $post['content'] !!}</p>                        
                        <hr class="m-0 my-hr">
                        <div class="d-flex list-inline">
                            <div class="text-light">tag del post:
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('tags.show', $tag['id']) }}" class="mx-3 my-text-lightblue">{{$tag['name']}}</a> 
                            @endforeach
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection