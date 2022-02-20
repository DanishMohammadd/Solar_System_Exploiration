<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">-->
	
</head>
<body style=" background-image: url(images/m6.jpg") >
	

	

	
	<div class="container">
		<div class="row">

			<div class="col-lg-6">

				<h1 style="color: orange"> Login Form </h1>

				<form action="validation.php" method="post">

					<div class="form-group">
						<label><h3 style="color: red"> username </h3></label>
						<input type="text" name="user" class="form-control">
						
					</div>

					<div class="form-group">
						<label><h3 style="color: red"> Password </h3></label>
						<input type="Password" name="password" class="form-control">
					</div>
					
					<button type="submit" class="btn btn-primary"> Login </button>
				</form>
			</div>
				
				<div class="col-lg-6">
				<h1 style="color: orange"> Signin Form </h1>

				<form action="registrationpage.php" method="post">

					<div class="form-group">
						<label><h3 style="color: red"> username </h3></label>
						<input type="text" name="user" class="form-control">
						
					</div>
					<div class="form-group">
						<label><h3 style="color: red"> Password </h3></label>
						<input type="Password" name="password" class="form-control">
					</div>
					
					<button type="submit" class="btn btn-primary"> Signin </button>
				</form>
			</div>
				
		

			
		</div>
		
	</div>

</body>
</html>