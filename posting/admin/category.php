<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php 
                        include 'db.php';
                        $sql = "SELECT * FROM category ORDER BY category_id DESC";
                        $query = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($query);
                        if($count>0){
                            $serial=1;
                            while($data = mysqli_fetch_assoc($query)){

                           
                         ?>
                        
                        <tr>
                            <td class='id'><?php echo $serial++ ?></td>
                            <td><?php echo $data['category_name'] ?></td>
                            <td>5</td>
                            <td class='edit'><a href='update_category.php?id=<?php echo $data['category_id'] ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a onclick="myFunction()" href='delete_category.php?id=<?php echo $data['category_id'] ?>'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <?php 

                    }
                    }
                         ?>
                    </tbody>
                </table>
                <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
  confirm("Are You Confirm To Delete!");
}
</script>

<?php include "footer.php"; ?>
