
<?php 
	

	$conn = mysqli_connect('localhost','root','','upload');


if(isset($_POST['submit'])){
	 $firstname = $_POST['fname'];
	 $lastname  = $_POST['lname'];
	 $email     = $_POST['email'];
//file upload
	 $imagename = $_FILES['image']['name'];
	 $tmpname   = $_FILES['image']['tmp_name'];
	 $uplod     = "img/".$imagename;

	$sql = "INSERT INTO information(firstname,lastname,email,images)  
		VALUES('$firstname','$lastname','$email','$imagename')";

	if(mysqli_query($conn, $sql) == TRUE && move_uploaded_file($tmpname, $uplod)){
		
		echo "Data Inserted";
	}
	else{
		echo "Data Not insert";
	}

}



 ?>




<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				

			</div>

			<div class="col-md-8">
				<h2 align="center ">Student Information </h2>
				

					
							<?php 
								$sql = "SELECT * FROM information";
								$query = mysqli_query($conn, $sql);

								echo "<table border='1px solid black'>";
								echo "<tr>
											<th>Id</th>
											<th>Picture</th>
											<th>Name</th>
											<th>Email</th>
										</tr>";
								while ($data = mysqli_fetch_assoc($query)){

								$idname = $data['id'];
								$firstname = $data['firstname'];
								$lastname = $data['lastname'];
								$email = $data['email'];

								
								echo "<tr>
								<td>$idname </td>
								<td> $firstname</td>
								<td> $lastname</td>
								<td>$email</td>
								<tr>";
								
								}

							 ?>
						
			

			</div>

			<div class="col-md-2">
				

			</div>
			
		</div>
	</div>
</body>
</html>