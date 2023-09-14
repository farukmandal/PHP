<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                <?php 
                include 'db.php';
                    if(isset($_REQUEST['save'])){
                      $category =mysqli_real_escape_string($conn,$_REQUEST['cat']);
                      $sql1 ="SELECT category_name FROM category WHERE category_name ='{$category}'";
                      $query1 =mysqli_query($conn,$sql1) or die("Query Faild");
                      $count = mysqli_num_rows($query1);
                      if($count>0){
                        echo " Category Allready Exist";
                      }else{
                        $sql  = "INSERT INTO category(category_name) VALUES( '$category')";
                      $query = mysqli_query($conn,$sql) or die("Query Faild");
                      if($query){
                        header('location: category.php');
                      }else{
                        echo "Category Not Added";
                      }
                      }
                      
                    }
                 ?>
                  <!-- Form Start -->
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Add Category" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
