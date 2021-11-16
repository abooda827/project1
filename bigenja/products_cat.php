<?php
session_start();
if (isset($_SESSION['username'])) {
$uid = $_SESSION['userid'];

}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Aug 2019 23:12:41 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bigenja | Online Shopping Ecommerce Cart Html Template </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- select 2  -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body> 
    
<?php
include 'des/support_bar.php';
include 'des/support_bar2.php';
include 'des/nav_bar.php';
include 'function/connect.php';
?>

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Category</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li>Category</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index.html" class="search-popup-form">
        <div class="form-element">
                <input type="text"  class="input-field" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
    </form>
</div>
<!-- slide sidebar area start -->
<div class="slide-sidebar-area" id="slide-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" id="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="recent-reviews"><!-- recent reviews -->
            <h4 class="title">Recent Reviews</h4>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Abir Khan</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Rex Rifat</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
        </div> <!-- //. recent reviews -->
    </div><!-- //. bottom content -->
</div>
<!-- slide sidebar area end -->
<!-- cart sidebar area start -->
<div class="cart-sidebar-area" id="cart-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" ><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="cart-products"><!-- cart product -->
            <h4 class="title">Shopping cart</h4>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="btn-wrapper">
                <a href="checkout.html" class="boxed-btn">Checkout</a>
            </div>
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>
<!-- cart sidebar area end -->
<!-- category content area start -->
<div id="cat" class="category-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="category-sidebar"><!-- category sidebar -->
                    <div class="category-filter-widget"><!-- category-filter-widget -->
                        <h4 class="title">All Categories</h4>
                        <ul class="cat-list">
<?php
$getcats = "SELECT * FROM  catigries " ;
$result_cat=$conn->query($getcats) ;
while($cats = $result_cat->fetch_assoc()){
  

                    echo "<li><a href='products_cat.php?id=".$cats['id']."'>".$cats['name']."</a></li>";

}
?>
                            
                        </ul>
                    </div><!-- //.category-filter-widget -->
                </div><!-- //. category sidebar -->
                <div class="category-compare">
                    <h4 class="title">compare (03)</h4>
                    <ul class="compare-list">
                        <li>
                            <div class="single-compare-item"><!-- single compare item -->
                                <h4 class="title">Intel kaby lake core i3 7100 3.90GHZ 3MB.</h4>
                                <div class="close-btn">X</div>
                            </div><!-- //..single compare item -->
                        </li>
                        <li>
                            <div class="single-compare-item"><!-- single compare item -->
                                <h4 class="title">Intel kaby lake core i3 7100 3.90GHZ 3MB.</h4>
                                <div class="close-btn">X</div>
                            </div><!-- //..single compare item -->
                        </li>
                        <li>
                            <div class="single-compare-item"><!-- single compare item -->
                                <h4 class="title">Intel kaby lake core i3 7100 3.90GHZ 3MB.</h4>
                                <div class="close-btn">X</div>
                            </div><!-- //..single compare item -->
                        </li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="#" class="boxed-btn">Compare</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="right-content-area"><!-- right content area -->
                    <div class="top-content"><!-- top content -->
                        <div class="left-conent">
                            <span class="cat">Cloths</span>
                        </div>
                        <div class="right-content">
                            <ul>
                                <li>
                                    <div class="form-element has-icon">
                                        <select class="selectpicker input-field select">
                                            <option value="0">Show</option>
                                            <option value="2">Hide</option>
                                            <option value="1">Show</option>
                                        </select>
                                        <div class="the-icon">
                                                <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-element has-icon">
                                        <select id="sort" data-catid="<?php echo $id ?>" class="selectpicker input-field select">
<?php
    if ($_SESSION['price']) {
       echo "<option value='1'>Price</option>"; 
    }
    else
    {
        echo "<option value='0'>short by</option>
                <option value='1'>Price</option>
                <option value='2'>Ratings</option>";
    }

?>
                                            
                                        </select>
                                        <div class="the-icon">
                                                <i class="fas fa-angle-down"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class="grid icon active"> 
                                        <i class="fas fa-th-large"></i>
                                </li>
                                <li class="grid icon"> 
                                        <i class="fas fa-th-list"></i>
                                </li>
                            </ul>
                        </div>
                    </div><!-- //. top content -->
                    <div class="bottom-content"><!-- top content -->
                        <div id="sortdiv" class="row">
 <?php 
$id = $_GET['id'];

