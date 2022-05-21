<?php
echo '<p> Please Wait.... </p>';
$con = mysqli_connect('localhost','root');

if($con){
	mysqli_select_db($con,'retrocafe');
	if(isset($_POST["chipi"]))
		$food="Chicken pizza";
	else if(isset($_POST["chibu"]))
		$food="Chicken burger";
	else if(isset($_POST["mapa"]))
		$food="Masala Paratha";
	else if(isset($_POST["iccr"]))
		$food="Ice cream";
	else if(isset($_POST["chobo"]))
		$food="Chocolate bowl";
	else if(isset($_POST["muff"]))
		$food="Muffin";
	else if(isset($_POST["frju"]))
		$food="Fruit juice";
	else if(isset($_POST["mixfr"]))
		$food="Mixed fruit";
	else if(isset($_POST["chino"]))
		$food="Chicken noodles";
	$query= " insert into useraddedmenu (name,email,menu) values ('$name','$email','$menu') ";
	mysqli_query($con,$query);
	header('location:http://localhost/web%20design%20(3)/menu/confirmation.html');
}else{
	echo "No connection";
}
?>
