<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/home.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
</head>
<body style = "height: 1500px;">
    <center>

    <a href = "{{ url('/admin')}}">
        <img src="https://i.ibb.co/jHR2kPZ/plantithumb-revised1-web-nobackg.png" alt="plantithumb-revised1-web-nobackg" border="0" style = "margin-bottom: -150px; margin-top: -100px;">
    </a>


    <!-- details -->
    <div class="card" style="width: 35rem;">
    <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="container">
        <div class="row align-items-start">
            <div class = "col">
            <h5 class="card-title">Plant:</h5>
            <p class="card-text">plant name</p>
            <h5 class="card-title">Type:</h5>
            <p class="card-text">smol</p>
            <h5 class="card-title">Location:</h5>
            <p class="card-text">Old Cabalan</p>
            </div>

            <div class = "col">
            <h5 class="card-title">Price:</h5>
            <p class="card-text">P1500</p>
            <h5 class="card-title">Stock:</h5>
            <p class="card-text">69</p>
            </div>
        </div>
        </div>
    </div>

    <br>

        <h5 class="card-title">Description:</h5>
        <p class="card-text px-4">werwerwerewrewrwerwerrewrewrewrewrwewerrwerwerwe</p>

        <h5 class="card-title">Seller:</h5>
        <p class="card-text px-4">lyn</p>

        <br>

        <!-- button -->
        <div class="container">
        <div class="row align-items-start">
            <!-- col 1 -->
            <div class = "col" style = "margin-left: 15%;">
            <a href="#" class="btn btn-primary mx-4" style = "width: 100%;">Add to Cart</a>
            </div>
            <!-- col 2 -->
            <div class = "col" style = "margin-left: -15%;">
            <i class='btn btn-primary mx-4 bx bx-chat bx-sm' style = "min-width: 10%; background-color:rgb(64, 173, 64)"></i>
            </div>
        </div>
        </div>

        <br><br>

    </div>
</div>


</center>

</body>
</html>