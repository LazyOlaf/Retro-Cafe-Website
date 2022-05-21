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
$number =$_POST['number'];
$food=$_POST['fooditem'];
$addon =$_POST['addon'];
$nooforders =$_POST['nooforders'];
$datetimelocal =$_POST['datetimelocal'];
$address =$_POST['address'];
$advice =$_POST['advice'];

$query= " insert into orderinfo (name,number,orderedfood,addon,quantity,date,address,advice) values ('$name','$number','$food','$addon','$nooforders','$datetimelocal','$address','$advice') ";
mysqli_query($con,$query);

if(isset($_POST["card"]))
{
  header('location:http://localhost/web%20design%20(5)/payment/index.html');
}

else
{
  $type = "cod";
  $query1= "insert into payment (type) values ('$type')";
  mysqli_query($con,$query1);
  header('location:http://localhost/web%20design%20(2)/order/orderconfirmation.html');
}
?> 