@extends('layouts.app')

@section('content')

<section class="product" id="product">

        <h1 class="heading">our <span> products</span></h1>

        <div class="box-container">
             @foreach($products as $product)
            <div class="box">
                <div class="image">
                <a href="{{ route('user.product', $product->id) }}">
                <img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="300">
                </a>
                </div>
                <div class="content">
                    <h3>{{$product['name']}}</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>{{$product['price']}}</h3>
                </div>
            </div>
            @endforeach

            

    </section>

@endsection