<?php 
	session_start();
	$conn = mysqli_connect('localhost','root','','news');
	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		$sql = "SELECT * FROM admin WHERE username='$username' && password='$password' ";
		$query= mysqli_query($conn, $sql);
		$data = mysqli_num_rows($query);
		if($data=TRUE){
			$_SESSION['username']=$username;
			header('location: admin.php');
		}else{
			echo "Login Failed";
		}

	}



 ?>










<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login From</title>
</head>
<body>
	<div class="container">
		<h2>Admin Login</h2>
		<form>
			<caption>User Name</caption>
			<input type="text" name="username" placeholder="User Name"><br><br>
			<caption>User Name</caption>
			<input type="password" name="password" placeholder="User Password"><br><br>
			<input type="submit" name="submit" value="Login">
		</form>
	</div>

</body>
</html>