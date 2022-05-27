<!DOCTYPE html>
<html>
    <head>
        <title>Plantithumb</title>

        <link rel="icon" href="image/plant_logo1.png" type="image/icon type">
        <link rel="stylesheet" href="css/form.css">
    </head>
<body>
    <img src="image/plant_logo1.png" class="logo">
    <br>
    <!-- <h1>Download our App <a href="#"><span>here</span></a>!</h1> -->
<section class="forms-section">
    <div class="forms" >
        <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
            Login
            <span class="underline"></span>
        </button>
        <form class="form form-login"  action="{{ route('login') }}" method="POST">
        @csrf
            <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <center>
                <h3>Welcome  <br>
                    Plantito / Plantita
                </h3>
            </center><br>
            
            <div class="input-block">
                <label for="login-email">E-mail</label>
                <input id="email" type="email" name="email" required >
            </div>
            <div class="input-block">
                <label for="login-password">Password</label>
                <input  id="password" type="password" name="password" required >
            </div>
            </fieldset>
            <center><button class="btn" type="submit">Login</button></center>
            Log in as Seller? <a href="/admin_login">Click here</a>
        </form>

        </div>
        <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
            Sign Up
            <span class="underline"></span>
        </button>


        <form class="form form-signup" action="{{ route('registerUser') }}" method="POST" enctype="multipart/form-data">
            @if(Session::has('Success'))
                <div class="alert alert-success">{{Session::get('Success')}} </div>
            @endif
            
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('Fail')}} </div>
            @endif


            @csrf

            <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
                <x-jet-label for="" value="{{ __('Image') }}" />
                <input type="file" name="image" id="image"  required>
            
            </div>
                        
            <div class="input-block">
               <x-jet-label for="name" value="{{ __('name') }}" />
                <input id="name" type="text" name="name" :value="old('name')" placeholder="first name / last name" required autofocus autocomplete="name" >
            </div>
            <div class="input-block">
               <x-jet-label for="address" value="{{ __('address') }}" />
                <input id="address" type="text" name="address" :value="old('address')" placeholder="BLCK / Street / municipality" required >
            </div>
            
            <div class="input-block">
              <x-jet-label for="email" value="{{ __('email') }}" /> 
                <input id="email" type="email" name="email" :value="old('email')" placeholder="sample@gmail.com" required>
            </div>
            <div class="input-block">
               <x-jet-label for="password" value="{{ __('password') }}" />
                <input id="password" type="password" name="password" required placeholder="enter 6-20 character" autocomplete="new-password">
            </div>
            <!-- <div class="input-block">
               <x-jet-label for="password" value="{{ __('Confirm Password') }}" />
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
            </div> -->
            </fieldset>
            <button type="submit" class="btn">Sign Up</button>
        </form>

        
        </div>
    </div>
</section>



<script src="js/form.js"></script>
</body>
</html>