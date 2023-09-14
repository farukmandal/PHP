

<?php 
session_start();
	$conn = mysqli_connect('localhost','root','','login');

	if(isset($_REQUEST['submit'])){
		$username = mysqli_real_escape_string($conn,$_REQUEST['username']);
		$password = mysqli_real_escape_string($conn,md5($_REQUEST['password']));
		$sql 	="SELECT * FROM user WHERE username='{$username}' && password='{$password}'";
		$query =mysqli_query($conn,$sql);
		$count = mysqli_num_rows($query);
		if($count){
			$_SESSION['username']=$username;
			header('location:dashboard.php');
		}else{
			echo "login Faild";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
	<title> User Login</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="text-success">User Login</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST">
				  <div class="form-group">
				    <label for="exampleUserName">user name</label>
				    <input type="text" name="username" class="form-control" id="exampleUserName" aria-describedby="emailHelp">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
				     <small id="exampleInputPassword1" class="form-text text-muted">We'll never share your Password with anyone else.</small>
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
