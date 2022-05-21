<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'retrocafe');

$name = $_POST['name'];
$phoneno = $_POST['phoneno'];
$date = $_POST['date'];
$time = $_POST['time'];
$person = $_POST['person'];

$query = "insert into tablebooking (name, phoneno, date, time, person)
values('$name','$phoneno','$date','$time','$person')";

mysqli_query($con,$query);

header('location:http://localhost/web%20design/confirmation.html');

?>