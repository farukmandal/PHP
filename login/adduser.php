
<?php 
	$conn = mysqli_connect('localhost','root','','login');

	if(isset($_REQUEST['submit'])){
		$email	= mysqli_real_escape_string($conn,$_REQUEST['email']);
		$username = mysqli_real_escape_string($conn,$_REQUEST['username']);
		$password = mysqli_real_escape_string($conn,md5($_REQUEST['password']));
		$sql 	="INSERT INTO user(email,username,password) VALUES('$email','$username','$password')";
		$query =mysqli_query($conn,$sql);
		if($query){
			header('location:dashboard.php');
		}else{
			echo "Added Faild";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
	<title>Add User</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2 class="text-success">Add User</h2>
				<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="POST">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				   
				  </div>
				  <div class="form-group">
				    <label for="exampleUserName">user name</label>
				    <input type="text" name="username" class="form-control" id="exampleUserName" aria-describedby="emailHelp">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
				     <small id="exampleInputPassword1" class="form-text text-muted">We'll never share your Password with anyone else.</small>
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>