@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center fst-italic">
                    Post Show
                </h1>
            </div>
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $post['id'] }}
                            </td>
                            <td>{{ $post->category ? $post->category->name : 'Not Category' }}</td>
                            <td>
                                {{ $post['content'] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
