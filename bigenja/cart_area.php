<div class="cart-sidebar-area home-3" id="cart-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" ><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="cart-products"><!-- cart product -->
            <h4 class="title">Shopping cart</h4>
<?php
session_start();

$total_price = 0;
$total_item = 0;

if(!empty($_SESSION["shopping_cart"]))
{
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
    echo "<div class='single-product-item'>
                <div class='thumb'>
                    <img src='assets/img/recent-review/01.jpg' alt='recent review'>
                </div>
                <div class='content'>
                    <h4 class='title'>".$values["product_name"]."</h4>
                    <p class='title'>".$values["product_quantity"]."</p>
                    <div class='price'><span class='pprice'>".$values["product_price"]."</span> <del class='dprice'>$500.00</del></div>
                    <a href='#'' class='remove-cart'>Remove</a>
                </div>
            </div>";

$total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
$total_item = $total_item + 1;




?>
<div class="btn-wrapper">
                <a href="checkout.html" class="boxed-btn">Checkout</a>
            </div>
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>