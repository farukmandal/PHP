

<?php 
include 'db.php';
  
  if(isset($_REQUEST['id'])){
    echo $post_id           =$_REQUEST['id'];
   
    $sql = "DELETE FROM post WHERE post_id = '$post_id'";
    $query = mysqli_query($conn, $sql);
    if($query){
     
      header('location:post.php');

    }else{
      echo "Failed";
    }
  }
 ?>

