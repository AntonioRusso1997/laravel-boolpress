@extends('layouts.app')

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
                            <div class="col-12 text-white font-weight-bold pl-3">Tags List</div>
                        </div>
                    </div>
                    @foreach ($tags as $tag)
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-12"><a href="{{ route('tags.show', $tag->id) }}" class="my-text-lightblue text-big font-weight-bold" data-abc="true">{{$tag['name']}}</a></div>
                            </div>
                        </div>
                        <hr class="m-0 my-hr">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection