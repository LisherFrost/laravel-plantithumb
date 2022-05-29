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

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"></div>
        <div class="fas fa-search" id="search-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"></div>
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
        
        <a href="{{ url('profile')}}" class="btnn">Edit Account</a>
        <a href="{{ url('/logout')}}" class="btnn">Logout</a>
        <br>
        <a href="{{ url('/status')}}" class="btnn" style = "min-width: 295px;">My Purchases</a>
    </form>

</header>
<br><br><br>
<br><br><br>
<br><br><br>
<center>
    <div class="card shadow-lg" style="width: 100rem;">
        <div class="row no-gutters">
            <!-- image here -->
            <div class="col-sm-5" style = "max-height: 300px;">
                <div>
                    <br>
                <div class="swiper-slide box"  >
                      <img src="{{asset('uploads/products/'.$product->image) }} "style="max-width:300px;"  alt="">
                </div>
                <br><br><br>
                <h5 class="card-title"></h5>
                     
                
                </div>
            </div>
            
            <div class="col-sm-7">
                <div class="card-body">
                    <div class="container">
                        <div class="row align-items-start">
                                <div class = "col">
                                    <br><br><br>
                                    <h5 class="card-title">Plant:</h5>
                                        <p class="card-text">{{$product->plant_name}} </p>
                                    <h5 class="card-title">Type:</h5>
                                        <p class="card-text">{{$product->plant_type}} </p>
                                    <h5 class="card-title">Location:</h5>
                                        <p class="card-text">{{$product->plant_location}} </p>
                                </div>
                
                                <div class = "col">
                                    <br><br><br>
                                    <h5 class="card-title">Price:</h5>
                                    <p class="card-text">{{$product->plant_price}} </p>
                                    <h5 class="card-title">Stock:</h5>
                                    <p class="card-text">{{$product->stock}} </p>
                                </div>
                        </div>
                        </div>

                    <br><br>

                </div>

                <h5 class="card-title">Seller:</h5>
                @foreach($users as $user)
                    <p class="card-text">{{$user->name}} </p>
                @endforeach
                <br>
                <br>
                <h5 class="card-title">Description:</h5>
                <p class="card-text mx-3">{{$product->plant_description}}</p>
                <br>
                <a href="{{ route('products.edit',$product->id)}}" class="btn btn-warning" style = "width: 55%;">Edit Product</a>
                <br><br>
                <br><br>
                <br><br>    

              
            
                <br><br>
            </div>
           
        </div>
    </div>

    </center>

    
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>