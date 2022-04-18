<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlantiThumb | Home</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/home.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid nav-home">
          <a class="navbar-brand nav-labels"><img src="https://i.ibb.co/jHR2kPZ/plantithumb-revised1-web-nobackg.png" alt="plantithumb-revised1-web-nobackg" class = "plant-logo" border="0"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <style>
              @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
            </style>
            <ul class="navbar-nav">
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link nav-labels-text" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-labels-text" href="#">Message Us</a>
              </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                {{-- <button class="btn search-logo" type="submit"><img src="https://i.ibb.co/CtcCGJD/image.png" alt="image" border="0"></button> --}}
            </form>

            <box-icon name='cart' style = "margin-left: 10px; font-size: 27px;"></box-icon>
            <box-icon name='user-circle' style = "margin-left: 20px; font-size: 27px;"></box-icon>
          </div>
        </div>
      </nav>

      <br><br>

      <!-- home -->
      <center>
      <div class="row align-items-start" style="width: 40rem;">
        <div class="card col" style = "margin-right: 20px;">
          <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="...">
        
        </div>

        <br>

        <div class="card col" style = "margin-right: 20px;">
          <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="...">

        </div>

        <br>
        
        <div class="card col" style = "margin-right: 20px;">
          <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="...">

        </div>

        <br>
        
        <div class="card col" style = "margin-right: 20px;">
          <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="...">

        </div>
      </div>

      </center>

      <section class="section">
        <div class="text_title">Categories</div>
        <br>
      </section>


      <br><br><br>

      <!-- featured item -->
      <center>
      <div class="card" style="width: 50%;">
        <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="..." style = "height: 400px;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      </center>


      <!-- other cards -->
      <center>
        <div class="row align-items-start" style="width: 40rem; margin-top: 50px;">
          <div class="card col" style = "margin-right: 20px;">
            <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <br>

          <div class="card col" style = "margin-right: 20px;">
            <img src="https://i.ibb.co/80Y90SW/image.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </center>


    <!-- javascript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script> <!-- boxicons -->
</body>
</html>