<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/profile.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
</head>
<body>
    <center>

    <a href = "{{ url('/admin')}}">
        <img src="https://i.ibb.co/jHR2kPZ/plantithumb-revised1-web-nobackg.png" alt="plantithumb-revised1-web-nobackg" border="0" style = "margin-bottom: -150px; margin-top: -100px;">
    </a>


    <!-- details -->
    <div class="card" style="width: 35rem;">
        <form>
            <div class="mb-3 mt-4">
                <h2 class="card-title">sample name</h2>
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label mt-3">Name</label>
            <input type="name" class="form-control" id="exampleInputName1" style = "width: 70%;">
            </div>

            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Location</label>
            <input type="name" class="form-control" id="exampleInputLocation1" style = "width: 70%;">
            </div>

            {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}


            <button type="submit" class="btn btn-success mt-4 mb-5">Save Changes</button>
        </form>
    </div>

    </center>


    
</body>
</html>