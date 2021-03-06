@extends('layouts.dashboard')

@section('content')    
    <div class="container-fluid mt-100">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success w-100">
                    {{ session('status') }}
                </div>
            @endif
            <div class="col-md-12">
                <div class="card my-bg mb-3 my-shadow">
                    <div class="card-header my-bg-dark pr-0 pl-0">
                        <div class="my-bg-dark row no-gutters align-items-center w-100">
                            <div class="col text-white font-weight-bold pl-3">Post</div>
                            <div class="d-none d-md-block col-6 text-muted">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-3 text-white">Category</div>
                                    <div class="col-3 text-white">Replies</div>
                                    <div class="col-6 text-white">Author</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($posts as $post)
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"><a href="{{ route('admin.posts.show', $post->slug) }}" class="my-text-lightblue text-big font-weight-bold" data-abc="true">{{$post['title']}}</a></div>
                                <div class="d-none d-md-block col-6">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-3 text-light">                                            
                                            @if ($post->category)
                                                {{$post->category->name}}
                                            @endif                                            
                                        </div>
                                        <div class="col-3 text-light">100</div>
                                        <div class="media col-6 align-items-center"> <img src="https://spesavicino.it/storage/03630380982/img/profile/logo.jpg" alt="" class="my-w-40px d-block rounded-circle">
                                            <div class="media-body flex-truncate ml-2"> <a href="" class="my-text-lightblue d-block text-truncate" data-abc="true">{{$post['author']}}</a>
                                                <div class="text-light small text-truncate">{{$post['created_at']}}</div>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a class="btn btn-outline-warning mx-2" data-mdb-ripple-color="dark" href="{{ route('admin.posts.edit', $post['id']) }}" class="card-link"><i class="far fa-edit"></i></i></a>
                                                <form class="delete-post" method="post" action="{{ route('admin.posts.destroy', $post['id']) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger mx-2" data-mdb-ripple-color="dark" type="submit"><i class="far fa-trash-alt"></i></button>
                                                </form>
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
@endsection