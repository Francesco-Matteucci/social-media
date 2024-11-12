@extends('layouts.app')

@section('content')

<div class="container">

    <form action="@yield('form-route')" method="POST">
        @csrf

        @yield('form-method','')



        <!-- Category Selector -->
        <div class="mb-2">
            <label for="category-id" class="form-label">Post Category</label>
            <select class="form-control" name="category_id" id="category-id">
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <!-- Error message -->
            @error('category_id')
            <div class="alert alert-warning mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Post content -->
        <div class="mb-2">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" name="content" id="content" rows="5">{{ old('content', $post->content) }}</textarea>

            <!-- Error message -->
            @error('content')
            <div class="alert alert-warning mt-2">{{ $message }}</div>
            @enderror
        </div>

        <!-- Section for additional inputs -->
        @yield('additionals-inputs','')

        <!-- Submit and reset buttons -->
        <div class="mb-2">
            <button class="btn btn-success" type="submit">@yield('submit-btn-text', 'Save')</button>
            <button class="btn btn-warning" type="reset">@yield('reset-btn-text', 'Reset')</button>
        </div>

    </form>
</div>

@endsection
