<?php   

$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not connected";
}

if(!mysqli_select_db($con,'solar_system'))
{
	echo "not database";
}
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone'];
$message=$_POST['msg'];

$sql="INSERT INTO Feedback(name,email,phone,msg)
       VALUES('$name','$email','$number','$message')";

       if(!mysqli_query($con,$sql))
       {
       	echo "not inserted";
       }

       else{
       	echo "inserted";
       }

       header("refresh:5; url=feedback1.php");


require  'feedback1.php';
$query  ="SELECT username,email FROM feedback";
if($query_run = mysqli_query($conn,$query))
{
       while ($query_row = mysqli_fetch_assoc($query_run))
       {
       
              $mes=$query_row['msg'];
                echo $mes;
       }
}
 
else{
       echo "Connection Success";
}



?>