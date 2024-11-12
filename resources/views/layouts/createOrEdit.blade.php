@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="@yield('form-route')" method="POST">
            @csrf

            @yield('form-method', '')

            <!-- user id -->
            <div class="mb-2">
                <label class="form-label" for="user-id">User</label>
                <input class="form-control" type="text" name="user_id" id="user-id"
                    value="{{ old('user_id', $post->user_id) }}">

                <!-- error message -->
                @error('user_id')
                    <div class="alert alert-warning mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- category_id -->
            <div class="mb-2">
                <label for="category-id">Post category</label>
                <input class="form-control" type="text" name="category_id" id="category-id"
                    value="{{ old('category_id', $post->category_id) }}">

                <!-- error message -->
                @error('category_id')
                    <div class="alert alert-warning mt-2">{{ $message }}</div>
                @enderror
            </div>


            <!-- content -->
            <div class="mb-2">
                <label for="content">Content</label>
                <input class="form-control" type="text" name="content" id="content"
                    value="{{ old('content', $post->content) }}">

                <!-- error message -->
                @error('content')
                    <div class="alert alert-warning mt-2">{{ $message }}</div>
                @enderror
            </div>


            <!-- section for addtional inputs -->
            @yield('additionals-inputs', '')

            <div class="mb-2">
                <button class="btn btn-success" type="submit">@yield('submit-btn-text', '')</button>
                <button class="btn btn-warning" type="reset">@yield('reset-btn-text', '')</button>
            </div>

        </form>
    </div>
@endsection
