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
             <div class="fas fa-bars" id="menu-btn"></div>
             <a href = "{{ url('admin_login')}}"><div class = "fas fa-user-edit me-5"></div></a>
             <a href = "{{ url('/session')}}"><div class="fa-solid fa-house-chimney"></div></a>
             <a href = "{{ url('contacts')}}"><div class="fas fa-comment-dots"></div></a>
            <a href="{{ url('order_c')}}"> <div  class="fa-solid fa-dolly" id="cart-btn"></div></a>
             <a href="{{ url('cart')}}"> <div class="fas fa-shopping-cart" id="cart-btn"></div></a>
             <div class="fas fa-user" id="login-btn"></div>
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
        <h3>My <span style = "color: rgb(44, 231, 44)">orders</span></h3>
        <a href = "{{ url('/session')}}" class = "back_btn"><h4 class = "display-6"><< Go Back</h4></a>
       
    </div>

</section>

<!-- home section ends -->
                
<!-- cart start -->
            
<section id="cart" class="section-p1">
                <div class="pull-right" style="float:right;margin-left:10px;padding:2px;">
                    <a class="btn btn-primary" href="{{ url('pending') }}">Pending</a>
                    <a class="btn btn-warning" href="{{ url('Sent') }}">Recieved</a>
                    <a class="btn btn-success" href="{{ url('Purchased') }}"> Purchased</a>
                </div>
<br>
<br>
<br>
<br>
    <table width="100%">
        <thead>
            <tr>
                <!-- <td>Remove</td> -->
                <td>Image</td>
                <td>Product</td>
                <td>Delivery Fee</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total price</td>
                <td>Status</td>
                <td>Date of Check out</td>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                @if($order->buyer_id == $data->id)
                     @foreach($products as $prod)
                        @if( $prod->id == $order->prod_id)
                        <tr>
                            <!-- <td><i class="far fa-times-circle"><a href="#"></a></i></td> -->
                            <td><img src="{{asset('uploads/products/'.$prod->image) }}"></td>
                            <td>{{$prod->plant_name}} </td>
                            <td>₱ {{40 * $order->order_quantity}} </td>
                            <td>₱ {{$prod->plant_price }}</td>
                            <td>₱ {{$order->order_quantity}}</td>
                            <td> ₱ {{ (40 * $order->order_quantity ) + ($order->order_quantity * $prod->plant_price) }}</td> 
                            <td>
                                @if($order->order_status == 'checkout')
                                    <p style="color:blue"> Pending</p>
                                @endif

                                @if($order->order_status == 'sent')
                                    <a href="{{ route('update_status',$order->id)}}" class="href"> <button class="btn btn-warning">Received</button></a>
                                @endif

                                @if($order->order_status == 'zdone')
                                    <p style="color:green">Done</p>
                                @endif
                            </td> 
                            <td>{{$order->created_at}}</td>
                            
                        </tr>
                        @endif
                     @endforeach
                @endif
            @endforeach
        </tbody>
    </table>
</section>

<br><br><br><br>







<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>