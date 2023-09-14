<?php 
	session_start();
	$conn =mysqli_connect('localhost','root','','news');
	if(isset($_GET['id'])){
		$id = $_GET['id'];


		$sql ="DELETE FROM news_tbl WHERE id='$id'";
		$query = mysqli_query($conn,$sql);
		if($query== TRUE){
			header('location: admin.php');
		}else{
			echo "Data Not Delete";
		}
	}



 ?>