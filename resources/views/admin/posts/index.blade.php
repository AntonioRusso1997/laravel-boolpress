@extends('layouts.dashboard')

@section('content')    
    <div class="container-fluid mt-100">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header pr-0 pl-0">
                        <div class="row no-gutters align-items-center w-100">
                            <div class="col font-weight-bold pl-3">Post</div>
                            <div class="d-none d-md-block col-6 text-muted">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-3">Threads</div>
                                    <div class="col-3">Replies</div>
                                    <div class="col-6">Author</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($posts as $post)
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col"><a href="{{ route('admin.posts.show', $post->slug) }}" class="text-big font-weight-semibold" data-abc="true">{{$post['title']}}</a></div>
                                <div class="d-none d-md-block col-6">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-3">100</div>
                                        <div class="col-3">22</div>
                                        <div class="media col-6 align-items-center"> <img src="https://i.imgur.com/Ur43esv.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                            <div class="media-body flex-truncate ml-2"> <a href="" class="d-block text-truncate" data-abc="true">{{$post['author']}}</a>
                                                <div class="text-muted small text-truncate">{{$post['created_at']}} &nbsp;·&nbsp;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection