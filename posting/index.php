<?php include 'header.php'; ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post-container -->
                    <div class="post-container">
                        <div class="post-content">
                        <div class="row">
                            <?php 
                                        include 'admin/db.php';
                                        $sql = "SELECT * FROM post ORDER BY post_id DESC";
                                        $query = mysqli_query($conn,$sql);
                                        $result = mysqli_num_rows($query);
                                        while($data = mysqli_fetch_assoc($query)){

                                     ?>
                            <div class="col-md-4">
                                <a class="post-img" href="single.php"><img src="images/<?php echo $data['post_img'] ?>" alt=""/></a>
                            </div>
                            <div class="col-md-8">
                                <div class="inner-content clearfix">
                                    
                                    <h3><a href='single.php'><?php echo $data['post_title'] ?></a></h3>
                                    <div class="post-information">
                                        <span>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a href='category.php'><?php echo $data['post_category'] ?></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href='author.php'>Admin</a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                           <?php echo $data['date'] ?>
                                        </span>
                                    </div>
                                    <p class="description">
                                       <?php echo $data['post_description'] ?>
                                    </p>
                                    <a class='read-more pull-right' href='single.php'>read more</a>
                                        
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                   
                        <ul class='pagination'>
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                        </ul>
                    </div><!-- /post-container -->
                </div>
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
