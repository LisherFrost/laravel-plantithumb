<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlantiThumb | Your Profile</title>
    <link rel="icon" type="url" href="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif">
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/profile.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
</head>
<body>

    <!-- navbar -->
    <header class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid nav-home shadow-lg">
          <a href = "{{ url('/admin')}}" class="navbar-brand nav-labels"><img src="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif" class = "plant-logo" border="0"></a>
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
                <a class="nav-link nav-labels-text" href="{{ url('/contacts')}}">Messages</a>
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


    <!-- profile -->
    <center>
    <div class="card" style="width: 50rem;">
        <div class="row no-gutters">
            <div class="col-sm-5">
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success">
            </div>
            <div class="col-sm-7">
                <div class="card-body">
                    <h2 class="card-title">sample name</h2>
                    <p class="card-text">I am an IT student.</p>

                    <!-- uncomment in case -->
                    {{-- <br>
                    <a href = "#" class = "btn btn-primary btn-warning">Message</a> --}}

                    <br><br><br>
                    <a href = "{{ url('/edit_profile')}}" class="btn btn-primary btn-success stretched-link" id = "myProfile">Edit Profile</a>


                



                </div>
            </div>
        </div>
    </div>
    </center>



    <!-- modal -->
    {{-- <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myProfile");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
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