@extends('layouts.app')

@section('content')
    <<section class="container py-4">
        <div class="row">
            <form class="col m-3" method="POST" action="{{ route('categories.store') }}">
                <h1 class="mb-3">
                    Aggiungi una nuova categoria:
                </h1>
                <div class="mb-3">
                    <label for="projet-name" class="form-label">Categoria:</label>
                    <input type="text" class="form-control" id="category-name" name="category-name"
                        value="{{ old('category-name') }}">
                    @error('category-name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-success me-3">
                        Aggiungi nuova categoria
                    </button>
                    <button type="reset" class="btn btn-danger me-3">
                        Reset
                    </button>
                </div>
            </form>
        </div>
        </section>
    @endsection
