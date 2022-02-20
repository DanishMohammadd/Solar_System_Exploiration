
<?php

session_start();
header('location:login (2).php');

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}
else{
	echo"no connection";
}

mysqli_select_db($con, 'solar_system');

$name = $_POST['user'];
$pass =$_POST['password'];


$q = " select * from signin where name ='$name' && password = md5('$pass') ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num ==1){
	echo" duplicate data";
}
else{
	$qy= " insert into signin(name, password) values ('$name',md5('$pass'))";

	mysqli_query($con, $qy);
}

 ?>