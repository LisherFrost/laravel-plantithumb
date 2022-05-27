<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Settings Page</title>
    <link rel="stylesheet" href="css/user-profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   <!-- <img src="image/logo1.png" class="logo"> -->
    <a href="#" class="logo">  <i class="fa-solid fa-seedling"></i> Plantithumb </a> 

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn" style="opacity:0.0;"> </div>
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
        <img src="{{asset('uploads/users/'.$data->image) }} " alt="Image"><br>
        <h4>{{$data->email}} </h4>
        <a href="{{ route('user_profile')}}" class="btnn">Edit Account</a>
        <a href="{{ url('/logout')}}" class="btnn">Logout</a>
        <br>
        <a href="{{ url('/status')}}" class="btnn" style = "min-width: 295px;">My Purchases</a>
    </form>

</header>

    <!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <!-- <h3><span>fresh</span> products for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
        <a href="#" class="btn">shop now</a> -->
        <div class="container1">
            <div class="leftbox">
                <nav>
                    <a onclick="tabs(0)" class="tab">
                        <i class="fa fa-user"></i>
                    </a>
               
            </div>
    
            <div class="rightbox">
                <div class="profile tabShow">
                    <br>
                    <h1>Personal Info</h1>
                    
                        <form action="{{ route('input.update_profile',$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div style="width: 75px;float:left;">
                            <img src="{{asset('uploads/users/'.$data->image) }} " class="card-img-top h-100  border border-3 border-success rounded-circle" alt="Image"><br>
                        </div>
                            <br>
                            <button style="padding:4px;border-radius:9px;margin-right:100px;;float:right;">Upload 
                                <input type="file" name="image" id="image"  style="width:10px;opacity:0.01;">
                            </button>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <h2>Full name</h2>
                                <input type="text" name="name" class="input" value="{{$data->name}} ">
                                <input type="text" name="type" class="input" value="{{$data->type}} " hidden>
                            <h2>Address</h2>
                                <input type="text" name="address" class="input" value="{{$data->address}} ">
                            <h2>Email</h2>
                                <input type="email" name="email" class="input" value="{{$data->email}} ">
                            <h2>Password</h2>
                                <input type="password" name="password" class="input" value="{{$data->password}} ">
                            <button type="submit" class="btn">Update</button>
                        </form>
                        
                        <br><br>
                        <a href = "{{ url('session')}}">< Back</a>
                    
                    </div>
                </div>
                
            
            </div>
        </div>
    </div>

</section>

<!-- home section ends -->

   

 

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
            <a href="#" class="btn">Download here</a>
            
        </div>

    </div>

    <div class="credit"> created by <span> Yuri </span> | all rights reserved | Groupname dito</div>

</section> -->

<!-- footer section ends -->





<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>