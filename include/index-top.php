<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Aconcept</title>
<link rel="shortcut icon" href="images/favicon.ico">

<link rel='stylesheet'  href='assets/css/main.css' type='text/css' media='all' />
<link rel='stylesheet'  href='assets/css/custom.css' type='text/css' media='all' />
<link rel='stylesheet'  href='assets/css/cart.css' type='text/css' media='all' />


<script type="text/javascript" src="assets/js/jquery.js" ></script>

</head>

<body >
<div id="wrapper">
<span class="menu-btn overlay"> </span>
<header id="header" class="fixe" role="banner">
  <div class="container"> 
    <a href="./" id="logo" > <img class="white" src="assets/images/aconcept-white.svg" alt=""><img class="dark" src="assets/images/aconcept-dark.svg" alt=""> </a>
    <div class="wrap-menu-header "> <!--Detect only show PC-->
        <ul class="menu-top-header"> 
          <?php include 'include/mainmenu.php';?>
        </ul>
    </div>
    <div class="group-header">
      <div class="item ">
        <a href="#"><i class="icon-search"></i></a>
      </div>
      <div class="item ">
        <a href="#" data-toggle="modal" data-target="#myLogin"><i class="icon-user-3"></i></a>
      </div>


      <div class="item ">
        <a href="#"><i class="icon-heart"></i></a>
      </div>
      <div class="item dropdown mini-cart-wrapper subright">
        <a href="#">
          <i class="icon-shop"></i>
          <span class="qty cart-count">1</span>
        </a>
        <?php include ('minicart.php')?>
      </div>



      <div class="item ilang">
        <div class="dropdown subright language">
          <div class="title">            ENG          </div>
          <div class="content">
            <div class="inner">
              <ul class="menu">
                <li class="lang-en"><a href="#" hreflang="en" title="English (en)"><img src="//via.placeholder.com/20x20" alt="" /> <span>English</span></a></li>
                <li class="lang-vi active"><a href="#" hreflang="vi" title="Tiếng Việt (vi)"><img src="//via.placeholder.com/20x20" alt="" /> <span>Tiếng Việt</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <span class="menu-btn x"><span></span></span>
  </div>
</header>

<!-- End Mainmenu --> 

<div class="wrap-menu-mb" data-style="1">
  <div class="wrapul main">
    <div class="menu-head">
      <h3>Mainmenu</h3>
      <span class="menu-btn x"><span></span></span>
    </div>
    <div class="inner">
      <ul class="menu"> 
        <?php include 'include/mainmenu.php';?>
      </ul> 

      <div class="language">
        
      

      <ul class="row">
        <li class="lang-en col-sm-6 col-xs-6"><a href="#" hreflang="en" title="English (en)"><img src="//via.placeholder.com/20x20" alt="" /> <span>English</span></a></li>
        <li class="lang-vi active  col-sm-6 col-xs-6"><a href="#" hreflang="vi" title="Tiếng Việt (vi)"><img src="//via.placeholder.com/20x20" alt="" /> <span>Tiếng Việt</span></a></li>
      </ul>   
      </div> 
        
    </div>
  </div> 
</div>



