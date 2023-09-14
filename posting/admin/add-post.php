<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Post</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                <?php 
                include 'db.php';
                  if(isset($_REQUEST['submit'])){
                    $title =mysqli_real_escape_string($conn,$_REQUEST['post_title']);
                    $postdesc =mysqli_real_escape_string($conn, $_REQUEST['postdesc']);
                    $category = mysqli_real_escape_string($conn,$_REQUEST['category']);
                    $date     = date("d M,Y");
                    $fileToUpload = $_FILES['fileToUpload']['name'];
                    $tmp_fileToUpload = $_FILES['fileToUpload']['tmp_name'];
                    $upload = "../images/".$fileToUpload;

                    $sql1= "INSERT INTO post(post_title,post_description,post_category,date,post_img) VALUES('{$title}','{$postdesc}','{$category}','{$date}','{$fileToUpload}')";
                    $query1 =mysqli_query($conn,$sql1);
                    if($query1){
                      move_uploaded_file($tmp_fileToUpload,$upload);
                      header('location:post.php');
                    }else{
                      echo "Post Not Added";
                    }
                  } 

                  ?>
                  <!-- Form -->
                  <form  action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="post_title">Title</label>
                          <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="postdesc" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category" class="form-control">
                              <option  disabled value="" selected> Select Category</option>
                              <?php 
                              $sql = "SELECT * FROM category";
                              $query = mysqli_query($conn,$sql);
                              while($data = mysqli_fetch_assoc($query)){
                               ?>
                              
                              <option  value="<?php echo$data['category_name'] ?>" > <?php echo$data['category_name'] ?></option>
                            <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Post image</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
