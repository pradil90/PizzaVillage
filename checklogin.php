<?php
extract ( $_POST );
$con=mysqli_connect("mysql","sqldb","Abiabi@123","pizzaStore");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$cookie_value = "Username";
   setcookie($cookie_value, $Username, time()+3600, "/","", 0);
   

// Check if username is already present
$result = mysqli_query($con,"SELECT Username FROM Login WHERE Username='$Username' AND Password='$password'");
if(mysqli_fetch_row($result))
{
mysqli_close($con);
flush();

header("Location:http://photofire.net/PizzaVillage/Login.php?Username=$Username");
//header("Location:http://christinajuliet.com/profile.php?team=$Team");
}
else
{
mysqli_close($con);
// echo "Invalid login!!!";
header("Location:http://photofire.net/PizzaVillage/index.php");
}
//mysqli_close($con);

?>





