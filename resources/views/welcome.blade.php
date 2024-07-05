@extends('layouts.app')

@section('page-title')
    Home
@endsection

@section('main')
    <ul>
        @foreach ($products as $product)
            @include('shared.product')
        @endforeach
    </ul>
@endsection
