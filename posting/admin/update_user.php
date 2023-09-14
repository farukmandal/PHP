

<?php 
include 'db.php';
  
  if(isset($_REQUEST['update'])){
    $user_id           =mysqli_real_escape_string($conn,$_REQUEST['user_id']);
    $fname            =mysqli_real_escape_string($conn,$_REQUEST['fname']);
    $lname            =mysqli_real_escape_string($conn,$_REQUEST['lname']);
    $user             =mysqli_real_escape_string($conn,$_REQUEST['user']);
    $role             =mysqli_real_escape_string($conn,$_REQUEST['role']);



    $sql = "UPDATE  users SET user_fname = '$fname', user_lname = ' $lname' , username = '$user' , user_role = '$role' WHERE user_id = '$user_id'";
    $query = mysqli_query($conn, $sql);
    if($query){
      header('location:users.php');

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
                      $user_id = $_GET['id'];
                    
                    
                    $sql1 = "SELECT * FROM users WHERE user_id = {$user_id}";
                    $query1 = mysqli_query($conn,$sql1);
                    $count = mysqli_num_rows($query1);
                    if($count>0){
                      $row = mysqli_fetch_assoc($query1);   
                   ?>
                  
                  <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST" enctype="multipart/form-data" autocomplete="off">
                  		<div class="form-group">
                          <label></label>
                          <input type="hidden" name="user_id" class="form-control" placeholder="" required value="<?php echo $row['user_id'] ?>">
                      </div>
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="" required value="<?php echo $row['user_fname'] ?>">
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="" required value="<?php echo $row['user_lname'] ?>">
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="" required value="<?php echo $row['username'] ?>">
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['user_role'] ?>">
                            <?php 
                            if($row['user_role'] ==1){
                              echo "<option value='0'>Moderator</option>";
                             echo "<option value='1' selected >Admin</option>";
                            }else{
                              echo "<option value='0' selected >Moderator</option>";
                             echo "<option value='1'>Admin</option>";
                             
                            }
?>
                             
                          </select>
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
