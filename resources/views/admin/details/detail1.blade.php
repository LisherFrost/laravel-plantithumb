<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/admin.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
</head>
<body style = "height: 1000px;">
    <center>
    <br><br>
    <a href = "{{ url('admin')}}" class = "back_btn"><h4><< Go Back</h4></a>
    <br>


    <div class="card shadow-lg" style="width: 50rem;">
        <div class="row no-gutters">

            <!-- image here -->
            <div class="col-sm-5" style = "max-height: 300px;">
                <div class = "border border-secondary border-3">
                    <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top h-100 border">
                    <br><br><br>

                    <h5 class="card-title">Card title</h5>
                    <p class="card-text mx-3">Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <br><br><br><br><br><br><br>
                </div>
            </div>

            <div class="col-sm-7">
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

                    <br><br><br>

                </div>

                <br>
                <h5 class="card-title">Description:</h5>
                <p class="card-text px-4">werwerwerewrewrwerwerrewrewrewrewrwewerrwerwerwe</p>
        
                <h5 class="card-title">Seller:</h5>
                <p class="card-text px-4">lyn</p>
        
                <br>
                <a href="{{ url('/edit_product')}}" class="btn btn-warning" style = "width: 55%;">Edit Product</a>
                <br><br>

                <!-- button -->
                <div class="container">
                    <div class="row align-items-start">
                        <!-- col 1 -->
                        <div class = "col" style = "margin-left: 12%;">
                        <a href="#" class="btn btn-primary mx-4" style = "width: 95%;">Add to Cart</a>
                        </div>
                        <!-- col 2 -->
                        <div class = "col" style = "margin-left: -19%;">
                        <i class='btn btn-primary mx-4 bx bx-chat bx-sm' style = "min-width: 10%; background-color:rgb(64, 173, 64)"></i>
                        </div>
                    </div>
                </div>
            
                <br><br>
            </div>
        </div>
    </div>

    </center>
</body>
</html>