$res_per_page = 3;

// find out the number of results stored in database
$sql="SELECT * FROM Product WHERE catigries = $id";
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



$getcatsp = "SELECT * FROM  product WHERE catigries = $id LIMIT " . $this_page_first_result . "," .  $res_per_page ;
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
?>
<?php
    for ($page=1;$page<=$num_pages;$page++) {
  echo "<a href='products_cat.php?id=".$id."&page=" . $page . "'>" . $page . "</a>";
}
?>

                            
                            </div>
                        </div>
                    </div><!-- //.top content -->
                </div><!-- //. right content area -->
            </div>
        </div>
    </div>
</div>
<!-- category content area end -->




<!-- our story area start -->
<section class="our-story-area gray-bg">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-lg-8">
                <div class="section-title">
                    <span class="subtitle rubik">Latest Posts</span>
                    <h2 class="title rubik">Read Our Stories</h2>
                </div>
           </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/01.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                       <a href="#"> <h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/02.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                        <a href="#"><h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-our-story-item"><!-- single our story item -->
                    <div class="thumb">
                        <img src="assets/img/our-story/03.jpg" alt="our story">
                    </div>
                    <div class="conent">
                        <span class="time">February 12, 2016</span>
                        <a href="#"><h4 class="title">10 Innovative Product In Our Selforin.</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetuer
                            adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut...</p>
                    </div>
                </div><!-- //.single our story item -->
            </div>
        </div>
    </div>
</section>
<!-- our story area end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
            <div class="preloader-inner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
            </div>
        </div>
    <!-- preloader area end -->

<!-- footer area one start -->
<footer class="footer-arae-one">
        <div class="footer-top-one blue-bg"><!-- footer top one-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget about">
                            <div class="widget-body">
                                <a href="index-2.html" class="footer-logo">
                                    <img src="assets/img/logo.png" alt="footer logo">
                                </a>
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">198 West 21th Street, Suite 721, New York NY 10010</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">youremail@yourdomain.com</span>
                                                <span class="details">example@yourdomain.com</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">+88 (0) 101 0000 000</span>
                                                <span class="details">+99 (989) 101 0000 000</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Shopping Guide</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="blog.html">--  Blog</a></li>
                                    <li><a href="faq.html">--  Faq</a></li>
                                    <li><a href="#">--  Payment</a></li>
                                    <li><a href="track-orders.html">--  Shipment</a></li>
                                    <li><a href="#">--  Where is my order</a></li>
                                    <li><a href="#">--  Return policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Style Adviser</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="signup.html">--  Your Account</a></li>
                                    <li><a href="#">--  Information</a></li>
                                    <li><a href="#">--  Address</a></li>
                                    <li><a href="#">--  Discount</a></li>
                                    <li><a href="#">--  Order History</a></li>
                                    <li><a href="track-orders.html">--   Order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Information</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="#">--  Sitemap</a></li>
                                    <li><a href="#">--  Search Terms</a></li>
                                    <li><a href="#">--  Advanced Search</a></li>
                                    <li><a href="about.html">--  About us</a></li>
                                    <li><a href="contact.html">--  Contact Us</a></li>
                                    <li><a href="partners.html">--  Suppliers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //.footer top one -->
        <div class="copyright-area blue-bg"><!-- copyright area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-inner"><!-- copyright inner -->
                            <div class="left-content-area">
                                <span class="copyright-text">Copyright by@Bigenza - 2018</span>
                            </div>
                            <div class="right-content-area">
                                <ul class="payment-logo">
                                    <li>
                                        <img src="assets/img/payment-logo/01.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/02.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/03.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/04.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/05.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/06.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/07.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/08.png" alt="payment logo">
                                    </li>
                                </ul>
                            </div>
                        </div><!-- //. copyright inner -->
                    </div>
                </div>
            </div>
        </div><!-- //. copyright area -->
    </footer>
    <!-- footer area one end -->

    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>    
	<!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- way poin js-->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- counterup js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/countdown.js"></script>
    <!-- select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
    <!-- main -->
    <script type="text/javascript">
        $(document).ready(function(){
    
            $(document).on("change","#sort",function(){
                var catid = $(this).attr("data-catid");
                var value = $(this).val();
       
            $.post("function/sort.php" , {catid:catid,value:value},function(data){
                $("#sortdiv").html(data);
                });
    })

})
    </script>
</body>


<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Aug 2019 23:12:41 GMT -->
</html>