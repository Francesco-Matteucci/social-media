@extends('layouts.createOrEdit')

@section('form-route')

{{route('posts.update')}}

@endsection

@section('form-method')

{{method_field('PUT')}}

@endsection

@section('submit-btn-text', 'send')

@section('reset-btn-text','reset')