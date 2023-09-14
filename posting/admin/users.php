

<?php include "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Users </title>
</head>
<body>
	<div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
              	<?php 
              		include 'db.php';
              		$sql = "SELECT * FROM users";
              		$query = mysqli_query($conn,$sql);
              		$count = mysqli_num_rows($query);


              	 ?>
              	<table class="table content-table">
              		<thead>
              			<tr>
              				<th>ID</th>
              				<th>Full Name</th>
              				<th>User Name</th>
              				<th>Role</th>
                      <th>Action</th>
              			</tr>
              		</thead>
              		<?php  
              		while($row = mysqli_fetch_assoc($query)){
              			?>
              		<tbody>
              			<tr>
              				<td><?php echo $row['user_id'] ?></td>
              				<td><?php echo $row['user_fname']." ".$row['user_lname'] ?></td>
              				<td><?php echo $row['username'] ?></td>
              				<td>
              					<?php 
              					if($row['user_role'] ==1){

              					echo "Admin";
              				}else{
              					echo "Moderator";
              				}


              					?>
              						
              				</td>
              			
                      <td>
                       <a class="btn btn-primary" href="update_user.php?id=<?php echo $row['user_id'] ?>">Update</a>
                        <a class="btn btn-danger" href="delete_user.php?id=<?php echo $row['user_id'] ?>">Delete</a>
                      </td>
              			</tr>
              		</tbody>
              	<?php } ?>
              	</table>
              </div>
           </div>
        </div>
    </div>


</body>
</html>

<?php include "footer.php"; ?>