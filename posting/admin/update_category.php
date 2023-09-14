


<?php 
include 'db.php';
  
  if(isset($_REQUEST['update'])){
    $cat_id           =mysqli_real_escape_string($conn,$_REQUEST['category_id']);
    $update_cat       =mysqli_real_escape_string($conn,$_REQUEST['update_cat']);


    $sql = "UPDATE  category SET category_name = '$update_cat' WHERE category_id = '$cat_id'";
    $query = mysqli_query($conn, $sql);
    if($query){
      header('location:category.php');

    }else{
      echo "Failed";
    }
  }
 ?>

<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <?php 
                    if(isset($_GET['id'])){
                      $cat_id = $_GET['id'];
                    
                    
                    $sql1 = "SELECT * FROM category WHERE category_id = {$cat_id}";
                    $query1 = mysqli_query($conn,$sql1);
                    $count = mysqli_num_rows($query1);
                    if($count>0){
                      $row = mysqli_fetch_assoc($query1);   
                   ?>
                  
                  <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST" autocomplete="off">
                    <div class="form-group">
                          <label></label>
                          <input type="hidden" name="category_id" class="form-control" placeholder="" required value="<?php echo $row['category_id'] ?>">
                      </div>
                      <div class="form-group">
                          <label></label>
                          <input type="text" name="update_cat" class="form-control" placeholder="" required value="<?php echo $row['category_name'] ?>">
                      </div>
                     
                      <div class="form-group">
                          <input type="submit"  name="update" class="btn btn-primary" value="Update" required />
                      </div>
                     
                     
                  </form>
                  <?php 
              }
              }
                   ?>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php";  ?>
