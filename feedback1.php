<?php
require 'connect1.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>FEEDBACK FORM</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/Home.css">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">
		*{
			box-sizing: border-box;
			font-family: helvetica;
		}

		body{
			background-image: url("images/table.jpg");
			background-position: center;
			background-size: cover;
			background-repeat: 
			height: 100px;
			width: 100%;
		}
		.main{
			width: 400px;
			margin: 50px auto;
			border:5px solid #dc143c;
			border-radius: 10px;
			background-color: #fffaf0;
			box-shadow: 0px 0px 4px 7px black;
		}
		.info{
			width: 100%;
			padding: 8px;
			font-weight: bold;
			font-size: 35px;
			text-align: center;
			color: #fffaf0;
			text-shadow: 2px 2px 4px black;
		}
		.form-box{
			padding: 25px;
		}
		label{
			color: navy;
			font-size: 20px;
			text-shadow: 1px 1px 3px black;
		}
		.inp, #message-box{
			width: 100%;
			padding: 10px;
			margin-top: 3px;
			margin-bottom: 5px;
			border-radius: 5px;
			border:2px solid dc143c;
			font-weight: bold;
			border-left: 20px solid #dc143c;
			border-right: 20px solid #dc143c;
			color: purple;
		}
		.inp:focus , #message-box:focus{
			border:2px solid navy;
			border-left: 20px solid navy;
			border-right: 20px solid navy;
			outline: none;
			box-shadow: 2px 2px 4px black;

		}
		#message-box{
			height: 120px;
		}
		.sub-btn{
			margin: 4px auto;
			padding: 10px;
			border:none;
			font-size: 22px;
			width: 100%;
			color: #fffaf0;
			background-color:linear-gradient(#dc143c,skyblue);
			text-shadow: 2px 2px 3px black;
			box-shadow: 2px 2px 4px black;
			cursor: pointer;
			border-radius: 25px;

		}
		.sub-btn:hover{
			background:linear-gradient(steelblue,orange);
			transition: all ease-out 0.5s;
		}
		.blink{
			animation: colorchange 2s infinite;
		}
		@keyframes colorchange{
			0%{color: yellow}
			25%{color: blue}
			50%{color: purple}
			75%{color: limegreen}
			100%{color: #dc143c}
		}
		.info {
			text-decoration: underline;
		}



	</style>
</head>
<body>
		<div class="header">
		<div class="up">
		<h2 style="color: white;  border-radius: 45%;">Solar System Exploiration</h2>
    	</div>
		<div class="down">
			        <nav>
            
            <ul>
      
          <li><a href="Home.php" class="active"><font color="#b4eb0d"><i class="fa fa-home" aria-hidden="true"></i></font> HOME</a></li>
          <li><a href="login (2).php"><font color="#b4eb0d"><i class="fa fa-users" aria-hidden="true"></i></font> LOGIN</a></li>
          <li><a href="Gallery.php"><font color="#b4eb0d"><i class="fa fa-camera" aria-hidden="true"></i></font> GALLERY</a></li>
          <!--<li><a href="#"><font color="#b4eb0d"><i class="fa fa-commenting" aria-hidden="true"></i></font> BLOGS</a></li>-->
          <li><a href="feedback1.php"><font color="#b4eb0d"><i class="fa fa-usb" aria-hidden="true"></i></font> FEEDBACK</a></li>
           <li><a href="mission.php"><font color="#b4eb0d"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></font> MISSIONS</a></li>
         <!-- <li><a href="#"><font color="#b4eb0d"><i class="fa fa-phone-square" aria-hidden="true"></i></font> CONTACT US</a></li> -->
      
          </ul>
            
        </nav>
		</div>
		
	</div>
	<div class="main">
		<div class="info blink">FEEDBACK</div>
		<form class="form-box" action="db1.php" method="post">
			<label for="name">Name</label><br>
			<input type="text" name="name" class="inp" placeholder="Enter your name"><br>

			<label for="mail">Email</label><br>
			<input type="text" name="email" class="inp" placeholder="Enter your Email-id"><br>

			<label for="phone">Number</label><br>
			<input type="tel" name="phone" class="inp" placeholder="Enter your Phone No"><br>

			<label for="message">Message</label><br>
			<textarea type="text" name="msg" id="message-box" class="inp" placeholder="type your message here"></textarea><br>
			<input type="submit" name="submit" value="send" class="sub-btn" blink><br>
			
		</form>
	</div>
	
    <div class="connect" style="border:1px solid red;background-color: white; font-size: 25px;line-height: 15px; padding: 10px;">
<?php  
$query  ="SELECT msg FROM feedback";
if($query_run = mysqli_query($conn,$query))
{
	while ($query_row = mysqli_fetch_assoc($query_run))
	{
		
		$mes  =$query_row['msg'];

		  echo "<br>".$mes."<br>";
	}
}
 
else{
	echo "Connection Success";
}




?>
    	
    </div>
</body>
</html>