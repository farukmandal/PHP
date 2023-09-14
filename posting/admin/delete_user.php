

<?php 
include 'db.php';
  
  if(isset($_REQUEST['id'])){
    echo $user_id           =$_REQUEST['id'];
   
    $sql = "DELETE FROM users WHERE user_id = '$user_id'";
    $query = mysqli_query($conn, $sql);
    if($query){
     
      header('location:users.php');

    }else{
      echo "Failed";
    }
  }
 ?>

