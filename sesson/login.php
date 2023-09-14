
<?php 
	// Sesson Start
	session_start();
	//user login data
	if(isset($_REQUEST['submit'])){
	$username			= $_REQUEST['uname'];
	$userpassword		= $_REQUEST['user_password'];
	
	// Database Data
	$conn 		= mysqli_connect('localhost','root','','ff');
	$sql 		="SELECT * FROM ff WHERE username ='$username' && password = '$userpassword'";
	$query 		=mysqli_query($conn,$sql);

	$data		=mysqli_num_rows($query);
	if($data){
		$_SESSION['username']=$username;
		header('location: index.php');
	}else{
		echo "Login Failed !";
	}


}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<h2>User Login Form</h2>
	<form action="" method="POST" >
		<span>User Name</span>
		<input type="text" name="uname" placeholder="Enter Your User Name"><br><br>
		<span>Password</span>
		<input type="password" name="user_password" placeholder="Enter Your Password"><br><br>
		<input type="submit" name="submit" value="Login">
		<a href="signup.php">Signup</a>
	</form>
</body>
</html>