<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                <?php 
                include 'db.php';
                  if(isset($_REQUEST['save'])){
                    $fname =mysqli_real_escape_string($conn,$_REQUEST['fname']);
                    $lname =mysqli_real_escape_string($conn,$_REQUEST['lname']);
                    $user =mysqli_real_escape_string($conn,$_REQUEST['user']);
                    $password =mysqli_real_escape_string($conn,md5($_REQUEST['password']));
                    $role =mysqli_real_escape_string($conn,$_REQUEST['role']);

                     $sql1 ="SELECT username FROM users WHERE username ='{$user}'";
                     $query1 = mysqli_query($conn,$sql1);
                     if($query1){
                       echo "User Name Already Exsist";

                   
                 }else{
                  /* $sql ="INSERT INTO user user_fname = '$fname' , user_lname = '$lname' , username = '$user' ,user_password = '$password' , user_role = '$role'"*/

                   $sql     ="INSERT INTO users(user_fname,user_lname,username,user_password,user_role) VALUES('$fname','$lname','$user','$password','$role')";
                   $query   =mysqli_query($conn,$sql);
                   if($query){
                    header('location: users.php');
                   }else{
                    echo "User Added Faild";
                   }
                 }
                  }

                 ?>
                  <!-- Form Start -->
                  <form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" required>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Moderator </option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Add User" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
