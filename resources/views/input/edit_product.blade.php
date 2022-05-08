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
            <center>
            <h3 class="card-title mb-5">Card title</h3>
            </center>
            <div class = "col">
            <h5 class="card-title">Plant:</h5>
            <input type="name" class="form-control mb-2" id="exampleInputName1" style = "width: 80%;">
            <h5 class="card-title">Type:</h5>
            <input type="name" class="form-control mb-2" id="exampleInputName1" style = "width: 80%;">
            <h5 class="card-title">Location:</h5>
            <input type="name" class="form-control mb-2" id="exampleInputName1" style = "width: 80%;">
            </div>

            <div class = "col">
            <h5 class="card-title">Price:</h5>
            <input type="name" class="form-control mb-2" id="exampleInputName1" style = "width: 80%;">
            <h5 class="card-title">Stock:</h5>
            <input type="name" class="form-control mb-2" id="exampleInputName1" style = "width: 80%;">
            </div>
        </div>
        </div>
    </div>

    <br>

        <h5 class="card-title">Description:</h5>
        <center>
        <input type="name" class="form-control mb-2" id="exampleInputName1" style = "width: 80%;">
        </center>

        <h5 class="card-title">Seller:</h5>
        <center>
        <input type="name" class="form-control mb-2" id="exampleInputName1" style = "width: 80%;">
        </center>

        <br>

        {{-- <center><a href="{{ url('/products')}}" class="btn btn-warning" style = "width: 60%;">Edit Product</a></center>
        <br> --}}

        <!-- button -->
        <center>
            <a href="#" class="btn btn-success mx-5" style = "width: 80%;">Save Changes</a>
        </center>
        

        <br><br><br>

    </div>
</div>


</center>

</body>
</html>