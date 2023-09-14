

<?php 
include 'db.php';
  
  if(isset($_REQUEST['id'])){
    echo $cat_id           =$_REQUEST['id'];
   
    $sql = "DELETE FROM category WHERE category_id = '$cat_id'";
    $query = mysqli_query($conn, $sql);
    if($query){
     
      header('location:category.php');

    }else{
      echo "Failed";
    }
  }
 ?>

 