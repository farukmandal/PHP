

<?php
	session_start();
	$conn 		= mysqli_connect('localhost','root','','ff');
	//$sql 		= "SELECT * FROM ff";
	//$query		= mysqli_query($conn,$sql);

	//$data		= mysqli_fetch_assoc($query);
	//	$fname 	 = $data['fname'];
	//	$imgname = $data['imgname'];
	//	if(isset($_REQUEST)){

	//	}
		if($_SESSION['username'] == TRUE){
				
			echo "Welcome to ".$_SESSION['username'];

			echo '<br>';
			echo '<a href="logout.php">Logout</a>';
		}else{
			header('location: login.php');
		}
		
	

?>

<!--

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your Login Successfully</title>
</head>
<body>
	<h2>Hello <?php echo $fname; ?> </h2>
	<?php echo"<img width='50px' height='50px' border-redius='50%' src='images/$imgname' >"; ?>
	
	<br> 

</body>
</html>
-->
<form>
	<input type="text" placeholder="Enter" name="">
</form>