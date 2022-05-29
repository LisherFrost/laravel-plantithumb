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

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"></div>
        <div class="fas fa-search" id="search-btn" style="opacity:0.0;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"></div>
        <a href = "{{ url('admin')}}"><div class="fa-solid fa-house-chimney" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Admin"></div></a>
        <a href = "{{ url('sales_history')}}"><div class="fa-solid fa-chart-line" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sales History"></div></a>
        <a href = "{{ url('contacts')}}"><div class="fas fa-comment-dots" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messages"></div></a>
        <a href="{{ url('orders')}}"> <div  class="fa-solid fa-dolly" id="cart-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Orders"></div></a>

        <a href = "{{ url('products')}}"><div   class="fa-solid fa-clipboard-list" id="cart-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Products"></div></a>

        <div class="fas fa-user" id="login-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Profile"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>


    <form action="" class="login-form">
        <h3>Account</h3>
        
        <a href="{{ url('user_profile')}}" class="btnn">Edit Account</a>
        <a href="{{ url('/logout')}}" class="btnn">Logout</a>
        <br>
    </form>

</header>
<br><br><br>
<br><br><br>
<br><br><br>
<p hidden>  
    @php
        {{$i = 0;}}
        @enphp
    </p>

@foreach ($products as $product)
<p hidden>  

    {{$i += 1;}}
</p>
        @if($i == 1)
              @if($data->id == $product->seller_id)
                    @if($products == null)
                    <h1 class="heading"> My <span>Products</span> </h1>
                    @endif
                    @if($products != null)
                    <h1 class="heading"> My <span>Products</span> </h1>
                    @endif
                    
                  @endif
              @endif
        @endforeach
<!-- products section starts  -->
<section class="products" id="products">

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
            @foreach ($products as $product)
              @if($data->id == $product->seller_id)
                  <div class="swiper-slide box">
                      <img src="{{asset('uploads/products/'.$product->image) }} " style="width:300px;">
                      <h3>{{$product->plant_name}} </h3>
                      <div class="price"> ₱ {{$product->plant_price}} </div>
                      <a href="{{ route('details',$product->id) }}" class="btnn" style="margin: 10px;">view</a>
                  
                  </div>
                  @endif
            @endforeach
        </div>

    </div>
</section>

<h1 class="heading"> All <span>Products</span> </h1>
<!-- products section starts  -->
<section class="products" id="products">

    <div class="swiper product-slider">

        <div class="swiper-wrapper">
            @foreach ($products as $product)
                  <div class="swiper-slide box">
                      <img src="{{asset('uploads/products/'.$product->image) }} " style="width:300px;"  >
                      <h3>{{$product->plant_name}} </h3>
                      <div class="price"> ₱ {{$product->plant_price}} </div>
                      <a href="{{ route('details',$product->id) }}" class="btnn" style="margin: 10px;">view</a>
                  
                  </div>
            @endforeach
        </div>

    </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>