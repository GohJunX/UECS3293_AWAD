@extends('layouts.app')
@section('content')
<style>
    p{
    font-size: 20;
    text-align: center;
    }
    h1{
        text-align:center;
    }
    </style>
<div style="display: flex; justify-content: center;">
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description}}</p>
        <p>Price: ${{ $product->price }}</p>
        <div style="display: flex; justify-content: center;">
            <img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="300">
        </div>
    </div>
</div>


@endsection