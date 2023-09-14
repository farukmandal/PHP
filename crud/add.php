


<?php 

	$conn    = mysqli_connect('localhost','root','','news');
	if(isset($_REQUEST['submit'])){
		$title 			=$_POST['title'];
		$description 	=$_POST['description'];
		$category 		=$_POST['category'];
		$publisher 		=$_POST['publisher'];
		$imgname 		=$_FILES['imgname']['name'];
		$tmp_imgname 	=$_FILES['imgname']['tmp_name'];

		$uploc 			="images/".$imgname;

		$sql 			="INSERT INTO news_tbl(title,description,category,publisher,imgname) 				  VALUES('$title','$description','$category','$publisher','$imgname')";
		$query 			= mysqli_query($conn,$sql);
		if($query==TRUE){
			move_uploaded_file($tmp_imgname,$uploc);
			header('location: index.php');
		}else{
			echo "Post Not Success";
		}
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add News</title>
	<style>
		
		h2{
			text-align: center;
		}
		.form_style{
			text-align: center;
			width: 60%;
			margin: 0px auto;
		}
		.form_style input,textarea{
			width: 100%;
			padding: 10px;
			margin: 10px;

		}
		.form_style .btn{
			color: red;
			background-color: green;
			width: 60%;
			padding: 10px;
			cursor: pointer;
			border: none;
		}

	</style>
</head>
<body> 
	<div class="container">	
		<h2>Add New Post News</h2>
		<form action="" method="POST" enctype="multipart/form-data" class="form_style">
			<caption>Enter your Title</caption>
			<input type="text" name="title" placeholder="Enter A Title"><br><br>
			<caption>Enter your Description</caption>
			<textarea name="description">Type Your Description here...</textarea><br><br>
			<caption>Enter your Category Name</caption>
			<input type="text" name="category" placeholder="Add Category Name"><br><br>
			<caption>Enter your Publisher Name</caption>
			<input type="text" name="publisher" placeholder="Enter Publisher Name"><br><br>
			<caption>Choice Your Picture</caption>
			<input  type="file" name="imgname"><br><br>
			<input class="btn" type="submit" name="submit" value="Add Post">
		</form>
	</div>
</body>
</html>