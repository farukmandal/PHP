


 <!DOCTYPE html>
<html>
<head>
	<title>file upload</title>
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					
				</div>
				<div class="col-md-6">
					<form action="view.php" method="POST" encrept="form/data>
						<h2 class="color-white">Data Upload Form</h2>
						<label>First Name : </label>
						<input type="text" class="mt-2 p-2 " name="fname" placeholder="Enter Your First Name" required=""><br/>
						<label>Last Name : </label>
						<input type="text" class="mt-2 p-2 " name="lname" placeholder="Enter Your Last Name" required=""><br/>
						<label>Email : </label>
						<input type="email" class="mt-2 p-2 " name="email" placeholder="Enter Your Email " required=""><br/>
						<input type="file" class="mt-2 p-2 name="image" required=""><br>
						<input type="submit" class="mt-2 pr-4 pl-4 btn btn-success" value="Submit" name="submit">
					</form>
					
				</div>
				<div class="col-md-3">
					
				</div>
			</div>

		</div>
	</body>
</html>