<?php

extract ( $_POST );
$Username=$_COOKIE["Username"];
$dated=$_COOKIE["dated"];
$Sauce=$_POST['sauce'];
$Cheese=$_POST['cheese'];

// $Sauce="barbeque";
// $Cheese="Normal";
// $dated="March 26, 2015, 9:53 pm";

mysql_connect("mysql","sqldb","Abiabi@123") or die(mysql_error()); 
mysql_select_db("pizzaStore") or die(mysql_error()); 


$query=mysql_query("UPDATE dashboard_data SET Cheese= '$Cheese',Sauce='$Sauce' WHERE Times='$dated'") or die(mysql_error());

// echo "Updated successfully <a href='http://photofire.net/PizzaVillage/index_toppings.php?Username=$Username'> Click to Continue</a>";
header("Location:http://photofire.net/PizzaVillage/index_toppings.php?Username=$Username");
// echo $dated;
?>
