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

  
</head>
<body class="overflow-hidden">
  
  
  <a href = "{{ url('welcome')}}" class = "back_btn"><h4 class = "ms-3 mt-5"><< Go Back</h4></a>


  <div id="page"class="d-flex p-0">
      <!-- Contact List -->
    <div id="Contacts"class="d-flex flex-column flex-shrink-1">
        <span id="list"class="border-end border-4 ">
          <div id="messages"class="sticky-top bg-light input-group">
                <input type="search" class="form-control rounded-pill" placeholder="Search Contacts" aria-describedby="search-button">
                <button type="submit"class=btn id="search-button"><i class='bx bx-search'></i></button>   
          </div>
          <!--looped list from database -->
          <ul id="contactList"class="list-group ">
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded active link-dark" aria_current="page"> <!--opens selected page of convo-->
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p>last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            <li id="contact"class="list-group-item">
              <a href="#" class="d-flex p-0 rounded link-dark" aria_current="false"> 
              <div>
                <img src="https://i.ibb.co/VNDZ79y/vijayformal.png" class="card-img-top h-100 border border-3 border-success rounded-circle">
              </div>
              <div >
                <h5>Customer Name</h5>
                <p class="fw-bold">last message</p>
              </div>
              </a>
            </li>
            
            
           
          </ul>      
        </span>
    </div>

    <!-- Fetched Conversation from Chosen Customer messages.blade.php-->
    <div id="messagepage"class="d-flex flex-column flex-grow-1">
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
      <div id="conversation" class="flex-grow-1"><!--Should Start at bottom-->
        <!--Received message-->
          <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
          </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
        <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
      <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
      <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
      <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
      <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div><!--Received message-->
        <div id="chat"class="d-flex">
            <span class="badge rounded-pill bg-success align-self-center" >Received Message</span>
        </div>
      <!--sent message-->
        <div id="chat"class="d-flex">
            <div class="ms-auto">
                <span class="badge rounded-pill bg-light text-dark">Sent Message</span>
            </div>
        </div>
    </div>
    <div class="bg-light input-group align-self-end ">
        <input type="search" class="form-control " placeholder="Aa" aria-describedby="search-button">
        <button type="submit"class=btn-lg id="send message"><i class='bx bx-send'></i></button>
    </div>
    </div>       
    
  </div>
    
</body>
</html>