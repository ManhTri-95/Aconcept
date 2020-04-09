<?php include 'include/index-top.php';?>

<section id="bannertop" class="lazy-hidden tRes_48 subbanner" data-lazy-type="bg" data-lazy-src="assets/images/banner-3.jpg" >
  <div class="divtext">
    <h5>Designer</h5>
    <h1>JOHN NISSEN</h1>
</div>
</section>

<main id="main">
    <div class="container">
            <div class="t4-detail">
                <div class = "detail-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>  
            </div>
        <div class="row no-gutter detail-contai">
           
            <div class="col-lg-6">
                <a href="03_product_detail.php" class="img  tRes_58">
                    <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/img-1.jpg"  alt="" />      
                </a>       
            </div>
            <div class="col-lg-6 ">
                <a href="03_product_detail.php" class="img  tRes_58">
                    <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/img-1.jpg"  alt="" />      
                </a>  
                
            </div>
            <div class="col-lg-12 ">
            <a href="03_product_detail.php" class="img  tRes_58">
                    <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/banner-4.jpg"  alt="" />      
                </a>  
            </div>
           <div class="col-lg-6 ">
                <a href="03_product_detail.php" class="img  tRes_58">
                    <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/img-1.jpg"  alt="" />      
                </a>       
            </div>
            <div class="col-lg-6">
                <a href="03_product_detail.php" class="img  tRes_58">
                    <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/img-1.jpg"  alt="" />      
                </a>  
            </div>
        </div>
        <div class="list-items-design ">
            <h3>CÁC DESIGN KHÁC</h3>
            <div class="row list-designer-detail">
                <div class="col-md-3 designer">
                    <a href="#">
                        <img src = "assets/images/img-3.jpg" class="tRes_80" alt="">
                    </a>
                    <div class="items-design">
                        <h3 class="title-design">ANNE RYE</h3>
                        <div class="desc-info">
                            Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những. 
                        </div>
                        <div class="more">
                            <a href="08_news_detail.php" >Chi tiết <i class="icon-arrow-14"></i></a></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 designer">
                    <a href="#">
                        <img src = "assets/images/img-3.jpg" class="tRes_80" alt="">
                    </a>
                    <div class="items-design">
                        <h3 class="title-design">ANNE RYE</h3>
                        <div class="desc-info">
                            Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những. 
                        </div>
                        <div class="more">
                            <a href="08_news_detail.php" >Chi tiết <i class="icon-arrow-14"></i></a></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 designer">
                    <a href="#">
                        <img src = "assets/images/img-3.jpg" class="tRes_80" alt="">
                    </a>
                    <div class="items-design">
                        <h3 class="title-design">ANNE RYE</h3>
                        <div class="desc-info">
                            Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những. 
                        </div>
                        <div class="more">
                            <a href="08_news_detail.php" >Chi tiết <i class="icon-arrow-14"></i></a></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 designer">
                    <a href="#">
                        <img src = "assets/images/img-3.jpg" class="tRes_80" alt="">
                    </a>
                    <div class="items-design">
                        <h3 class="title-design">ANNE RYE</h3>
                        <div class="desc-info">
                            Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những. 
                        </div>
                        <div class="more">
                            <a href="08_news_detail.php" >Chi tiết <i class="icon-arrow-14"></i></a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="assets/js/isotope.pkgd.min.js"></script>

<script>




jQuery(function($){
      // init Isotope
      var $grid = $('.sec-news-list .row').isotope({
        itemSelector: '.col-md-6',
        percentPosition: true,
        masonry: {
          columnWidth: '.col-md-6'
        }
      });
      // layout Isotope after each image loads
      $grid.imagesLoaded().progress( function() {
        $grid.isotope('layout');
      });  
});

</script>



<?php include 'include/index-bottom.php';?>
