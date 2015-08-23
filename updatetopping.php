<?php

extract ( $_POST );
$Username=$_COOKIE["Username"];
$dated=$_COOKIE["dated"];
$topping_Veg=$_POST['NoMeat'];
$topping_Non=$_POST['Meat'];

$count=count($topping_Veg);
$count1=count($topping_Non);
$topper_Veg="";
$topper_Non="";


echo $_POST['slider4'];


for($i=0;$i<$count;$i++){
 	$topper_Veg = $topper_Veg . $topping_Veg[$i] . ",";
 	// echo $topping_Veg[$i];
}

for($i=0;$i<$count1;$i++){
 	$topper_Non = $topper_Non . $topping_Non[$i] . ",";
 	// echo $topping_Non[$i];
}



mysql_connect("mysql","sqldb","Abiabi@123") or die(mysql_error()); 
mysql_select_db("pizzaStore") or die(mysql_error()); 

$query=mysql_query("UPDATE dashboard_data SET Topping_Veg= '$topper_Veg' WHERE Times='$dated'");
$query1=mysql_query("UPDATE dashboard_data SET Topping_Non= '$topper_Non' WHERE Times='$dated'");
// echo "Updated successfully <a href='http://photofire.net/PizzaVillage/index.php?Username=$Username'> Click to Continue</a>";

header("Location:http://photofire.net/PizzaVillage/Dashboard.php");




?>
