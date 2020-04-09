<?php include 'include/index-top.php';?>

<section id="bannertop" class="lazy-hidden tRes_48 subbanner" data-lazy-type="bg" data-lazy-src="assets/images/banner-5.jpg" >
  <div class="divtext"><h1>HỎI ĐÁP</h1></div>
</section>

<main id="main" class="page-faqs">
  <div class="container">

  	<div class="row">
  		<div class="col-md-3 col-sm-4 sidebar-faqs">
  			<h3><img src="assets/images/svg/question-2.svg"   alt=""> Câu hỏi</h3>
  			<ul class="menu">
  				<li><a href="#">CÁCH THỨC GIAO HÀNG</a></li>
  				<li><a href="#">CHÍNH SÁCH ĐỔI TRẢ</a></li>
  				<li class="active"><a href="#">CÂU HỎI THƯỜNG GẶP</a></li>
  				<li><a href="#">QUYỀN RIÊNG TƯ</a></li>
  			</ul>
  		</div>
  		<div class="col-md-9 col-sm-8">
			<div class="acordion-faqs box-acordion">
			    <?php
			    for($i=1;$i<=10;$i++) {
			    ?>
					<div class="tab  <?php if($i==1) echo 'show'; ?>">
						<div class="tab-title" ><?php echo $i; ?>. Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.  </div>
						<div class="tab-content entry-content" style="display: <?php if($i==1) echo 'block';else echo 'none'; ?>;">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
			    <?php
			    } ?>
			</div>
  		</div>
  	</div>

  </div>
</main>


<?php include 'include/index-bottom.php';?>
