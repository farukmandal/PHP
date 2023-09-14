<?php 
	session_start();
	if($_SESSION['username']){

	?>
 <!DOCTYPE html>
 <html>
	 <head>
	 	<meta charset="utf-8">
	 	<meta name="viewport" content="width=device-width, initial-scale=1">
	 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
	 	<title><?php echo $_SESSION['username']; ?></title>
	 </head>
	 <body>
		 <h2>well come</h2>
		 <a href="logout.php">logout</a>
		 <div class="container">
		 		<div class="row"> 
		 			<div class="col-md-2">
		 				<img src="images/" alt="logo">
		 			</div>
		 			<div class="col-md-6">
		 				<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary ">
							  <div class="container-fluid">
							    
							    <div class="collapse navbar-collapse" id="navbarNav">
							      <ul class="navbar-nav">
							        <li class="nav-item ">
							          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
							        </li>
							        <li class="nav-item">
							          <a class="nav-link text-white" href="#">Abouts</a>
							        </li>
							        <li class="nav-item">
							          <a class="nav-link text-white" href="#">Gallery</a>
							        </li>
							        <li class="nav-item">
							          <a class="nav-link text-white" href="#">Contact</a>
							        </li>
							        
							      </ul>
							    </div>
							  </div>
							</nav>
		 			</div>
		 			<div class="col-md-2"></div>
		 		</div>
		 </div>
	 </body>
 </html>
 <?php 

}else{
  	header('location:index.php');
  }?>
