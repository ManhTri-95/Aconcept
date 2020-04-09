<?php include 'include/index-top.php';?>

<section id="bannertop" class="lazy-hidden tRes_48 subbanner" data-lazy-type="bg" data-lazy-src="assets/images/banner-3.jpg" >
  <div class="divtext">
    <h1>GẶP GỠ CÁC NHÀ THIẾT KẾ</h1>
</div>
</section>

<main id="main">
    <div class="container-designer">
        <div class="t4-detail">
                <div class = "detail-text">
                    <p>Hiểu thêm về các nhà thiết kế và quan điểm sáng tạo của họ.</p>
                    <p>Những cộng sự đến từ Châu Âu đã tạo nên các sản phẩm nội thất tinh tế - tiện dụng - thân thiện mà AConcept đang giới thiệu</p>
                </div>  
        </div>
        <div class= info-designer>
            <div class="row ">
                
                <div class="col-md-8 img-info">
                    <a href="03_product_detail.php" class="img  tRes_80">
                        <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/img-3.jpg"  alt="" />      
                    </a>  
                </div>
                <div class="col-md-4">
                    <div class="meeting-design">
                        <h3 class="title">JF</h3>
                        <div class="desc-info">
                            Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những yếu tố về màu sắc chủ đạo, vật dụng trang trí thì chiếc bàn ăn cũng mang một ý nghĩa vô cùng quan trọng. 
                        </div>
                        <div class="more">
                            <a href="08_news_detail.php" >Chi tiết <i class="icon-arrow-14"></i></a></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row column-reverse ">
                <div class="col-md-4">
                    <div class="meeting-design">
                        <h3 class="title">ANNE RYE</h3>
                        <div class="desc-info">
                            Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những yếu tố về màu sắc chủ đạo, vật dụng trang trí thì chiếc bàn ăn cũng mang một ý nghĩa vô cùng quan trọng. 
                        </div>
                        <div class="more">
                            <a href="08_news_detail.php" >Chi tiết <i class="icon-arrow-14"></i></a></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 img-info">
                    <a href="03_product_detail.php" class="img  tRes_80">
                        <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/img-3.jpg"  alt="" />      
                    </a>  
                </div>
            </div>
            <div class="row ">
                <div class="col-md-8 img-info">
                <a href="03_product_detail.php" class="img  tRes_80">
                        <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/img-3.jpg"  alt="" />      
                    </a>  
                </div>
                <div class="col-md-4">
                    <div class="meeting-design">
                        <h3 class="title">JF</h3>
                        <div class="desc-info">
                            Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những yếu tố về màu sắc chủ đạo, vật dụng trang trí thì chiếc bàn ăn cũng mang một ý nghĩa vô cùng quan trọng. 
                        </div>
                        <div class="more">
                            <a href="08_news_detail.php" >Chi tiết <i class="icon-arrow-14"></i></a></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row column-reverse">
                <div class="col-md-4">
                    <div class="meeting-design">
                        <h3 class="title">ANNE RYE</h3>
                        <div class="desc-info">
                            Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những yếu tố về màu sắc chủ đạo, vật dụng trang trí thì chiếc bàn ăn cũng mang một ý nghĩa vô cùng quan trọng. 
                        </div>
                        <div class="more">
                            <a href="08_news_detail.php" >Chi tiết<i class="icon-arrow-14"></i></a></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 img-info">
                    <a href="03_product_detail.php" class="img  tRes_80">
                        <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/img-3.jpg"  alt="" />      
                    </a>  
                </div>  
            </div>
        </div>
        <div class="text-center viewmore">
	    	<a href="#" class="btn">XEM THÊM</a>
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
