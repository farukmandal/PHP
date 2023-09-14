<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="search.php" method ="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
    </div>
    <!-- /search box -->
    <!-- recent posts box -->
    <div class="recent-post-container">
        <h4>Recent Posts</h4>
        <?php 
        include 'admin/db.php';
        $sql="SELECT * FROM post ORDER BY post_id DESC";
        $query = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($query);
        if($count>0){
            while($data=mysqli_fetch_assoc($query)){

         ?>
        <div class="recent-post">
            <a class="post-img" href="">
                <img src="images/<?php echo $data['post_img'] ?>" alt=""/>
            </a>
            <div class="post-content">
                <h5><a href="single.php"><?php echo $data['post_title'] ?></a></h5>
                <span>
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <a href='category.php'><?php echo $data['post_category'] ?></a>
                </span>
                <span>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <?php echo $data['date'] ?>
                </span>
                <a class="read-more" href="single.php">read more</a>
            </div>
        </div>
        <?php 

    }
}
         ?>
        
        
    </div>
    <!-- /recent posts box -->
</div>
