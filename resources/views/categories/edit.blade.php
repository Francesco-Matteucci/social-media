@extends('layouts.app')

@section('content')
<main>
    <section class="container my-4" id="form-project">
        <div class="row justify-content-center">
            <h1>CREATE A NEW CATEGORY</h1>
            <div class="col-5">
                <form action="{{ route("categories.update", $category)}}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name Category:</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-success">Back to home</a>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
