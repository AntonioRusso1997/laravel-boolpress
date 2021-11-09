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
                            <div class="col-10 text-white font-weight-bold pl-3">Categories List</div>
                            <div class="d-none d-md-block col-2 text-white">Actions</div>
                        </div>
                    </div>
                    @foreach ($categories as $category)
                        <div class="card-body py-3">
                            <div class="row no-gutters align-items-center">
                                <div class="col-10"><a href="{{ route('admin.categories.show', $category->id) }}" class="my-text-lightblue text-big font-weight-bold" data-abc="true">{{$category['name']}}</a></div>
                                <div class="d-none d-md-block col-2">
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-outline-warning mx-2" data-mdb-ripple-color="dark" href="{{ route('admin.categories.edit', $category['id']) }}" class="card-link"><i class="far fa-edit"></i></i></a>
                                        <form class="delete-post" method="post" action="{{ route('admin.categories.destroy', $category['id']) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger mx-2" data-mdb-ripple-color="dark" type="submit"><i class="far fa-trash-alt"></i></button>
                                        </form>
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