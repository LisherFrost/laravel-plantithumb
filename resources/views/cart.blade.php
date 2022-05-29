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
    <link rel="stylesheet" href="css/cart.css">

</head>
<body>
    
    <header class="header">
        <!-- <img src="image/logo1.png" class="logo"> -->
         <a href="#" class="logo">  <i class="fa-solid fa-seedling"></i> Plantithumb </a> 
     
         <nav class="navbar">
             {{-- <a href="#home">home</a>
             <a href="#features">features</a>
             <a href="#products">products</a>
             <a href="#categories">categories</a>
             <a href="#review">review</a> --}}
         </nav>
     
         <div class="icons">
             <div class="fas fa-bars" id="menu-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"></div>
             <a href = "{{ url('admin_login')}}"><div class = "fas fa-user-edit me-5" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Admin"></div></a>
             <a href = "{{ url('/session')}}"><div class="fa-solid fa-house-chimney" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home"></div></a>
             <a href = "{{ url('contacts')}}"><div class="fas fa-comment-dots" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messages"></div></a>
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
             <a href="{{ url('user_profile')}}" class="btnn">Edit Account</a>
             <a href="{{ url('/')}}" class="btnn">Logout</a>
             <br>
             <a href="{{ url('/status')}}" class="btnn" style = "min-width: 295px;">My Purchases</a>
         </form>
     
     </header>

     

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" style = "margin-top: 50px;">
        <h3>My <span style = "color: rgb(44, 231, 44)">Cart</span> </h3>
        <a href = "{{ url('/session')}}" class = "back_btn"><h4 class = "display-6"><< Go Back</h4></a>
       
    </div>

</section>

<!-- home section ends -->


<!-- cart start -->
<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Mode of payment</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total price</td>
            </tr>
        </thead>
        <tbody>
            @foreach($order_tbls as $order)
                @if($order->buyer_id == $data->id)
                     @foreach($products as $prod)
                        @if( $prod->id == $order->prod_id)
                        <tr>
                            <td><a href="{{ url('destroy/'.$order->id)}}"><i class="far fa-times-circle"></i></a></td>
                            <td><img src="{{asset('uploads/products/'.$prod->image) }}"></td>
                            <td>{{$prod->plant_name}} </td>
                            <td>{{$order->payment_method }}</td>
                            <td>₱ {{$prod->plant_price }}</td>
                            <td>₱ {{$order->order_quantity}}</td>
                                 <td>₱ {{ $order->order_quantity * $prod->plant_price }}</td> 
                        </tr>
                        @endif
                     @endforeach
                @endif
            @endforeach
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h1>Apply Coupon</h1>
        <div>
            <input type="text" placeholder="Enter Voucher/Coupon">
            <button class="btnn">Apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h1>Cart Total
        <table>
            <tr>
                @php
                    {{$total = 0  ;}}
                    {{$deliver = 0  ;}}
                @endphp
                @foreach($order_tbls as $order)
                    @if($order->buyer_id == $data->id)
                        @foreach($products as $prod)
                            @if( $prod->id == $order->prod_id)
                                @php
                                    {{$total += $order->order_quantity * $prod->plant_price ;}}

                                 @endphp
                                 
                                @if($order->payment_method == 'Cash on delivery')
                                    @php
                                        {{ $deliver = 40 * $order->order_quantity;}}
                                    @endphp
                                @endif

                            @endif
                        @endforeach
                    @endif
                @endforeach
                <td>Cart Subtotal</td>
                <td>
                    @php
                        {{echo '₱'.$total;}}    
                    @endphp
                </td>
            </tr>
            <tr>
                <td>Shipping(₱40/COD - ₱0/COP)</td>
                <td>
                    @php
                        {{echo '₱'.$deliver;}}    
                    @endphp
                </td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>
                    @php
                        {{echo '₱'.($deliver + $total);}}  
                    @endphp
                </strong></td>
            </tr>
        </table>
       
            <a href = "{{ route('updata_status')}}"><button class="btnn">Checkout</button></a>
        </h1>
    </div>
</section>
<br>
<br>
<!-- cart end -->




<!-- footer section starts  -->
<!-- 
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
            <h3>Download Our App</h3>
            <p>Shop on mobile !</p>
            <img src="image/plant_logo.png" class="mob">
            <br>
            <a href="#" class="btnn">Download here</a>
            
        </div>

    </div>

    <div class="credit"> All Rights Reserved | <span>Plantithumb</span></div>

</section> -->

<!-- footer section ends -->
















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>