@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column bg-light">
                <p class="mb-0">Creazione nuovo post</p>
                <hr class="w-100">
                <form action="{{ route('admin.posts.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="thumb">Thumb</label>
                    <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}">
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{!!old('content')!!}</textarea>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="author">Autore</label>
                    <input type="text" name="author" id="author" class="form-control @error('author') is-invalid @enderror" value="{{old('author')}}">
                    @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Invia</button>
                </div>
                
                </form>
                <hr class="w-100">
                
            </div>
        </div>
    </div>
@endsection