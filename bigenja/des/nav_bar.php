<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg navbar-light bg-orange">
        <div class="container nav-container">
            <div class="logo-wrapper navbar-brand ">
                <a href="index.php" class="logo main-logo mobile-logo">
                    <img src="assets/img/logo-white.png" alt="logo">
                </a>
                <div class="form-element has-icon">
                    <select class="category selectpicker" id="category">
                    <option value='0'>All Category</option>
<?php
include 'function/connect.php';
$sqlcat = "SELECT * FROM catigries";
$resultcat = $conn->query($sqlcat);
while ($rowcat = $resultcat->fetch_assoc()){

    $cat_id = $rowcat['id'];

    echo "<option value='0'><a href='products_cat.php?id=".$cat_id."'>".$rowcat['name']."</a></option>";

}
?>
                        
                        
                    </select>
                    <span class="the-icon">
                            <i class="fas fa-plus"></i>
                    </span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="mirex">
                <!-- navbar collapse start -->
                <ul class="navbar-nav">
                    <!-- navbar- nav -->
                    <li class="nav-item active dropdown">
                        <a class="nav-link pl-0 dropdown-toggle" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown mega-menu"><!-- mega menu start -->
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                        <div class="mega-menu-wrapper">
                            <div class="container mega-menu-container">
                                <div class="row">
                                  <div class="col-lg-3 col-sm-12">
                                    <div class="mega-menu-columns">
                                        <h6 class="title">Inner Pages</h6>
                                        <ul class="menga-menu-page-links">
                                            <li><a href="category.php">Category</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                            <li><a href="product_details.php">Product Details</a></li>
                                            <li><a href="signup.php">Signup</a></li>
                                            <li><a href="sellers-products.html">Sellers Products</a></li>
                                            <li><a href="seller-dashboard.html">Sellers Dashboard</a></li>
                                        </ul>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <div class="mega-menu-columns">
                                            <h6 class="title">Other Pages</h6>
                                            <ul class="menga-menu-page-links">
                                                <li><a href="product_upload.html">Product Upload</a></li>
                                                <li><a href="offers.html">Offer</a></li>
                                                <li><a href="invoice.html">Invoice</a></li>
                                                <li><a href="vendor-list.html">Vendor List</a></li>
                                                <li><a href="partners.html">Partners</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <div class="mega-menu-columns">
                                            <h6 class="title">Other Pages</h6>
                                            <ul class="menga-menu-page-links">
                                                <li><a href="search.html">Search</a></li>
                                                <li><a href="become-affiliats.html">Become Affiliant</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="track-orders.html">Track Order</a></li>
                                                <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <a href="product-details.html">
                                            <img src="assets/img/mega-menu.jpg" alt="product image">
                                        </a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </li><!-- mega menu start -->
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="blog.php" class="dropdown-item">Blog</a>
                            <a href="blog-details.php" class="dropdown-item">Blog Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
             <!-- /.navbar btn wrapper -->
             <div class="responsive-mobile-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mirex" aria-controls="mirex"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <!-- navbar collapse end -->
            <div class="right-btn-wrapper">
               <ul>
                   <li class="search" id="search"><i class="fas fa-search"></i> </li>
                   <li class="cart" id="cart"><i class="fas fa-shopping-basket"></i> 
                    <span class="badge">12</span>
                    </li>
                   <li class="right-menu" id="side-menu"><i class="fas fa-bars"></i> </li>
               </ul>
            </div>
           
           
        </div>
    </nav>
    <!-- navbar area end -->