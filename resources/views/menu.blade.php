@extends('layouts.app')
@section('content')


<link rel="stylesheet" href="{{asset('css/home.css')}}">

<!-- bread -->
    <section class="product" id="product">

        
        <h1 class="heading">our <span> Bread</span></h1>
        <div class="box-container">

        @foreach($products as $product)
            @if($product['category_id']==1)
            <div class="box">
                <div class="image">
                <a href="{{ route('user.product', $product->id) }}">
                <img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="150" height="150">
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
                    <a href="{{ route('user.product', $product->id) }}" class="btn">add to cart</a>
                </div>
               
            </div>
             @endif
            @endforeach
    </section>
    <!-- pie -->
    <section class="product" id="product">
            <h1 class="heading">our <span> Pies</span></h1>
        <div class="box-container">
        @foreach($products as $product)
            @if($product['category_id']==2)
            <div class="box">
                <div class="image">
                <a href="{{ route('user.product', $product->id) }}">
                <img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="150" height="150">
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
                    <a href="{{ route('user.product', $product->id) }}" class="btn">add to cart</a>
                </div>
            </div>
            @endif
            @endforeach
    </section>
    <!-- cake -->
    <section class="product" id="product">
        <h1 class="heading">our <span> Cakes</span></h1>
        <div class="box-container">
        @foreach($products as $product)
            @if($product['category_id']==3)
            <div class="box">
                <div class="image">
                <a href="{{ route('user.product', $product->id) }}">
                <img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="150" height="150">
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
                    <a href="{{ route('user.product', $product->id) }}" class="btn">add to cart</a>
                </div>
            </div>
            @endif
            @endforeach
    </section>
    <section class="product" id="product">
        <h1 class="heading">our <span> cookies</span></h1>
        <div class="box-container">
        @foreach($products as $product)
            @if($product['category_id']==4)
            <div class="box">
                <div class="image">
                <a href="{{ route('user.product', $product->id) }}">
                <img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="150" height="150">
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
                    <a href="{{ route('user.product', $product->id) }}" class="btn">add to cart</a>
                </div>
            </div>
            @endif
            @endforeach
    </section>
    <section class="product" id="product">
        <h1 class="heading">our <span> pastries</span></h1>
        <div class="box-container">
        @foreach($products as $product)
            @if($product['category_id']==5)
            <div class="box">
                <div class="image">
                <a href="{{ route('user.product', $product->id) }}">
                <img src="{{ asset('image/' . $product->name . '.jpg') }}" alt="{{ $product->name }}" width="50" height="50">
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
                    <a href="{{ route('user.product', $product->id) }}" class="btn">add to cart</a>
                </div>
            </div>
            @endif
            @endforeach
    </section>

    <!-- menu end -->


    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>address</h3>
                <p>12,Jalan Harimau,Taman Meribau,81500 Kajang,Kuala Lumpur.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>E-mail</h3>
                <a href="#" class="link">wl69@gmail.com</a>
                <a href="#" class="link">jx94@gmail.com</a>
            </div>

            <div class="box">
                <h3>call us</h3>
                <p>+61 (2) 1478 2369</p>
                <p>+61 (2) 1478 2369</p>
            </div>

            <div class="box">
                <h3> opening hours</h3>
                <p>Monday - Friday: 9:00 - 23:00 <br> Saturday: 8:00 - 24:00 </p>
            </div>

        </div>

        <div class="credit">created by <span>wlbakery</span> all rights reserved! </div>

    </section>


    <!-- footer ends -->

</body>
</html>
@endsection