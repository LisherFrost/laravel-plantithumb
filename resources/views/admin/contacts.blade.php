<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PlantiThumb | Messages</title>
  <link rel="icon" type="url" href="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href={{ URL::asset('css/profile.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
    <link rel="stylesheet" href={{ URL::asset('css/home.css'); }} >
    <link rel="stylesheet" href={{ URL::asset('css/contacts.css'); }} >

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body class="overflow-hidden">

@if($current_user->type == 'seller')
<header class="header">
   <!-- <img src="image/logo1.png" class="logo"> -->
    <a href="#" class="logo">  <i class="fa-solid fa-seedling"></i> Plantithumb </a> 

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"></div>
        <a href = "{{ url('admin')}}"><div class="fa-solid fa-house-chimney" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Admin"></div></a>
        <a href = "{{ url('sales_history')}}"><div class="fa-solid fa-chart-line" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sales History"></div></a>
        <a href = "{{ url('contacts')}}"><div class="fas fa-comment-dots" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Messages"></div></a>
        <a href="{{ url('orders')}}"> <div  class="fa-solid fa-dolly" id="cart-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Orders"></div></a>

        <a href = "{{ url('products')}}"><div   class="fa-solid fa-clipboard-list" id="cart-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Products"></div></a>

        <div class="fas fa-user" id="login-btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Profile"></div>
    </div>


    <form action="" class="login-form">
        <h3>Account</h3>
        
        <a href="{{ url('profile')}}" class="btnn">Edit Account</a>
        <a href="{{ url('/logout')}}" class="btnn">Logout</a>
        <br>
        <a href="{{ url('/status')}}" class="btnn" style = "min-width: 295px;">My Purchases</a>
    </form>


</header>
@endif 
@if($current_user->type == 'buyer')
    

<header class="header">
   <!-- <img src="image/logo1.png" class="logo"> -->
    <a href="#" class="logo">  <i class="fa-solid fa-seedling"></i> Plantithumb </a> 

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href = "{{ url('admin_login')}}"><div class = "fas fa-user-edit me-5"></div></a>
        <a href = "{{ url('/session')}}"><div class="fa-solid fa-house-chimney"></div></a>
        <a href = "{{ url('contacts')}}"><div class="fas fa-comment-dots"></div></a>
            <a href="{{ url('order_c')}}"> <div  class="fa-solid fa-dolly" id="cart-btn"></div></a>
        <a href="{{ url('cart')}}"> <div class="fas fa-shopping-cart" id="cart-btn"></div></a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>


    <form action="" class="login-form">
        <h3>Account</h3>
        <img src="{{asset('uploads/users/'.$current_user->image) }} " alt="Image"><br>
        <h4>{{$current_user->email}} </h4>
        <a href="{{ route('user_profile')}}" class="btnn">Edit Account</a>
        <a href="{{ url('/logout')}}" class="btnn">Logout</a>
        <br>
        <a href="{{ url('/status')}}" class="btnn" style = "min-width: 295px;">My Purchases</a>
    </form>

</header>

