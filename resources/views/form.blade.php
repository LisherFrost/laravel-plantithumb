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
    <div class="forms">
        <div class="form-wrapper is-active">
        <button type="button" class="switcher switcher-login">
            Login
            <span class="underline"></span>
        </button>
        <form class="form form-login">
            <fieldset>
            <legend>Please, enter your email and password for login.</legend>
            <div class="input-block">
                <!-- <label for="login-email">E-mail</label> -->
                <input id="login-email" type="email" placeholder="Email" required>
            </div>
            <div class="input-block">
                <!-- <label for="login-password">Password</label> -->
                <input id="login-password" type="password" placeholder="Password" required>
            </div>
            </fieldset>
            <a class="btn" href="{{ url('welcome')}}">Login</a>
        </form>
        </div>
        <div class="form-wrapper">
        <button type="button" class="switcher switcher-signup">
            Sign Up
            <span class="underline"></span>
        </button>
        <form class="form form-signup">
            <fieldset>
            <legend>Please, enter your email, password and password confirmation for sign up.</legend>
            <div class="input-block">
                <!-- <label for="signup-username">Username</label> -->
                <input id="signup-email" type="text" placeholder="Username" required>
            </div>
            <div class="input-block">
                <!-- <label for="signup-email">E-mail</label> -->
                <input id="signup-email" type="email" placeholder="Email" required>
            </div>
            <div class="input-block">
                <!-- <label for="signup-password">Password</label> -->
                <input id="signup-password" type="password" placeholder="Password" required>
            </div>
            </fieldset>
            <button type="submit" class="btn">Sign Up</button>
        </form>
        </div>
    </div>
</section>



<script src="js/form.js"></script>
</body>
</html>