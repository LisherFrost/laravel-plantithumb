<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlantiThumb | Login</title>
    <link rel="icon" type="url" href="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif">
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/login.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
</head>
<body>
<center>
   <div  style="width: 600px;  ">
   
        <form class="form rounded border border-3 border-success ">
            <div>
            <a><img src="https://i.ibb.co/jHR2kPZ/plantithumb-revised1-web-nobackg.png" alt="plantithumb-revised1-web-nobackg" class="logo " ></a>
            <p class="fs-2">Seller Log In</p>
            <div class="input">
                <input size="28" required placeholder="Email" class="rounded form-control ">
            </div>
            <div class="space"> </div>
            <div class="input">
            <input type="password"size="28" required placeholder="Password" class="rounded form-control ">
            </div>
            <div class="space"> </div>
            <div class="input d-grid gap-2">
                <button onclick="document.location='{{ url('admin')}}'" class="rounded btn btn-primary btn-success" >Sign In</button>
            </div>
        </form>
    </div>
</center>
</body>
</html>