
<!-- blog page content area start -->
<section class="blog-page-content-area">
    <div class="container">
        <button class="btn btn-success" ><a style="color: white;" href="?do=add_blog">ADD Blog</a></button>
        <div class="row">
           
<?php
$getblog = "SELECT * FROM  blog " ;
$result_blog=$conn->query($getblog) ;
while($blog = $result_blog->fetch_assoc()){
  
?>
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                       <?php echo "<img alt='our story' src='function/uploads//".$blog['image']."'>"?>
                    </div>
                    <div class="conent">
                        <span class="time"><?php echo $blog['datet']?></span>
                        <a href="<?php echo "blog-details.php?id=".$blog['id']?>"><h4 class="title"><?php echo $blog['head']?></h4></a>
                        <p><?php $det=substr($blog['details'],0,100);
                                echo $det?><a href="<?php echo "blog-details.php?id=".$blog['id']?>">....</a></p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
<?php
}
?>
            
        </div>
    </div>
</section>
<!-- blog page content area end -->

