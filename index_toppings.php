<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>Pizza Village</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />

<script type="text/javascript" src="style/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/retina.js"></script>
<script type="text/javascript" src="style/js/selectnav.js"></script>
<script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>

<script type="text/javascript" src="style/js/jquery.backstretch.min.js"></script>


<script type="text/javascript">
 
	$.backstretch("style/images/Supreme_pizza.jpg");
</script>
<!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
<script>

function addRow1() {

if(document.getElementById('id1').checked){	
    var span = document.createElement('span');

    span.id = 'row1';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display1(this.value)" type ="range" min ="0" max="100" step ="5" value="0"/>';

     document.getElementById('content1').appendChild(span);
 }else{
 	var myNode = document.getElementById('row1');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display1(newValue){

	document.getElementById("s1").innerHTML=newValue+"%";

}

function addRow2() {

if(document.getElementById('id2').checked){	
    var span = document.createElement('span');

    span.id = 'row2';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display2(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content2').appendChild(span);
 }else{
 	var myNode = document.getElementById('row2');
	
    myNode.parentNode.removeChild(myNode);


 }
}
function display2(newValue){

    document.getElementById("s2").innerHTML=newValue+"%";

}

function addRow3() {

if(document.getElementById('id3').checked){	
    var span = document.createElement('span');

    span.id = 'row3';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display3(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content3').appendChild(span);
 }else{
 	var myNode = document.getElementById('row3');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display3(newValue){

    document.getElementById("s3").innerHTML=newValue+"%";

}

function addRow4() {

if(document.getElementById('id4').checked){	
    var span = document.createElement('span');

    span.id = 'row4';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display4(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content4').appendChild(span);
 }else{
 	var myNode = document.getElementById('row4');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display4(newValue){

    document.getElementById("s4").innerHTML=newValue+"%";

}

function addRow5() {

if(document.getElementById('id5').checked){	
    var span = document.createElement('span');

    span.id = 'row5';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display5(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content5').appendChild(span);
 }else{
 	var myNode = document.getElementById('row5');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display5(newValue){

    document.getElementById("s5").innerHTML=newValue+"%";

}

function addRow6() {

if(document.getElementById('id6').checked){	
    var span = document.createElement('span');

    span.id = 'row6';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display6(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content6').appendChild(span);
 }else{
 	var myNode = document.getElementById('row6');
	
    myNode.parentNode.removeChild(myNode);


 }
}
function display6(newValue){

    document.getElementById("s6").innerHTML=newValue+"%";

}

function addRow7() {

if(document.getElementById('id7').checked){	
    var span = document.createElement('span');

    span.id = 'row7';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display7(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content7').appendChild(span);
 }else{
 	var myNode = document.getElementById('row7');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display7(newValue){

    document.getElementById("s7").innerHTML=newValue+"%";

}
function addRow8() {

if(document.getElementById('id8').checked){	
    var span = document.createElement('span');

    span.id = 'row8';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display8(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content8').appendChild(span);
 }else{
 	var myNode = document.getElementById('row8');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display8(newValue){

    document.getElementById("s8").innerHTML=newValue+"%";

}

function addRow9() {

if(document.getElementById('id9').checked){	
    var span = document.createElement('span');

    span.id = 'row9';

    span.innerHTML = '<input id="slider2" id="ids" name ="Meat[]" onchange="display9(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content9').appendChild(span);
 }else{
 	var myNode = document.getElementById('row9');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display9(newValue){

    document.getElementById("s9").innerHTML=newValue+"%";

}

function addRow10() {

if(document.getElementById('id10').checked){	
    var span = document.createElement('span');

    span.id = 'row10';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display10(this.value)" type ="range" min ="0" max="100" step ="0" value ="0"/>';

     document.getElementById('content10').appendChild(span);
 }else{
 	var myNode = document.getElementById('row10');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display10(newValue){

    document.getElementById("s10").innerHTML=newValue+"%";

}
function addRow11() {

if(document.getElementById('id11').checked){	
    var span = document.createElement('span');

    span.id = 'row11';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display11(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content11').appendChild(span);
 }else{
 	var myNode = document.getElementById('row11');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display11(newValue){

    document.getElementById("s11").innerHTML=newValue+"%";

}

function addRow12() {

if(document.getElementById('id12').checked){	
    var span = document.createElement('span');

    span.id = 'row12';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display12(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content12').appendChild(span);
 }else{
 	var myNode = document.getElementById('row12');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display12(newValue){

    document.getElementById("s12").innerHTML=newValue+"%";

}

function addRow13() {

if(document.getElementById('id13').checked){	
    var span = document.createElement('span');

    span.id = 'row13';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display13(this.value)" type ="range" min ="0" max="100" step ="0" value ="0"/>';

     document.getElementById('content13').appendChild(span);
 }else{
 	var myNode = document.getElementById('row13');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display13(newValue){

    document.getElementById("s13").innerHTML=newValue+"%";

}
function addRow14() {

if(document.getElementById('id14').checked){	
    var span = document.createElement('span');

    span.id = 'row14';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display14(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content14').appendChild(span);
 }else{
 	var myNode = document.getElementById('row14');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display14(newValue){

    document.getElementById("s14").innerHTML=newValue+"%";

}

function addRow15() {

if(document.getElementById('id15').checked){	
    var span = document.createElement('span');

    span.id = 'row15';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display15(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content15').appendChild(span);
 }else{
 	var myNode = document.getElementById('row15');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display15(newValue){

    document.getElementById("s15").innerHTML=newValue+"%";

}

function addRow16() {

if(document.getElementById('id16').checked){	
    var span = document.createElement('span');

    span.id = 'row16';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display16(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content16').appendChild(span);
 }else{
 	var myNode = document.getElementById('row16');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display16(newValue){

    document.getElementById("s16").innerHTML=newValue+"%";

}

function addRow17() {

if(document.getElementById('id17').checked){	
    var span = document.createElement('span');

    span.id = 'row17';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display17(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content17').appendChild(span);
 }else{
 	var myNode = document.getElementById('row17');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display17(newValue){

    document.getElementById("s17").innerHTML=newValue+"%";

}

function addRow18() {

if(document.getElementById('id18').checked){	
    var span = document.createElement('span');

    span.id = 'row18';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display18(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content18').appendChild(span);
 }else{
 	var myNode = document.getElementById('row18');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display18(newValue){

    document.getElementById("s18").innerHTML=newValue+"%";

}
function addRow19() {

if(document.getElementById('id19').checked){	
    var span = document.createElement('span');

    span.id = 'row19';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display19(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content19').appendChild(span);
 }else{
 	var myNode = document.getElementById('row19');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display19(newValue){

    document.getElementById("s19").innerHTML=newValue+"%";

}

function addRow20() {

if(document.getElementById('id20').checked){	
    var span = document.createElement('span');

    span.id = 'row20';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display20(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content20').appendChild(span);
 }else{
 	var myNode = document.getElementById('row20');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display20(newValue){

    document.getElementById("s20").innerHTML=newValue+"%";

}

function addRow21() {

if(document.getElementById('id21').checked){	
    var span = document.createElement('span');

    span.id = 'row21';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display21(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content21').appendChild(span);
 }else{
 	var myNode = document.getElementById('row21');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display21(newValue){

    document.getElementById("s21").innerHTML=newValue+"%";

}

function addRow22() {

if(document.getElementById('id22').checked){	
    var span = document.createElement('span');

    span.id = 'row22';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display22(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content22').appendChild(span);
 }else{
 	var myNode = document.getElementById('row22');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display22(newValue){

    document.getElementById("s22").innerHTML=newValue+"%";

}
function addRow23() {

if(document.getElementById('id23').checked){	
    var span = document.createElement('span');

    span.id = 'row23';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display23(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content23').appendChild(span);
 }else{
 	var myNode = document.getElementById('row23');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display23(newValue){

    document.getElementById("s23").innerHTML=newValue+"%";

}

function addRow24() {

if(document.getElementById('id24').checked){	
    var span = document.createElement('span');

    span.id = 'row24';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display24(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content24').appendChild(span);
 }else{
 	var myNode = document.getElementById('row24');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display24(newValue){

    document.getElementById("s24").innerHTML=newValue+"%";

}


function addRow25() {

if(document.getElementById('id25').checked){	
    var span = document.createElement('span');

    span.id = 'row25';

    span.innerHTML = '<input id="slider2" id="ids" name ="NoMeat[]" onchange="display25(this.value)" type ="range" min ="0" max="100" step ="5" value ="0"/>';

     document.getElementById('content25').appendChild(span);
 }else{
 	var myNode = document.getElementById('row25');
	
    myNode.parentNode.removeChild(myNode);


 }
}

function display25(newValue){

    document.getElementById("s25").innerHTML=newValue+"%";

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
					<li class="active"><a href="index_topping.php">TOPPING</a></li>
					<li><a href="Dashboard.php">DASHBOARD</a></li>
						
					
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

<style>
/* Make it a marquee */
marquee {
    /*width: 450px;*/
    margin: 0 auto;
    overflow: hidden;
    white-space: nowrap;
    box-sizing: border-box;
    animation: marquee 50s linear infinite;
    font-style-color:#FFFF00;
    color: #FFFF00;
}
/*marquee {
    color: #FFFF00;
}*/


</style>

<marquee>Select your toppings using our quantity sliders</marquee>

<form name="login-form" class="login-form" action="updatetopping.php" method="post">

<!--  -->
<h2 class="title">CHOOSE TOPPINGS</h2>
<!-- Begin Blog Grid -->
<div class="blog-wrap">
	<!-- Begin Blog -->
	<div class="blog-grid">
			
<div class="post format-standard box"> 

			<h2 class="title">CHOOSE MEATS</h2>



	<input type="checkbox" name="Meat[]" id="id1" value="Pepperoni" onclick="addRow1()">Pepperoni<span id="content1"> </span><span id="s1"></span><br>
	<input type="checkbox" name="Meat[]" id="id2" value="Italian Sausage" onchange="addRow2()">Italian Sausage<span id="content2"></span><span id="s2"></span><br>
	<input type="checkbox" name="Meat[]" id="id3" value="Sliced Italian Sausage" onchange="addRow3()">Sliced Italian Sausage<span id="content3"></span><span id="s3"></span><br>
	<input type="checkbox" name="Meat[]" id="id4" value="Beef" onclick="addRow4()">Beef<span id="content4"> </span><span id="s4"></span><br>
	<input type="checkbox" name="Meat[]" id="id5" value="Philly Steak" onclick="addRow5()">Philly Steak<span id="content5"> </span><span id="s5"></span><br>
	<input type="checkbox" name="Meat[]" id="id6" value="Ham" onclick="addRow6()">Ham<span id="content6"> </span><span id="s6"></span><br>
	<input type="checkbox" name="Meat[]" id="id7" value="Bacom" onclick="addRow7()">Bacon<span id="content7"> </span><span id="s7"></span><br>
	<input type="checkbox" name="Meat[]" id="id8" value="Salami" onclick="addRow8()">Salami<span id="content8"> </span><span id="s8"></span><br>
	<input type="checkbox" name="Meat[]" id="id9" value="Premium Chicken" onclick="addRow9()">Premium Chicken<span id="content9"> </span><span id="s9"></span><br>
			
		</div>

		<div class="post format-standard box"> 

			<h2 class="title">CHOOSE NON-MEATS</h2>
	<input type="checkbox" name="NoMeat[]" id="id10" value="Cheddar Cheese" onclick="addRow10()">Cheddar Cheese <span id="content10"></span><span id="s10"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id11" value="Feta Cheese" onclick="addRow11()">Feta Cheese <span id="content11"></span><span id="s11"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id12" value="Shredded Parmesan Asiago" onclick="addRow12()">Shredded Parmesan Asiago <span id="content12"></span><span id="s12"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id13" value="Shredded Provolone Cheese" onclick="addRow13()">Shredded Provolone Cheese <span id="content13"></span><span id="s13"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id14" value="Banana Peppers" onclick="addRow14()">Banana Peppers <span id="content14"></span><span id="s14"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id15" value="Black Olives" onclick="addRow15()">Black Olives <span id="content15"></span><span id="s15"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id16" value="Garlic" onclick="addRow16()">Garlic <span id="content16"></span><span id="s16"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id17" value="Green Peppers" onclick="addRow17()">Green Peppers <span id="content17"></span><span id="s17"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id18" value="Jalepeno Peppers" onclick="addRow18()">Jalepeno Peppers <span id="content18"></span><span id="s18"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id19" value="Mushrooms" onclick="addRow19()">Mushrooms <span id="content19"></span><span id="s19"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id20" value="Pineapple" onclick="addRow20()">Pineapple <span id="content20"></span><span id="s20"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id21" value="Onions" onclick="addRow21()">Onions <span id="content21"></span><span id="s21"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id22" value="Roasted Red Peppers" onclick="addRow22()">Roasted Red Peppers <span id="content22"></span><span id="s22"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id23" value="Spinach" onclick="addRow23()">Spinach <span id="content23"></span><span id="s23"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id24" value="Diced Tomatoes" onclick="addRow24()">Diced Tomatoes <span id="content24"></span><span id="s24"></span><br>
	<input type="checkbox" name="NoMeat[]" id="id25" value="Hot Sause" onclick="addRow25()">Hot Sause <span id="content25"></span><span id="s25"></span>

	
	
		
	</div> 	
 	
 	</div>

 	 	</div>
 <center> 	
	<input type="submit"  id="register"  name="submit" value="Build"  />
	<button value="Cancel">Cancel</button>
</center>

</form>
	<!-- End Blog -->
</div>
<!-- End Blog Grid -->

<!-- End Wrapper -->

<!-- Begin Footer -->
<div class="footer-wrapper">
<div id="footer" class="four">
	
			
	
	</div> -->
	<center><h1>Make your Own Pizza</h1></center>
</div>
<div class="site-generator-wrapper">
	<div class="site-generator">Copyright CMPE 280. Design by <a href="">Pradeep Ivan Bosco and Alice George</a>. All rights reserved.</div>
</div>
<!-- End Footer --> 
<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>