@extends('layouts.app')

@section('content')


<div class="container">

    <form action="@yield('form-route')" method="POST">
        @csrf

        @yield('form-method','')
        <!-- user id -->
        <div>
            <label for="used-id">User</label>
            <input type="text" name="used_id" id="used-id" value="{{old('used_id',$post->used_id)}}">
            @error('used_id')
            <div>{{$message}}</div>
            @enderror
        </div>
        <!-- category_id -->
        <div>
            <label for="category-id">Post category</label>
            <input type="text" name="category_id" id="category-id" value="{{old('category_id',$post->category_id)}}">
            @error('category_id')
            <div>{{$message}}</div>
            @enderror
        </div>

        <!-- content -->
        <div>
            <label for="content">Content</label>
            <input type="text" name="content" id="content" value="{{old('content',$post->content)}}">
            @error('content')
            <div>{{$message}}</div>
            @enderror
        </div>

        <!-- section for addtional inputs -->
        @yield('additionals-inputs','')

        <div>
            <button class="btn btn-warning" type="submit">@yield('submit-btn-text', '')</button>
            <button class="btn btn-warning" type="reset">@yield('reset-btn-text', '')</button>
        </div>

    </form>
</div>