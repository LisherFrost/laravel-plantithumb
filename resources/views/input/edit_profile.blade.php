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


        <form action="{{ route('input.update_profile',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf   
            @method('patch')
            <input name="_method" type="hidden" value="PATCH">
            <div class="mb-3 mt-4">
                <h2 class="card-title">Edit Profile</h2>
            </div>
            <input type="text" class="form-control" name="type"  value="{{ $data->type}} " id="type" style = "width: 70%;" hidden>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label mt-3">Image</label>
                <input type="file" class="form-control"  name="image"  value="{{ $data->image}} " id="imageyle"  style = "width: 70%;">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control"name="name"  value="{{ $data->name}} " id="name" style = "width: 70%;">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Location</label>
                <input type="text" class="form-control" name="address"  value="{{ $data->address}} " id="address" style = "width: 70%;">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"  value="{{ $data->email}} " id="email" style = "width: 70%;">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Enter new password</label>
                <input type="password" class="form-control" name="password" placeholder="Leave blank if you don't want to change"  id="password" style = "width: 70%;">
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