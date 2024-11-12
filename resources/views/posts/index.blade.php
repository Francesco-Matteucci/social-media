@extends('layouts.app')

<!-- Index -->
@section('content')
    <div class="container-fluid">
        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create</a>
        <!-- Table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Content</th>
                    <th>Functions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts_list as $post)
                    <tr class="align-middle">
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->category ? $post->category->name : 'Not Category' }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Not Avalable</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
