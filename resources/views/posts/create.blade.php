@extends('layouts.createOrEdit')

@section('form-route')

{{route('post.store')}}

@endsection

@section('form-method')

{{method_field('POST')}}

@endsection

@section('submit-btn-text', 'send')

@section('reset-btn-text','reset')