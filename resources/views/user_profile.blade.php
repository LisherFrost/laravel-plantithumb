<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Settings Page</title>
    <link rel="stylesheet" href="css/user-profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

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
                    <h1>Personal Info</h1>
                    <h2>Full name</h2>
                    <input type="text" class="input" value="Mel Mark">
                    <h2>Birthday</h2>
                    <input type="text" class="input" value="May 5, 2022">
                    <h2>Gender</h2>
                    <input type="text" class="input" value="Male">
                    <h2>Email</h2>
                    <input type="email" class="input" value="example@gmail.com">
                    <h2>Password</h2>
                    <input type="password" class="input" value="gg123">
                    <button class="btn">Update</button>
                    <br><br>
                    <a href = "{{ url('welcome')}}">< Back</a>
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





</body>
</html>