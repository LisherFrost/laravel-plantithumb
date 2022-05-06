<!-- 
  TODO: (Seller view)
  - box sa icons
  - add/edit product
  - profile/edit profile
  -

  
  TODO: (Customer view) -- melmark
  - profile page
  - edit profile page
  - purchase history
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlantiThumb | Home</title>
    <link rel="icon" type="url" href="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif">
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/home.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid nav-home shadow-lg">
          <a href = "{{ url('/admin')}}" class="navbar-brand nav-labels"><img src="https://i.ibb.co/jHR2kPZ/plantithumb-revised1-web-nobackg.png" alt="plantithumb-revised1-web-nobackg" class = "plant-logo" border="0"></a>
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
                <a class="nav-link nav-labels-text" href="{{ url('/messages')}}">Messages</a>
              </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                {{-- <button class="btn search-logo" type="submit"><img src="https://i.ibb.co/CtcCGJD/image.png" alt="image" border="0"></button> --}}
            </form>

  


            <!-- icons -->
            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('sales_history')}}"><i class='bx bx-line-chart bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sales History"></i></a>
            </span>

            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('profile')}}"><i class='bx bx-user-circle bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Profile"></i></a>
            </span>

            
            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('')}}"><i class='bx bx-log-out bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log-Out"></i></a>
            </span>
            



          </div>
        </div>
      </header>

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
      <div class="container">
        <div class="row align-items-start">
          <!-- col 1 -->
          <div class = "col">
            <div class="card" style="width: 100%;">
              <a href = "{{ url('/edit_product')}}"><img src="https://i.ibb.co/80Y90SW/image.png" id = "myImg" class="card-img-top" alt="..." style = "height: 400px;"></a>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
                <!-- modal .txt file to be posted here in case gustong ibalik -->
      


                <div id="caption"></div>
              </div>
            </div>
          </div>


          <!-- col 2 -->
          <div class = "col">
            <div class="card" style="width: 100%;">
              <img src="https://i.ibb.co/80Y90SW/image.png" id = "myImg2" class="card-img-top" alt="..." style = "height: 400px;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
                <!-- modal .txt file to be posted here in case gustong ibalik -->
      


                <div id="caption2"></div>
              </div>
            </div>
          </div>



          <!-- col 3 -->
          <div class = "col">
            <div class="card" style="width: 100%;">
              <img src="https://i.ibb.co/80Y90SW/image.png" id = "myImg2" class="card-img-top" alt="..." style = "height: 400px;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
                <!-- modal .txt file to be posted here in case gustong ibalik -->
      


                <div id="caption2"></div>
              </div>
            </div>
          </div>


        <!-- another horizontal set of items -->
        <!-- pending copy paste -->




        </div>
      </div>
      </center>




    <!-- javascript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script> <!-- boxicons -->


    <!-- modal -->
    {{-- <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      
      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById("myImg");
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById("myImg2");
      var modalImg = document.getElementById("img02");
      var captionText = document.getElementById("caption2");
      img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() { 
        modal.style.display = "none";
      }
  </script> --}}
</body>
</html>