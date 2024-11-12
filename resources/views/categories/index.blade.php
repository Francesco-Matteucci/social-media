@extends('layouts.app')

<!-- Index -->
@section('content')
    <div class="container-fluid">
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create</a>
        <!-- Table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Content</th>
                    <th>Functions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories_list as $category)
                    <tr class="align-middle">
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->content }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div>Not Available</div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
