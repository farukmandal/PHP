<?php 
	session_start();
	$conn =mysqli_connect('localhost','root','','news');
	if(isset($_REQUEST['submit'])){

		$title= $_REQUEST['tittle'];
		$description= $_REQUEST['description'];
		$category= $_REQUEST['category'];
		$publisher= $_REQUEST['publisher'];
		$imgname= $_FILES['imgname']['name'];
		$tmp_imgname= $_FILES['imgname']['tmp_name'];
		$uploc ="images/".$imgname;

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$sql ="UPDATE news_tbl SET title='$title' , description='$description',category='$category', publisher='$publisher', imgname='$imgname' WHERE id ='$id' ";
		$query = mysqli_query($conn,$sql);
		if($query==TRUE){
			move_uploaded_file($tmp_imgname,$uploc);
			header('location: admin.php');

		}else{
			echo "Update Not Success";
		}



	}

}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Update Form</title>
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
			color: white;
			background-color:red;
			width: 60%;
			padding: 10px;
			cursor: pointer;
			border: none;
			border-radius: 6px;
		}

	</style>
 </head>
 <body>
 	<div class="container">
 		<h2>Update Form</h2>
 		<form action="" method="POST" enctype="multipart/form-data" class="form_style">
			<caption>Update your Title</caption>
			<input type="text" name="title" placeholder="Update A Title"><br><br>
			<caption>Update your Description</caption>
			<textarea name="description">Type Your Description here...</textarea><br><br>
			<caption>Update your Category Name</caption>
			<input type="text" name="category" placeholder="Update Category Name"><br><br>
			<caption>Update your Publisher Name</caption>
			<input type="text" name="publisher" placeholder="Update Publisher Name"><br><br>
			<caption>Choice Your Picture</caption>
			<input  type="file" name="imgname"><br><br>
			<input class="btn" type="submit" name="submit" value="Update Post">
		</form>

 	</div>
 </body>
 </html>