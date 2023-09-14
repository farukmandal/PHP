

<?php 
	$conn = mysqli_connect('localhost','root','','news');
	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$imgname = $_FILES['imgname']['name'];
		$tmp_imgname = $_FILES['imgname']['tmp_name'];
		$uploc 	= "images/".$imgname;

		$sql = "INSERT INTO admin(username,password,imgname) VALUES('$username','$password','$imgname')";
		$query = mysqli_query($conn,$sql);
		if($query == TRUE){
			move_uploaded_file($tmp_imgname,$uploc);
			echo "User Add Successfully";
		}else{
			echo "User Not Added";
		}
	}


 ?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Add</title>
</head>
<body>
	<div class="container">
		<h2>User Add</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<caption>User Name</caption>
			<input type="text" name="username" placeholder="Enter Your User Name"><br><br>
			<caption>User Password</caption>
			<input type="password" name="password" placeholder="Enter Your User Password"><br><br>
			<caption>User Image</caption>
			<input type="file" name="imgname"><br><br>
			<input type="submit" name="submit" value="Add User">
		</form>
	</div>
</body>
</html>