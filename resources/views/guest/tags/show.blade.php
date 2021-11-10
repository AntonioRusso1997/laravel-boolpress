@extends('layouts.app')
@section('content')
    <div class="container-fluid d-flex flex-column">
        <div class="container">
            <div class="row w-100 d-flex justify-content-between align-items-center mb-2">
                <h1 class=" col-12 mb-3 d-flex align-items-center text-white"><span class=" mr-3 text-light">Tag:</span>  {{$tag->name}}</h1>
            </div>
        </div>

        <div class="container">

            <div class="row w-100">
                <div class="col-12 d-flex flex-column">
                    <div class="card my-bg mb-3 my-shadow">
                        <div class="card-header my-bg-dark pr-0 pl-0">
                            <div class="my-bg-dark row no-gutters align-items-center w-100">
                                <div class="col-6 text-white font-weight-bold pl-3">'{{$tag->name}}' Posts</div>
                                <div class="d-none d-md-block col-6 text-muted">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-3 text-white">Replies</div>
                                        <div class="col-5 text-white">Author</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach ($tag->posts as $post)
                            <div class="card-body py-3">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-6"><a href="{{ route('posts.show', $post->slug) }}" class="my-text-lightblue text-big font-weight-bold" data-abc="true">{{$post['title']}}</a></div>
                                    <div class="d-none d-md-block col-6">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-3 text-light">100</div>
                                            <div class="media col-5 align-items-center"> <img src="https://spesavicino.it/storage/03630380982/img/profile/logo.jpg" alt="" class="my-w-40px d-block rounded-circle">
                                                <div class="media-body flex-truncate ml-2"> <a href="" class="my-text-lightblue d-block text-truncate" data-abc="true">{{$post['author']}}</a>
                                                    <div class="text-light small text-truncate">{{$post['created_at']}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0 my-hr">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection