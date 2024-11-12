@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold fst-italic text-decoration-underline">Post Show !</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <span class="fw-bold">Nome del post:</span>
                        {{ $category->name }}
                    </h5>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-info">Modifica</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
