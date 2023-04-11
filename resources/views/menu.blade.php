<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bakery Website</title>


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="{{asset('css/home.css')}}">

</head>
<body>
    
    <!-- header -->

    <header class="header">

        <a  class="logo"> <i class="fas fa-bread-slice"></i> bakery </a>

        <nav class="navbar">
            <a href="/home">home</a>
            <a href="/menu">menu</a>
            <a href="/product">product</a>
            <a href="/order">order</a>
        </nav>

        <div class="icons">
            <div id="cart-btn" class="fas fa-shopping-cart"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

    </header>

    <!-- header end -->

    <!-- shopping cart -->

    <div class="cart-items-container">

        <div id="close-form" class="fas fa-times"></div>
        <h3 class="title">checkout</h3>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="/image/bread.jpg" alt="">
            <div class="content">
                <h3>bakery item 1</h3>
                <div class="price">RM45.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="/image/cakes.jpg" alt="">
            <div class="content">
                <h3>bakery item 2</h3>
                <div class="price">RM15.99/-</div>
            </div>
        </div>

        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="/image/cookies.jpg" alt="">
            <div class="content">
                <h3>bakery item 3</h3>
                <div class="price">RM29.99/-</div>
            </div>
        </div>

        <a href="#" class="btn"> checkout </a>

    </div>

    <!-- shopping cart end-->

    <!-- home -->



    <!-- menu -->
<!-- bread -->
    <section class="product" id="product">

        <h1 class="heading">our <span> menu</span></h1>
        <h1 class="heading">our <span> Bread</span></h1>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/bread/white bread.jpg" alt="">
                </div>
                <div class="content">
                    <h3>white breads</h3>
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
    </section>
    <!-- pie -->
    <section class="product" id="product">
            <h1 class="heading">our <span> Pies</span></h1>
        <div class="box-container">
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
                    <h3>strawberry pies</h3>
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
                    <img src="image/pies/bllueberry pie.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blueberry</h3>
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
        </div>
    </section>
    <!-- cake -->
    <section class="product" id="product">
        <h1 class="heading">our <span> Cakes</span></h1>
        <div class="box-container">
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
                    <img src="image/cakes/red velvet.jpg" alt="">
                </div>
                <div class="content">
                    <h3>red velvet</h3>
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
                    <img src="image/cakes/vanilla cake.jpg" alt="">
                </div>
                <div class="content">
                    <h3>vanilla cake</h3>
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
    <section class="product" id="product">
        <h1 class="heading">our <span> cookies</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="image/cookies/chocolate chip.jpg" alt="">
                </div>
                <div class="content">
                    <h3>chocolate chip</h3>
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
                    <img src="image/cookies/peanut butter.jpg" alt="">
                </div>
                <div class="content">
                    <h3>peanut butter</h3>
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
                    <span class="price">RM15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>

    </section>
    <section class="product" id="product">
        <h1 class="heading">our <span> pastries</span></h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="image/pastries/danishes.jpg" alt="">
                </div>
                <div class="content">
                    <h3>danishes</h3>
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
            <div class="box">
                <div class="image">
                    <img src="image/pastries/croissants.jpg" alt="">
                </div>
                <div class="content">
                    <h3>croissants</h3>
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