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
                            <div class="col-12 text-white font-weight-bold pl-3">Categories List</div>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-12"><a href="{{ route('categories.show', $category->id) }}" class="my-text-lightblue text-big font-weight-bold" data-abc="true">{{$category['name']}}</a></div>
                            </div>
                        </div>
                        <hr class="m-0 my-hr">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection