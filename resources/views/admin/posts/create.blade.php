@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <div class="card my-bg mb-3 my-shadow">
                    <div class="card-header my-bg-dark py-0 px-4">
                        <h2 class="mt-2 mb-3 text-white"> Crea nuovo post</h2>
                    </div>
                    <div class="card-body d-flex flex-column py-3 my-hr px-4">
                        <form action="{{ route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label class="text-white my-font-s20" for="title">Titolo</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-white my-font-s20" for="image">Inserisci Immagine</label>
                                <input type="file" name="image" id="image" class="form-control @error('thumb') is-invalid @enderror">{!!old('thumb')!!}">
                                {{-- <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}"> --}}
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-white my-font-s20" for="content">Contenuto</label>
                                <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{!!old('content')!!}</textarea>
                                @error('content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-white my-font-s20" for="author">Autore</label>
                                <input type="text" name="author" id="author" class="form-control @error('author') is-invalid @enderror" value="{{old('author')}}">
                                @error('author')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="text-white my-font-s20" for="author">Categoria</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">-- Seleziona la categoria --</option>
                                  @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                                </select>
                                @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <p class="text-white my-font-s20" for="author">Sezionare i Tag</p>
                                @foreach ($tags as $tag)
                                    <div class="form-check form-check-inline">
                                        <input 
                                        {{in_array($tag->id, old('tags', [])) ? 'checked' : null}}
                                        value="{{ $tag->id }}" type="checkbox" name="tags[]" class="form-check-input" id="{{'tag' . $tag->id}}">
                                        <label class="form-check-label text-white" for="{{'tag' . $tag->id}}">{{ $tag->name }}</label>
                                    </div>   
                                @endforeach
                            </div>
                            <div class="form-group">
                               <button type="submit" class="btn btn-success">Invia</button>
                            </div>                            
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection