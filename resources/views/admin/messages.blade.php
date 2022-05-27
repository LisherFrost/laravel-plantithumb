<!--to be shown in messages after contact selection-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="icon" type="url" href="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif">
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/profile.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
  
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/home.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
  <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
  <link rel="stylesheet" href={{ URL::asset('css/contacts.css'); }} >
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->


    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- font awesome cdn link  -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body class="overflow-hidden">

    <header class="navbar navbar-expand-lg navbar-light bg-light">
        <div id="CustomerName" class="d-flex">
            <img id="customerProfile" src="https://i.ibb.co/VNDZ79y/vijayformal.png" class=" h-100 border border-3 border-success rounded-circle">
            <div class="align-self-center">
                <h5 class="p-3">Customer Name</h5>
            </div>
            <div class="ms-auto align-self-center ">
                <a href="#" class="link-dark">
                    <i id="profileLink"class='bx bxs-info-circle' ></i> <!--Link to Profile-->
                </a>
            </div>
            </div>
    </header>

    <div id="conversation"><!--Should Start at bottom-->
      <!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
      <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
    <div class="bg-light input-group fixed-bottom">
        <input type="search" class="form-control " placeholder="Aa" aria-describedby="search-button">
        <button type="submit"class=btn-lg id="send message"><i class='bx bx-send'></i></button>
    </div>

</body>
</html>