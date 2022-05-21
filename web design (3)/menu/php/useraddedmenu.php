<?php
echo '<p> Please Wait.... </p>';
$con = mysqli_connect('localhost','root');

if($con){
	echo '<b>***Order Confirmed***</b>';
}else{
	echo "No connection";
}

mysqli_select_db($con,'retrocafe');

$name =$_POST['name'];
$email =$_POST['email'];
$menu =$_POST['menu'];

$query= " insert into useraddedmenu (name,email,menu) values ('$name','$email','$menu') ";
mysqli_query($con,$query);
header('location:http://localhost/web%20design%20(3)/menu/confirmation.html');
?> 