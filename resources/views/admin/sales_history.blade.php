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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- font awesome cdn link  -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> <!-- chart -->
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
    <header class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid nav-home shadow-lg">
          <a href = "{{ url('/admin')}}" class="navbar-brand nav-labels"><img src="https://i.ibb.co/jHR2kPZ/plantithumb-revised1-web-nobackg.png" alt="plantithumb-revised1-web-nobackg" class = "plant-logo" border="0"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <style>
              @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap');
            </style>
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link nav-labels-text" href="{{ url('/contacts')}}">Messages</a>
              </li>
            </ul>

            <form class = "me-2 pt-4 ms-5">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>

  



            <!-- icons -->
            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('sales_history')}}"><i class='bx bx-line-chart bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sales History"></i></a>
            </span>

            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('profile')}}"><i class='bx bx-user-circle bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="My Profile"></i></a>
            </span>

            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('products')}}"><i class='bx bx-package bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add / Edit Product"></i></a>
            </span>
            
            <span class="border border-secondary border-3 mx-2 mt-4 rounded icons_buttons">
              <a href = "{{ url('')}}"><i class='bx bx-log-out bx-md px-1 icons' data-bs-toggle="tooltip" data-bs-placement="bottom" title="Log-Out"></i></a>
            </span>



          </div>
        </div>
    </header>

    <br><br>




    <!-- sales history -->
    <center>

    <h1 class = "nav-labels-text" style = "font-size: 3em;">Sales History</h1>
    <br>
    <a href = "{{ url('admin')}}" class = "back_btn"><h4><< Go Back</h4></a>

    <br><br><br>

    <!-- chart -->
    <div class="container px-4">
      <div class="row gx-5">
        <div class="col">
         <div class="p-3 border bg-light">
          <div id="chart_div" style = "width: 100%;"></div> <!-- bar chart -->
         </div>
        </div>
        <div class="col">
          <div class="p-3 border bg-light">
            <div id="piechart" style="width: 100%; height: 200px;"></div> <!-- pie chart -->
          </div>
        </div>
      </div>
    </div>

    <br><br>



    <table class="table table-striped" style = "width: 60%;">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Category</th>
          <th scope="col">Prod. Name</th>
          <th scope="col">Seller</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mobile Devices</td>
          <td>Samsung 69</td>
          <td>SAMSUNG</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Keyboards / Mouse</td>
          <td>Razer mouse</td>
          <td>Razer Inc.</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Instruments</td>
          <td>YAMAHA Guitar</td>
          <td>Yamaha</td>
        </tr>
      </tbody>
    </table>
    </center>


    <!-- JAVASCRIPT -->

    <!-- bar chart -->
    <script>
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Time of Day');
      data.addColumn('number', 'Motivation Level');

      data.addRows([
        [{v: [8, 0, 0], f: '8 am'}, 1],
        [{v: [9, 0, 0], f: '9 am'}, 2],
        [{v: [10, 0, 0], f:'10 am'}, 3],
        [{v: [11, 0, 0], f: '11 am'}, 4],
        [{v: [12, 0, 0], f: '12 pm'}, 5],
        [{v: [13, 0, 0], f: '1 pm'}, 6],
        [{v: [14, 0, 0], f: '2 pm'}, 7],
        [{v: [15, 0, 0], f: '3 pm'}, 8],
        [{v: [16, 0, 0], f: '4 pm'}, 9],
        [{v: [17, 0, 0], f: '5 pm'}, 10],
      ]);

      var options = {
        title: 'Motivation Level Throughout the Day',
        hAxis: {
          title: 'Time of Day',
          format: 'h:mm a',
          viewWindow: {
            min: [7, 30, 0],
            max: [17, 30, 0]
          }
        },
        vAxis: {
          title: 'Rating (scale of 1-10)'
        }
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>

  
</body>
</html>