@extends('layouts.app')
@section('content')

<body>
    
    <!-- home -->
   
    <section class="grid" id="grid">

        <div class="content">
            <div class="content-left">
                <div class="info">
                    <h2>Order Your Best <br>Food anytime</h2>
                    <p>Hey,Our delicioous food is waiting for you. We are always near to you with fresh food.</p>
                </div>
                <form action="/order">
                <button>Explore Food</button>
                </form>
            </div>
                <div class="content-right">
                    <img src="image/cakes.jpg" alt="">
                </div>
        </div>
    </section>

  
    <!-- product -->

    <section class="product" id="product">

        <h1 class="heading">our <span> products</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/bread/white bread.jpg" alt="">
                </div>
                <div class="content">
                    <h3>white bread</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">RM15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/bread/wheat bread.jpg" alt="">
                </div>
                <div class="content">
                    <h3>wheat bread</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">RM18.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/bread/sourdough bread.jpg" alt="">
                </div>
                <div class="content">
                    <h3>sourdough bread</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="price">RM11.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/pies/apple pie.jpg" alt="">
                </div>
                <div class="content">
                    <h3>apple pie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">RM17.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/pies/strawberry pie.jpg" alt="">
                </div>
                <div class="content">
                    <h3>strawberry pie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="price">RM28.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/cookies/sugar.jpg" alt="">
                </div>
                <div class="content">
                    <h3>sugar</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">RM35.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/cakes/chocolate cake.jpg" alt="">
                </div>
                <div class="content">
                    <h3>chocolate cake</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">RM46.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/pastries/cream puff.jpg" alt="">
                </div>
                <div class="content">
                    <h3>cream puff</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">RM15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

        </div>

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

        <h1 class="heading"><span>order</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="image/order.gif" alt="">
            </div>

            <form action="">

                <input type="submit" value="order now" class="btn">
            </form>

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