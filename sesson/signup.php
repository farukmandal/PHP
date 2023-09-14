

<?php 
	
	$conn 		= mysqli_connect('localhost','root','','ff');

	if(isset($_REQUEST['submit'])){
		$fname		= $_REQUEST['fname'];
		$uname		= $_REQUEST['uname'];
		$email		= $_REQUEST['email'];
		$password	= $_REQUEST['password'];
		$re_password= $_REQUEST['re-password'];
		$country	= $_REQUEST['country'];
		$gender		= $_REQUEST['gender'];
		$imgname	= $_FILES['imgname']['name'];
		$tmpname	= $_FILES['imgname']['tmp_name'];

		$uploc 		="images/".$imgname;
		if($password == $re_password){

			$sql 		="INSERT INTO ff(fname,username,email,password,gender,country,imgname) 
					 VALUES('$fname','$uname','$email','$password','gender','$country','$imgname')";
			$query 		=mysqli_query($conn,$sql);
			
			if($query == TRUE){
				move_uploaded_file($tmpname,$uploc);
				echo "Registration Successfully";
				header('location:login.php');
			}else{
				echo "Not Registration";
			}


					 }
					 else{
					 	echo "Re Enter Password Is Not Match";
					 }

		
	}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Register Form</title>
</head>
<body>
	<h2>user Register Form</h2>
	<form action="" method="POST" enctype="multipart/form-data">
		<span>Full Name : </span>
		<input type="text" name="fname" placeholder="Enter Your Full Name"><br><br>
		<span>User Name : </span>
		<input type="text" name="uname" placeholder="Enter a unic UserName"><br><br>
		<span>Email : </span>
		<input type="email" name="email" placeholder="Enter Your Email"><br><br>
		<span>Password : </span>
		<input type="password" name="password" placeholder="Enter Your Password"><br><br>
		<span>Re Enter Password : </span>
		<input type="password" name="re-password" placeholder="Re-Enter Your Password"><br><br>
		<span>Select your Country</span>
		<select name="country">
			<option>Select Your Option</option>
			<option>Bangladesh</option>
			<option>India</option>
			<option>USA</option>
			<option>Pakistan</option>
		</select><br><br>
		<span>Gender</span>
		<input type="radio" value="male" name="gender">Male
		<input type="radio" value="female" name="gender">Female<br><br>
		<input type="file" name="imgname"><br><br>
		<input type="submit" name="submit" value="Register">
		<a href="Login"></a>
	</form>
</body>
</html>