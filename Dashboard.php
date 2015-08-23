<?php

extract ($_POST );
$Username=$_COOKIE["Username"];
$dated=$_COOKIE["dated"];


$con=mysqli_connect("mysql","sqldb","Abiabi@123","pizzaStore");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query1 = mysqli_query($con,"SELECT Topping_Non,Topping_Veg FROM dashboard_data WHERE Username='$Username' AND Times='$dated'");
$query2 = mysqli_query($con,"SELECT Crust,Size,Cheese FROM dashboard_data WHERE Username='$Username' AND Times='$dated'");
if($queryresult1=mysqli_fetch_row($query1))
{
$result2=$queryresult1[0].$queryresult1[1];
if($result2){

$array1=explode(',', $result2);
// print_r($array1);
mysqli_close($con);
flush();
}
}

$queryresult2= mysqli_fetch_row($query2);
// print_r($queryresult2);
// echo $content=$queryresult2[0].$queryresult2[1].$queryresult2[2];
$content[0]=$queryresult2[0];
$content[1]=$queryresult2[1];
$content[2]=$queryresult2[2];
$totalcontent= array_merge($content,$array1);



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">

<title>Dashboard</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'>

<script type="text/javascript" src="style/js/jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="style/js/jquery.backstretch.min.js"></script>

<script type="text/javascript">
	$.backstretch("style/images/Supreme_pizza.jpg");
  
</script>

       
  <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>


  
       
<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
   
 <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Contents');
        data.addColumn('number', 'Slices');

         <?php
        // query MySQL and put results into array $results
        // foreach ($results as $row) {
         echo "data.addRow(['".$totalcontent[0]."',50]);";
         echo "data.addRow(['".$totalcontent[1]."',10]);";
          echo "data.addRow(['".$totalcontent[2]."',10]);";
           // echo "data.addRow(['".$totalcontent[3]."',"5"]);";
    for($i=3;$i<count($totalcontent)-1;$i++){
        $j=$i+1;
            echo "data.addRow(['".$totalcontent[$i]."',".$totalcontent[$j]."]);";
            $i++;
         }
    ?>

        var options = {
          title: 'My Pizza Contents',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

     <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');


    <?php
        // query MySQL and put results into array $results
        // foreach ($results as $row) {
    for($i=0;$i<count($array1)-1;$i++){
        $j=$i+1;
            echo "data.addRow(['".$array1[$i]."',".$array1[$j]."]);";
            $i++;
         }
    ?>

        // Set chart options
        var options = {'title':'My Toppings Selection',
                       'width':700,
                       'height':400};
 
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

        function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
            alert('The user selected ' + topping);
          }
        }

        google.visualization.events.addListener(chart, 'select', selectHandler);    
        chart.draw(data, options);
      }

    </script>

      

</head>
<body>
<div class="scanlines"></div>

<!-- Begin Header -->
<div class="header-wrapper opacity">
	<div class="header">
		<!-- Begin Logo -->
		<div class="logo">
		    <a href="index.html">
				<B><i><div class="intro">Pizza Village</div></B></i>
			</a>
	    </div>
		<!-- End Logo -->
		<!-- Begin Menu -->
	<div id="menu-wrapper">
      <div id="menu" class="menu">
       <ul id="tiny">
          <li><a href="index.php">HOME</a></li>
            
              
          <li><a href="Login.php">CRUST AND SIZE</a></li>
          
          <li><a href="index_cheese.php">CHEESE AND SAUCE</a></li>
          <li><a href="index_toppings.php">TOPPING</a></li>
          <li class="active"><a href="Dashboard.php">DASHBOARD</a></li>
            
          
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
		<!-- End Menu -->
	</div>
</div>
<!-- End Header -->

<!-- Begin Wrapper -->
<div class="wrapper"><!-- Begin Intro -->
<div class="intro">Make Your Own Pizza now in Seconds </div>

<div class="blog-wrap">
<!-- Begin Container -->
				<!-- <div class="box"> -->
        <div class="post format-standard box"> 

						<h1 class="title">Dashboard</h1>
						
						<!-- <div class="one-third"> -->
							<!-- <div class="outer none"><span class="inset"> -->
								<center><table>
									
								<tr><td><div id="chart_div" style="width:700px; height:400px"></div></td></tr>
								<tr><td><div id="donutchart" style="width: 700px; height: 400px;"></div></td></tr>
								<table></center>

							<!-- </span></div> -->
						<!-- </div> -->
						
						
						<div class="clear"></div>

			


<pre>




</pre>

  </div>
</div>
<!-- End Wrapper -->
<div class="footer-wrapper">
<div id="footer" class="four">
    <div id="first" class="widget-area">
 
  
  </div>
  <center><h1>Make your Own Pizza</h1></center>
</div>
<div class="site-generator-wrapper">
  <div class="site-generator">Copyright CMPE 280. Design by <a href="">Pradeep Ivan Bosco and Alice George</a>. All rights reserved.</div>
</div>


<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>






  
 
    
