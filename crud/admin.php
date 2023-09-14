<?php 

	session_start();
	if($_SESSION['username']){
		$username = $_SESSION['username'];

	$conn = mysqli_connect('localhost','root','','news');
	$sql ="SELECT * FROM news_tbl";
	$query = mysqli_query($conn,$sql);
	
	

	
}else{
		header('location: login.php');
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<style>
		.container{
			width: 1138px;
			margin: 0px auto;
		}
		.container a{
			padding: 10px 20px;
			background-color: blue;
			color: #fff;
			text-decoration: none;
		}
		.action_btn{
			display: block;
			margin: 20px auto;
		}

		.ad_btn{
			text-align: center;
			background-color: blue;
			color: #fff;
			padding: 10px 20px;
			margin: 10px;
			text-decoration: none;
			cursor: pointer;
		}
		.up_btn{
			text-align: center;
			background-color: green;
			color: #fff;
			padding: 10px 20px;
			margin: 10px;
			text-decoration: none;
			cursor: pointer;
		}
		.de_btn{
			text-align: center;
			background-color: red;
			color: #fff;
			padding: 10px 20px;
			margin: 10px;
			text-decoration: none;
			cursor: pointer;
		}
		.container h3{
			margin-top: 30px;
			text-align: center;
			color: red;

		}
		.container img{
			width: 100%;
			height: 60vh;
		}
		.container p{
			margin: 20px;
			padding: 20px;
			color: blue;
		}
		.container .pub{
			color: green;
			text-align: left;
			padding: 20px;
			margin: 20px;
		}
		.container .cat{
			color: green;
			text-align: center;
			padding: 20px;
			margin-left: 20%;
		}
		.container .tim{
			color: green;
			text-align: right;
			padding: 20px;
			margin-left: 20%;
		}
	</style>
</head>
<body>
	<div class="container">
		<a href="logout.php">Logout</a>
		

		<?php 

		while($data  = mysqli_fetch_assoc($query)){
		$id			= $data['id'];
		$title		= $data['title'];
		$description= $data['description'];
		$category 	= $data['category'];
		$publisher 	= $data['publisher'];
		$d_time		= $data['date_time'];
		$imgname 	= $data['imgname'];



		 ?>
		<h3><?php echo "Publisher :".$title ; ?></h3>
		<?php echo "<img src='images/$imgname'>" ;?>
		<p><?php echo $description; ?></p>
		<span class="pub"><?php echo "Publisher :".$publisher ; ?></span>
		<span class="cat"><?php echo "Category :".$category ; ?></span>
		<span class="tim"><?php echo "Time :".$d_time ; ?></span>
		<span class="action_btn">
			<?php  echo "<a class='ad_btn' href='add.php'>Add</a>"; ?>
			<?php  echo "<a class='up_btn' href='update.php?id=$id'>Update</a>"; ?>
			<?php  echo "<a class='de_btn' href='delete.php?id=$id'>Delete</a>"; ?>
	<?php } ?>
	
	</div>
</body>
</html>
