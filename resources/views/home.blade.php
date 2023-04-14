@extends('layouts.app')
@section('content')

<body>
    
    <!-- home -->

   <title>Bakery Shop</title>
    <section class="grid" id="grid">

        <div class="content">
            <div class="content-left">
                <div class="info">
                    <h2>Order Your Best <br>Food anytime</h2>
                    <p>Hey,Our delicioous food is waiting for you. We are always near to you with fresh food.</p>
                </div>
                <form action="{{route('menu')}}">
                <button>Explore Food</button>
                </form>
            </div>
                <div class="content-right">
                    <img src="image/animation.jpg" alt="">
                </div>
        </div>
    </section>

  
    <!-- product -->

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


    <!-- product end-->


    <!-- menu -->

    <section class="menu" id="menu">

        <h1 class="heading">our <span> menu</span></h1>

        <div class="menu-container">

            <a href="/menu" class="box">
                <img src="image/bread.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="/menu" class="box">
                <img src="image/pies.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="/menu" class="box">
                <img src="image/cakes.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="/menu" class="box">
                <img src="image/cookies.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="/menu" class="box">
                <img src="image/pastries.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

        </div>

    </section>

    <!-- menu end -->

    

    <!-- review -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/review-1.png" class="user" alt="">
                <h3>Leo Ronaldo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>The restarant is feel relax and food is delicious espically chocolate cake.</p>
            </div>

            <div class="box">
                <img src="image/review-2.png" class="user" alt="">
                <h3>Rose nancy</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>I love the bread that fresh and taste good.</p>
            </div>

            <div class="box">
                <img src="image/review-3.png" class="user" alt="">
                <h3>Hazard</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>I like most of the food in this restarant and the most important is the fee is very cheap compare to other restaurant.</p>
            </div>

        </div>

    </section>

    <!-- review -->

    <!-- order -->

    <section class="order" id="order">
         <h1 class="heading" ><span>order</span> now </h1>
         <div style="display:flex;justify-content:center;margin-top:-65px">
                <img src="image/order.gif" alt="">
            </div>
            <div style="display:flex;justify-content:center">
            <form action="{{route('menu')}}">
                <button style="background-color: #ff511c;
  font-size:30px;padding:10px;color:white">Order Now</button>
            </div>
            </form>
            </div>
        </div>
    </section>

    <!-- order end -->

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

        <div class="credit">created by <span>wlbakey</span> all rights reserved! </div>

    </section>


    <!-- footer ends -->
</body>
</html>
@endsection