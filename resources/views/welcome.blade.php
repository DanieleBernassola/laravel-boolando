@extends('layouts.app')

@section('page-title')
    Home
@endsection

@section('main')
    @foreach ($products as $product)
        @include('shared.product')
    @endforeach
@endsection