@endif
  <br><br><br><br>
  <br><br>


  <div id="page"class="d-flex p-0"  >
      <!-- Contact List -->
    <div id="Contacts"class="d-flex flex-column flex-shrink-1" style="width:30%;">
        <span id="list"class="border-end border-4 ">
          <div id="messages"class="sticky-top bg-light input-group" >

            <form action="{{ url('/search') }}" type="get" class="search-form">
                <input type="search" id="search-box"style="width:250%;height:50px;float:left;" class="form-control" name="search" placeholder="Search Contacts" aria-describedby="search-button">
                <button type="submit"class=btn id="search-button" style="font-size:20px;margin-top:6px;float:right;margin-right:-40px;"><i class='bx bx-search'></i></button>   
            </form> 

          </div>
          <!--looped list from database -->
          <ul id="contactList"class="list-group " >
           
            @foreach($users as $user)
                @if($user->id == $sigleuser->id) 
                <li id="contact"class="list-group-item">
                  <a href="#" class="d-flex p-0 rounded active link-dark" aria_current="page"> <!--opens selected page of convo-->
                  <div>
                      <img  src="{{asset('uploads/users/'.$user->image) }} "style="width: 70px;" class="card-img-top h-100  border border-3 border-success rounded-circle" >
                  </div>
                  <div >
                    <div><br><br>                     
                     <h3 style="float:left;"> {{$user->name}} </h3>      
                      </div> 
                  </div>
                  </a>
                </li>
                @endif
              @if($current_user->id != $user->id )     
                @if($user->id != $sigleuser->id)
                  <li id="contact"class="list-group-item">
                    <a href="{{ route('viewMessage',$user->id) }}" class="d-flex p-0 rounded link-dark" aria_current="false"> 
                    <div>
                      <img  src="{{asset('uploads/users/'.$user->image) }} " style="width: 75px;" class="card-img-top h-100 border border-3 border-success rounded-circle" >

                    </div>
                      <div><br><br>
                        <h3 style="float:left;"> {{$user->name}} </h3>
                            @foreach($send as $mess)
                                @if($mess->sender_id == $user->id && $mess->con_stats == 'sent')
                                <p style="background-color:red;float:left;margin-right: -70%;padding:5px;border-radius:9px;color:white;">
                                    New
                                </p>
                                @endif 
                            @endforeach         
                      </div>  
                    </a>
                  </li>
                 
                  @endif
                  @endif
            @endforeach
          </ul>      
        </span>
    </div>

    <!-- Fetched Conversation from Chosen Customer messages.blade.php-->
    <div id="messagepage"class="d-flex flex-column flex-grow-1">
      <div id="CustomerName" class="d-flex">
            <img  src="{{asset('uploads/users/'.$sigleuser->image) }} " style="width: 85px;height:70px;" class="card-img-top h-120 border border-3 border-success rounded-circle" >
        <div class="align-self-center">
          <h5 class="p-3">{{$sigleuser->name}} </h5>
        </div>
        <div class="ms-auto align-self-center " >
          <a href="#" class="link-dark">
            <i id="profileLink"class='bx bxs-info-circle' ></i> <!--Link to Profile-->
          </a>
        </div>
      </div>
      <div id="conversation" class="flex-grow-1" style="padding-top:40px;padding-left:40px;"><!--Should Start at bottom-->
      
        @foreach($messages as $message)
          @if($sigleuser->id != $message->receiver_id)
            <!--Received message-->
              <div id="chat"class="d-flex" style="margin:-30px;">
                <h2>
                  <span class="badge rounded-pill bg-success align-self-center" >{{$message->convo_content}} </span>
                </h2>
              </div>
          @endif
           
          @if($sigleuser->id != $message->sender_id)
              <!--sent message-->
              <div id="chat"class="d-flex" style="margin:-30px;">
                  <div class="ms-auto">
                    <h2>
                      <span class="badge rounded-pill bg-light text-dark">{{$message->convo_content}}</span>
                    </h2>
                  </div>
              </div>
              @endif

      
         @endforeach
        
        </div>
         



<!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
    <div class="box-container">
            <form action="{{ route('sendMessage',$sigleuser->id) }}" method="POST">
              @csrf
              <div class="bg-light input-group align-self-end " style="">
                <input type="search" style="font-size:15px;" class="form-control" name="newMsg" placeholder="Enter messages" aria-describedby="search-button">
                <button type="submit"class=btn-lg id="send message" style="font-size:20px;"><i class='bx bx-send'></i></button>
                </div>
              </form>
            </div>
        
    </div>


</div>

<div class="credit"> All Rights Reserved | <span>Plantithumb</span></div>

</section>

<!-- footer section ends -->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>



</body>
</html>