<?php 


	$conn = mysqli_connect('localhost','root','','news');
	$sql ="SELECT * FROM news_tbl";
	$query = mysqli_query($conn,$sql);
	
	

	

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<style>
		.container{
			width: 1138px;
			border: 1px solid black;
			margin: 0px auto;
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
		

		<?php 

		while($data  = mysqli_fetch_assoc($query)){
		$id		= $data['id'];
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
	<?php } ?>
	</div>
</body>
</html>
