<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantithumb</title>

    <link rel="icon" href="image/plant_logo1.png" type="image/icon type">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
   <!-- <img src="image/logo1.png" class="logo"> -->
    <a href="#" class="logo">  <i class="fa-solid fa-seedling"></i> Plantithumb </a> 

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href = "{{ url('admin_login')}}"><div class = "fas fa-user-edit me-5"></div></a>
        <div class="fas fa-search" id="search-btn"></div>
        <a href="#"> <div class="fas fa-shopping-cart" id="cart-btn"></div></a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>


    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="Email" class="box">
        <input type="password" placeholder="Password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="{{ url('form')}}">create now</a></p>
        <a href="{{ url('welcome')}}" class="btnn">Login</a>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3><span>fresh</span> products for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
        <a href="#" class="btnn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/feature-img-1.png" alt="">
            <h3>fresh</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
           
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>free delivery</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
           
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>easy payments</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
           
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product/product-1.jpg" alt="" >
                <h3>Plant 1</h3>
                <div class="price"> ₱4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="{{ url('view_product')}}" class="btnn" style="margin: 10px;">view</a>
                <a href="#" class="btnn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product/product-2.jpg" alt="">
                <h3>Plant 2</h3>
                <div class="price"> ₱4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="{{ url('view_product')}}" class="btnn" style="margin: 10px;">view</a>
                <a href="#" class="btnn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product/product-3.jpg" alt="">
                <h3>Plant 3</h3>
                <div class="price"> ₱4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="{{ url('view_product')}}" class="btnn" style="margin: 10px;">view</a>
                <a href="#" class="btnn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product/product-4.jpg" alt="">
                <h3>Plant 4</h3>
                <div class="price"> ₱4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="{{ url('view_product')}}" class="btnn" style="margin: 10px;">view</a>
                <a href="#" class="btnn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/product/product-5.jpg" alt="">
                <h3>Plant 5</h3>
                <div class="price"> ₱4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="{{ url('view_product')}}" class="btnn" style="margin: 10px;">view</a>
                <a href="#" class="btnn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product/product-6.png" alt="">
                <h3>Plant 6</h3>
                <div class="price"> ₱4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="{{ url('view_product')}}" class="btnn" style="margin: 10px;">view</a>
                <a href="#" class="btnn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product/product-7.jpg" alt="">
                <h3>Plant 7</h3>
                <div class="price"> ₱4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="{{ url('view_product')}}" class="btnn" style="margin: 10px;">view</a>
                <a href="#" class="btnn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="image/product/product-8.jpg" alt="">
                <h3>Plant 8</h3>
                <div class="price"> ₱4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="{{ url('view_product')}}" class="btnn" style="margin: 10px;">view</a>
                <a href="#" class="btnn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="container">
            <div class="row align-items-start">

              <!-- col 1 -->
              <div class="col">
                <div class="box">
                    <img src="image/categories/1.png" alt="">
                    <h3>Category1</h3>
                    <p>Up to 45% off</p>
                    <a href="#" class="btnn">view</a>
                </div>

                <br>
                <div class="box">
                    <img src="image/categories/4.png" alt="">
                    <h3>Category4</h3>
                    <p>upto 45% off</p>
                    <a href="#" class="btnn">view</a>
                </div>
              </div>

              <!-- col 2 -->
              <div class="col">
                <div class="box">
                    <img src="image/categories/2.png" alt="">
                    <h3>Category2</h3>
                    <p>Up to 45% off</p>
                    <a href="#" class="btnn">view</a>
                </div>
              </div>

              <!-- col 3 -->
              <div class="col">
                <div class="box">
                    <img src="image/categories/3.png" alt="">
                    <h3>Category3</h3>
                    <p>Up to 45% off</p>
                    <a href="#" class="btnn">view</a>
                </div>
              </div>

            

            </div>
        </div>
        




    



    </div>

</section>

<!-- categories section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>Mel Mark</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>John Bryan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>Yuri</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>Neo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->




<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Plantithumb <i class="fa-solid fa-seedling"></i> </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> 091265082682 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> mel@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Olongapo, Philippines - 2210 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> review </a>

        </div>

        <div class="box">
            <h3>Download Our App</h3>
            <p>Shop on mobile !</p>
            <img src="image/plant_logo.png" class="mob">
            <br>
            <a href="#" class="btnn">Download here</a>
            
        </div>

    </div>

    <div class="credit"> created by <span> Yuri </span> | all rights reserved | Groupname dito</div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>