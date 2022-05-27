<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlantiThumb | Sales History</title>
    <link rel="icon" type="url" href="https://i.ibb.co/gvrdcqf/279907607-397731735539573-6502971206019149935-n.gif">
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/sales_history.css'); }} >
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> <!-- google fonts -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- boxicons -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> <!-- chart -->
    
     <!-- bootstrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

   <br><br><br><br>

    
    <!-- pie chart -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>
    <!-- navbar -->
    <header class="header">
   <!-- <img src="image/logo1.png" class="logo"> -->
    <a href="admin" class="logo">  <i class="fa-solid fa-seedling"></i> Plantithumb </a> 

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn" style="opacity:0.0;"></div>
        <a href = "{{ url('admin')}}"><div class="fa-solid fa-house-chimney"></div></a>
        <a href = "{{ url('sales_history')}}"><div class="fa-solid fa-chart-line"></div></a>
        <a href = "{{ url('contacts')}}"><div class="fas fa-comment-dots"></div></a>
        <a href="{{ url('orders')}}"> <div  class="fa-solid fa-dolly" id="cart-btn"></div></a>
        <a href = "{{ url('products')}}"><div   class="fa-solid fa-clipboard-list" id="cart-btn" ></div></a>

        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>


    <form action="" class="login-form">
        <h3>Account</h3>
        
        <a href="{{ url('profile')}}" class="btnn">Edit Account</a>
        <a href="{{ url('/logout')}}" class="btnn">Logout</a>
        <br>
        <a href="{{ url('/status')}}" class="btnn" style = "min-width: 295px;">My Purchases</a>
    </form>

</header>


    <br><br>




    <!-- sales history -->
  
    <center>
    <h1 class = "nav-labels-text" style = "font-size: 3em;">Sales History</h1>
    <br><br><br>

    <!-- chart -->
    <div class="container px-4">
      <div class="row gx-5">
        <div class="col">
         <div class="p-3 border bg-light">
            <div id="columnchart_material" style="width: 700px; height: 400px;"></div>
         </div>
        </div>
      </div>
    </div>
<br>
<br>
<br>
<div style = "margin-left:10%;float:left;width: 30%;">
      <center><h3> Summary</h3></center><br>
      <table class="table table-striped" style = >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Year-month</th>
            <th scope="col">Total sale</th>
            <th scope="col">Purchased</th>
          </tr>
        </thead>
        <tbody>
        @php
            {{$i = 0; }}
        @endphp
          @foreach($reports as $report)
            @foreach($products as $product)
              @if($report->seller_id == $product->id )
                <tr>
                  <th scope="row">{{$i += 1;}} </th>
                  <td>{{$report->date_report}} </td>
                  <td>{{$report->total_sales}} </td>
                  <td>{{$report->num_purchase}} </td>
                </tr>
              @endif
            @endforeach
          @endforeach 
        </tbody>
      </table> 
    </div>


      <div style = "margin-left:5%;float:left;width: 40%;">
      <center><h3>Purchased History</h3> </center> <br>

        <table class="table table-striped" >
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Customer name</th>
              <th scope="col">Plant name</th>
              <th scope="col">Date of purchase</th>
            </tr>
          </thead>
          <tbody>
              @foreach($orders as $order)
                @foreach($users as $user)
                  @foreach($products as $product)
                    @if($user->id == $order->buyer_id && $product->id == $order->prod_id)
                      <tr>
                        <th scope="row">{{$i += 1;}} </th>
                        <td>{{$user->name}} </td>
                        <td>{{$product->plant_name}} </td>
                        <td>{{$order->created_at}} </td>
                      </tr>
                    @endif
                @endforeach
              @endforeach
              @endforeach
          </tbody>
        </table> 
      </div>

    <!--JAVASCRIPT -->

    <!-- bar chart -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      const _date = {!! json_encode($date) !!};
      const _sale = {!! json_encode($sale) !!};

      
      var arr = [];
      arr.push(['Year', 'Sales']);
      
      for(var i=0;i < _date.length;i++ )
      {
        var arr2 = [];

        arr2.push(_date[i]);
        arr2.push(_sale[i]);

        arr.push(arr2);

      }
      console.log(arr);

      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable(arr);

        var options = {
          chart: {
            title: 'Sales Summary',
            subtitle: _date,
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  
</body>
</html>