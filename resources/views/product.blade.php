@extends('layouts.app')
@section('content')

<div style="display: flex; justify-content: center;">
    <div class="container" >
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Price: ${{ $product->price }}</p>
        <div style="display: flex; justify-content: center;">
            <img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="300">
        </div>
        <form method="POST" action="{{ route('cart.addToCart') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <input type="hidden" name="order_id" value="{{ auth()->user()->orders()->where('status', 'pending')->where('user_id', auth()->user()->id)->first()->id ?? '' }}">
            <div style="display: flex; justify-content: center; margin-top:20px;">
            <input type="number" name="quantity" placeholder="How many you want?">
            </div>
            <div style="display: flex; justify-content: center;">
                <button type="submit">Add to Cart</button>
            </div>
        </form>
    </div>
</div>


<style>
    p {
        font-size: 20px;
    }
    
    button {
        margin-top: 10px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    </style>

@endsection