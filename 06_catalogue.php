<?php include 'include/index-top.php';?>

<section id="bannertop" class="lazy-hidden tRes_48 subbanner" data-lazy-type="bg" data-lazy-src="assets/images/banner-2.jpg" >
  <div class="divtext"><h1>DỊCH VỤ</h1></div>
</section>








<main id="main">
  <div class="container">

	<section class="sec-catalogue-1 sec-tb">
	    <?php
	    for($i=1;$i<=3;$i++) {
	    ?>
	    <div class="item" >   
	    	<div class="row center grid-space-0 <?php if($i%2==0) echo 'end'; ?>">
	    		<div class="col-md-5" >
			        <div class="img tRes_130">
			        	<img  class="lazy-hidden" data-lazy-type="image"  data-lazy-src="assets/images/img-14.jpg"   alt="">
			        </div>
	    		</div>
	    		<div class="col-md-7">
	    			<div class="divtext">
	    				<div class="t1">CATALOGUE</div>
	    				<h2 class="title">HÀNH TRÌNH CỦA ACONCEPT</h2>
	    				<div class="t2">Năm phát hành:  2018</div>
	    				<!-- <div class="t3">Nội dung</div> -->
	    				<div class="t4">
	    					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	    				</div>
	    				<div>
	    					<a href="#" class="btn btn2">TẢI VỀ</a> &nbsp;  <a href="#" class="btn btnfb"> <i class="icon-facebook1"></i> CHIA SẺ</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>                              
	    </div>
	    <?php
	    } ?>
	</section>

	<section class="sec-catalogue-2 sec-tb">
		<h3>DANH MỤC CATALOGUE</h3>


	    <div class=" owl-carousel  s-auto" data-res="4,3,3,2" paramowl="margin=30" >
	        <?php
	        for($i=2019;$i>=2010;$i--) {
	        ?>
	        <a href="#" class="item" >                                 
		        <div class="img tRes_130">
		        	<img  class="owl-lazy"  data-src="assets/images/img-14.jpg"   alt="">
		        </div>
		        <h3 class="title"><?php echo $i; ?></h3>
		    </a>
	        <?php
	        } ?>
	    </div>
	</section>

  </div>
</main>

<?php include 'include/index-bottom.php';?>
