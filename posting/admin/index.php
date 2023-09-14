<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                <?php 
                session_start();
                include 'db.php';
                  if(isset($_REQUEST['save'])){
                    $user_name =mysqli_real_escape_string($conn,$_REQUEST['user_name']);
                    $password =mysqli_real_escape_string($conn,md5($_REQUEST['password']));


                   $sql     ="SELECT * FROM users WHERE username = '{$user_name}' && user_password = '{$password}'";

                   $query   =mysqli_query($conn,$sql) or die("Query Faild");
                   $count = mysqli_num_rows($query);
                   if($row = mysqli_fetch_assoc($query)){
                      $user_id=$row['user_id'];
                      $role=$row['user_role'];
                   }
                   if($count>0){
                    $_SESSION['id']=$user_id;
                    $_SESSION['user_name']=$user_name;
                    $_SESSION['user_role']=$user_role;
                    header('location: post.php');
                   }else{
                    echo "Login Faild";
                   }
                  }

                 ?>
                  <!-- Form Start -->
                  <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user_name" class="form-control" placeholder="First Name" required>
                      </div>
                          

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      
                      <input type="submit"  name="save" class="btn btn-primary" value="Login" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
