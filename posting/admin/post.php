<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Post</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-post.php">add Post</a>
            </div>
            <div class="col-md-12">
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Post Images</th>
                        <th>Post Title</th>
                        <th>Post Description</th>
                        <th>Post Category</th>
                        <th>Post Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php 
                        include 'db.php';
                        $sql = "SELECT * FROM post ORDER BY post_id DESC";
                        $query = mysqli_query($conn,$sql);
                        $count = mysqli_num_rows($query);
                        if($count>0){
                            $serial=1;
                            while($data = mysqli_fetch_assoc($query)){

                           
                         ?>
                        
                        <tr>
                            <td class='id'><?php echo $serial++ ?></td>
                            <td><img height="50px" src="../images/<?php echo $data['post_img'] ?>"></td>
                            <td><?php echo $data['post_title'] ?></td>
                            <td><?php echo $data['post_description'] ?></td>
                            <td><?php echo $data['post_category'] ?></td>
                            <td><?php echo $data['date'] ?></td>
                            
                            <td class='edit'><a href='update_category.php?id=<?php echo $data['post_id'] ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete_category.php?id=<?php echo $data['post_id'] ?>'><i class='fa fa-trash-o'></i></a></td>
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
<?php include "footer.php"; ?>
