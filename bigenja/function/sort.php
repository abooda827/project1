

<?php
session_start();
include 'connect.php'; 
$id = $_POST['catid'];
$value = $_POST['value'];
$res_per_page = 3;
$_SESSION['price']=$value;
// find out the number of results stored in database
$sql="SELECT * FROM product WHERE catigries = '$id'";
$result = $conn->query($sql);
$num_res = $result->num_rows;

// determine number of total pages available
$num_pages = ceil($num_res/$res_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$res_per_page;



$getcatsp = "SELECT * FROM  product WHERE catigries = '$id' ORDER BY price DESC LIMIT " . $this_page_first_result . "," .  $res_per_page ;
$result_catp=$conn->query($getcatsp) ; 
while($catsp = $result_catp->fetch_assoc()){
  
  ?>
                            <div class="col-lg-4 col-md-6">

                                <div class="single-new-collection-item"><!-- single new collections -->
                                    <div class="thumb">
<?php
if (!empty($catsp['image'])) {
    echo "<img alt='new collcetion image' src='../admin/function/uploads//".$catsp['image']."'>";  
} 
else{echo "<img alt='new collcetion image' src='../admin/function/uploads/3571538925420backblue.gif'>";}
?>
                                        
                                        <div class="hover">
                                            <a href="#" class="addtocart" data-productid="<?php echo $catsp['product_id']?>"
                                        data-userid="<?php echo $uid?>">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="category">shoe</span>
                                        <a href="<?php echo "product_details.php?id=".$catsp['product_id']?>"><h4 class="title"><?php echo $catsp['name']?></h4></a>
                                        <div class="price">
<?php
if ($catsp['offer']!=0) {
    echo "<span class='sprice'>$".$catsp['offer']."</span>";
    echo "<span class='dprice'><del>$".$catsp['price']."</del></span>";
}
else{
    echo "<span class='sprice'>$".$catsp['price']."</span>";
}

?>
                                        </div>

                                    </div>

                                </div><!-- //. single new collections  -->

                            </div>
<?php

}
    for ($page=1;$page<=$num_pages;$page++) {
  echo "<a href='products_cat.php?id=".$id."&page=" . $page . "'>" . $page . "</a>";
}
?>

                            