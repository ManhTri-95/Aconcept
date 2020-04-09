<?php include 'include/index-top.php';?>

<section id="bannertop" class="lazy-hidden tRes_48 subbanner" data-lazy-type="bg" data-lazy-src="assets/images/banner-3.jpg" >
  <div class="divtext"><h1>TIN TỨC</h1></div>
</section>

<main id="main">
  <div class="container">

	<section class="sec-news-list sec-tb">
		<div class="row">
	    <?php
	    for($i=1;$i<=10;$i++) {
	    ?>
	    <div class="col-md-6">
		    <div class="item" >   

		        <a class="img" href="08_news_detail.php">
		        	<img    src="assets/images/img-<?php echo $i; ?>.jpg"   alt="">
		        </a>

				<div class="divtext">
			        <div class="meta">
			        	<div class="cate"><span>PHONG CÁCH</span></div>
			        	<span class="date">02/06/2019</span>
			        </div>					
					<h3 class="title">Đơn giản cuộc sống với bộ bàn ăn phong cách Scandinavian <?php echo $i; ?></h3>
					<div class="desc">
						<?php echo substr('Ở lối sống của người Đan Mạch, bạn sẽ luôn tìm thấy cảm giác bình yên trong gian bếp của mỗi gia đình. Bên cạnh những yếu tố về màu sắc chủ đạo, vật dụng trang trí thì chiếc bàn ăn cũng mang một ý nghĩa vô cùng quan trọng.', 0,200);?>...
					</div>
					<div class="more">
						<a href="08_news_detail.php" >Xem thêm <i class="icon-arrow-14"></i></a></a>
					</div>
				</div>
		    </div>
	    </div>
	    <?php
	    } ?>
	    </div>

	    <div class="text-center viewmore">
	    	<a href="#" class="btn">XEM THÊM</a>
	    </div>
	</section>


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
