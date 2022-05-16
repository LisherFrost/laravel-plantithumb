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
    <link rel="stylesheet" href="css/status.css">

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
             <div class="fas fa-search" id="search-btn"></div>
             <a href = "{{ url('contacts')}}"><div class="fas fa-comment-dots"></div></a>
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
             <a href="#" class="btnn" style = "min-width: 295px;">My Purchases</a>
         </form>
     
     </header>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <!-- removed contents for plain template -->
    </div>

</section>

<!-- home section ends -->


<!-- section start -->
<section id="cart" class="section-p1">
    <h1 style = "font-size: 24px; margin-top: 30px;">Your Order #numberhere is now being processed . . .</h1>
    <br>
    <h1 style = "font-size: 22px;">Status: <span style = "color: rgb(196, 196, 36);">Pending</span></h1>
    <br>
    <p style = "font-size: 18px;">Total Amount: <span>     </span></p>
    <br><br><br>
    <a href = "{{ url('welcome')}}" class = "back_btn"><h4 class = "display-6"><< Go Back</h4></a>

    <br><br><br><br><br>
</section>

<!-- section end -->

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