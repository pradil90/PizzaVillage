<?php

extract ( $_POST );
date_default_timezone_set('UTC');
$Username=$_COOKIE["Username"];

mysql_connect("mysql","sqldb","Abiabi@123") or die(mysql_error()); 
mysql_select_db("pizzaStore") or die(mysql_error()); 
#mysql_query("INSERT INTO dashboard_data(Username, Crust, Size, Cheese, Sauce, Topping, Times) VALUES('Alijjce', 'hh' , '12', 'savv', 'vdS', 'DVSv', 'fffme')");


if($Crust){

/* Use tab and newline as tokenizing characters as well  */
	$tok = strtok($Crust, "#");

    $Crust=$tok;
    $tok = strtok("#");
    $Size = $tok;

}

// $Username="Ivan1";
$dated=date("F j, Y, g:i a"); 
$Cheese="";
 $Sauce="";
 $Topping="";
 $Times="";
 $Topping_Veg="";
 $Topping_Non="";



$err=mysql_query("INSERT INTO dashboard_data(Username, Crust, Size, Cheese, Sauce, Topping_Veg, Topping_Non, Times) VALUES('$Username', '$Crust' , '$Size', '$Cheese', '$Sauce', '$Topping_Veg', '$Topping_Non', '$dated')") or die(mysql_error());

$cookie_value = "dated";
   setcookie($cookie_value, $dated, time()+3600, "/","", 0);

header("Location:http://photofire.net/PizzaVillage/index_cheese.php");


?>
