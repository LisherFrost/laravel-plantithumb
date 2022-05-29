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
    <link rel="stylesheet" href="../css/style.css">

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
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"></div>
        <div class="fas fa-search" id="search-btn" style="opacity:0.0;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"></div>
        <a href = "{{ url('admin_login')}}"><div class = "fas fa-user-edit me-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Admin"></div></a>
        <a href = "{{ url('/session')}}"><div class="fa-solid fa-house-chimney" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home"></div></a>
        @if($checkmessage_received != null)
            <a href = "{{ url('contacts')}}">
                <div  class="fas fa-comment-dots" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messages">
                    <p style="margin-top:-50px;margin-right:-25px;font-size:15px;">
                    <i class="fa-solid fa-bell" style="color:red;"></i></p>
                    </div>
                </a>
                
                @endif
                @if($checkmessage_received == null)
                <a href = "{{ url('contacts')}}"><div class="fas fa-comment-dots" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messages"></div></a>
                
                @endif
            <a href="{{ url('order_c')}}"> <div  class="fa-solid fa-dolly" id="cart-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Orders"></div></a>
        <a href="{{ url('cart')}}"> <div class="fas fa-shopping-cart" id="cart-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Cart"></div></a>
        <div class="fas fa-user" id="login-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Profile"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>


    <form action="" class="login-form">
        <h3>Account</h3>
        <img src="{{asset('uploads/users/'.$data->image) }} " alt="Image"><br>
        <h4>{{$data->email}} </h4>
        <a href="{{ route('user_profile')}}" class="btnn">Edit Account</a>
        <a href="{{ url('/logout')}}" class="btnn">Logout</a>
        <br>
        <!-- <a href="{{ url('/status')}}" class="btnn" style = "min-width: 295px;">My Purchases</a> -->
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Relaxing <span> indoor plants </span>for your</h3>
        <p>Indoor plants that can make the atmosphere fresh and relaxing</p>
        <a href="#products" class="btnn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../image/feature-img-1.png" alt="">
            <h3>Good Product</h3>
            <p>Plants are always in good condition</p>
           
        </div>

        <div class="box">
            <img src="../image/feature-img-2.png" alt="">
            <h3>Fast delivery</h3>
            <p>Fast and safe delivery right to your door step</p>
           
        </div>

        <div class="box">
            <img src="../image/feature-img-3.png" alt="">
            <h3>Easy to communicate</h3>
            <p>Contact your seller and communicate to them easily</p>
           
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- products section starts  -->
<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
            @foreach ($products as $product)
                <div class="swiper-slide box">
                    <img src="{{asset('uploads/products/'.$product->image) }} " alt="" >
                    <h3>{{$product->plant_name}} </h3>
                    <div class="price"> ₱ {{$product->plant_price}} </div>
                    <a href="{{ route('view_product',$product->id) }}" class="btnn" style="margin: 10px;">view / add to cart</a>
                
                </div>
            @endforeach
        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
            @foreach ($products->reverse() as $product)
            <div class="swiper-slide box">
                <img  src="{{asset('uploads/products/'.$product->image) }} " alt="">
                <h3>{{$product->plant_name}}</h3>
                <div class="price"> ₱ {{$product->plant_price}} </div>
                <a href="{{ route('view_product',$product->id) }}" class="btnn" style="margin: 10px;">view / add to cart</a>
                
            </div>
            @endforeach
        </div>

    </div>


</section>

<!-- products section ends -->

<!-- categories section starts  -->

<section class="products" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
            @foreach($categories as $cat)
                <div class="swiper-slide box">
                    <img src="{{asset('image/categories/'.$cat->image) }} " alt="" >
                    <h3>{{$cat->name}}</h3>
                    <div class="price">Type </div>
                    <a href="{{ url('category/'.$cat->id)}}" class="btnn" style="margin: 10px;">view</a>
                </div>
            @endforeach
        </div>

        
</section>

<!-- categories section ends -->



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

    <div class="credit"> All Rights Reserved | <span>Plantithumb</span></div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>