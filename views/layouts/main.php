<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

// AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>BackEnd-Developer-TanHung</title>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
      <link type="text/css" rel="stylesheet" href="css/slick.css" />
      <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
      <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="css/style.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> <span class="__cf_email__" data-cfemail="60050d01090c20050d01090c4e030f0d">[email&#160;protected]</span></a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
            </ul>
        </div>
    </div>
</header>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="header-logo">
                <a href="#" class="logo">
                <img src="./img/logo.png" alt>
                </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="header-search">
                <form>
                    <select class="input-select">
                        <option value="0">All Categories</option>
                        <option value="1">Category 01</option>
                        <option value="1">Category 02</option>
                    </select>
                    <input class="input" id = "search" placeholder="Search here">
                    <button class="search-btn">Search</button>
                </form>
                </div>
            </div>
            <div class="col-md-3 clearfix">
                <div class="header-ctn">
                <div>
                    <a href="#">
                        <i class="fa fa-heart-o"></i>
                        <span>Your Wishlist</span>
                        <div class="qty">2</div>
                    </a>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Your Cart</span>
                        <div class="qty">3</div>
                    </a>
                    <div class="cart-dropdown">
                        <div class="cart-list">
                            <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product01.png" alt>
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                            </div>
                            <button class="delete"><i class="fa fa-close"></i></button>
                            </div>
                            <div class="product-widget">
                            <div class="product-img">
                                <img src="./img/product02.png" alt>
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                            </div>
                            <button class="delete"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                        <div class="cart-summary">
                            <small>3 Item(s) selected</small>
                            <h5>SUBTOTAL: $2940.00</h5>
                        </div>
                        <div class="cart-btns">
                            <a href="#">View Cart</a>
                            <a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="menu-toggle">
                    <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
      <nav id="navigation">
         <div class="container">
            <div id="responsive-nav">
               <ul class="main-nav nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Hot Deals</a></li>
                  <li><a href="#">Categories</a></li>
                  <li><a href="#">Laptops</a></li>
                  <li><a href="#">Smartphones</a></li>
                  <li><a href="#">Cameras</a></li>
                  <li><a href="#">Accessories</a></li>
               </ul>
            </div>
         </div>
      </nav>
    <main id="main" >
        <div class="container">
            <?= $content ?>
        </div>
    </main>

<footer id="footer">
    <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="footer">
                <h3 class="footer-title">About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                <ul class="footer-links">
                    <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i><span class="__cf_email__" data-cfemail="fc99919d9590bc99919d9590d29f9391">[email&#160;protected]</span></a></li>
                </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="footer">
                <h3 class="footer-title">Categories</h3>
                <ul class="footer-links">
                    <li><a href="#">Hot deals</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Smartphones</a></li>
                    <li><a href="#">Cameras</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
                </div>
            </div>
            <div class="clearfix visible-xs"></div>
            <div class="col-md-3 col-xs-6">
                <div class="footer">
                <h3 class="footer-title">Information</h3>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Orders and Returns</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="footer">
                <h3 class="footer-title">Service</h3>
                <ul class="footer-links">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">View Cart</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="bottom-footer" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="footer-payments">
                <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                </ul>
                <span class="copyright">
                Copyright All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </span>
            </div>
        </div>
    </div>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
