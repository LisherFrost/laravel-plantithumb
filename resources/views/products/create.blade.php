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
<br><br>
<br><br><br><br>
<br><br><br><br>

@section('content')
<center>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1 class="heading"> <span> Add Product</span> </h1>
            <br>
        </div>
        <div class="pull-right">
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div style="font-size:20px;width:50%;">
        
                <input type="text" name="seller_id" value="{{$data->id}}" hidden>

                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="float:left;">Image:</strong>
                            <input style="float:left;" type="file" name="image" id="image"  required>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="float:left;" >Name:</strong>
                            <input  style="float:left;" type="text" name="plant_name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="float:left;">Plant type:</strong>
                            <select style="float:left;" type="text" name="plant_type" class="form-control" >
                                    <option></option>
                                    <option value="Snake plant">Snake plant </option>
                                    <option value="Giganteum">Giganteum </option>
                                    <option value="ZZ Plant">ZZ Plant</option>
                                    <option value="Rhapis Excelsa/Lady Palm">Rhapis Excelsa/Lady Palm</option>
                                    <option value="Livistona Australis">Livistona Australis</option>
                                    <option value="Aloe Vera">Aloe Vera</option>
                                    <option value="Pothos">Pothos</option>
                                    <option value="Dracaena">Dracaena</option>
                                    <option value="Spider Plant">Spider Plant</option>
                                    <option value="Rubber Tree">Rubber Tree</option>
                                    <option value="Bird Nest Fern">Bird Nest Fern</option>
                                    <option value="Selloum">Selloum</option>
                                    <option value="Peace Lily">Peace Lily </option>
                                </select>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="float:left;" >Price:</strong>
                            <input  style="float:left;" type="number" name="plant_price" class="form-control" placeholder="Price">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="float:left;" >No. of Stock:</strong>
                            <input  style="float:left;" type="number" name="stock" class="form-control" placeholder="Stock">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong style="float:left;" >Location:</strong>
                            <input  style="float:left;" type="text" name="plant_location" class="form-control" placeholder="Location">
                        </div>
                    </div>
                    
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong   style="float:left;" >Detail:</strong>
                            <textarea style="float:left;" class="form-control" style="height:150px" name="plant_description" placeholder="Detail"></textarea>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="">
                        <button type="submit"style="float:right;margin-right:50px;font-size:15px;" class="btn btn-primary">Submit</button>
                        <a class="btn btn-primary"style="float:left;margin-left:50px;font-size:15px;" href="{{ route('products.index') }}"> Back</a>
                    </div>
                </div>
        </div>

        <br><br>
    </form>
    
</center>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>