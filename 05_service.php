<?php include 'include/index-top.php';?>

<section id="bannertop" class="lazy-hidden tRes_48 subbanner" data-lazy-type="bg" data-lazy-src="assets/images/banner-2.jpg" >
  <div class="divtext"><h1>DỊCH VỤ</h1></div>
</section>








<main id="main">
  <div class="container">

  	<div class="max650">
  		<h3 class="text-center">TƯ VẤN THIẾT KẾ</h3>
 		<div class="row">
  			<div class="col-md-6"><p>Đến với AConcept, đội ngũ tư vấn, thiết kế không chỉ cung cấp cho khách hàng các thông tin thuần tuý về phong cách, vật liệu, tính năng sản phẩm hay hỗ trợ dựng phối cảnh không gian... Thông qua đó, chúng tôi còn mong muốn truyền cảm hứng và niềm đam mê đối với vật dụng nội thất, đồ trang trí và kể những câu chuyện thú vị về chúng. </p></div>
  			<div class="col-md-6"><p>Khách hàng sẽ tìm thấy sự chia sẻ thân tình để hiểu thêm, yêu hơn tinh thần chân phương của phong cách nội thất Bắc Âu - Scandinavian.
Để tham khảo thêm các bản vẽ 3D mà AConcept đã thực hiện, bạn có liên hệ với AConcept để nhận thiết kế. </p></div>

  		</div>
  		
  		<p><img class="   lazy-hidden" data-lazy-type="image"   data-lazy-src="assets/images/img-1.jpg" alt=""></p>

  	</div> 	
    



  </div>


	<section class="sec-baohanh sec-tb">
	  <div class="container">
	  	<div class="max650">
	  	<h3 class="text-center">BẢO HÀNH</h3>
	  	<p>Khách hàng sẽ tìm thấy sự chia sẻ thân tình để hiểu thêm, yêu hơn tinh thần chân phương của phong cách nội thất Bắc Âu - Scandinavian.
	Để tham khảo thêm các bản vẽ 3D mà AConcept đã thực hiện, bạn có liên hệ với AConcept để nhận thiết kế. </p>
		</div>

	    <div class=" owl-carousel owl-visible  nav-1 s-nav s-auto s-loop " paramowl="margin=30" >
	        <?php
	        for($i=1;$i<8;$i++) {
	        ?>
	        <div class="item" >                                 
		        <div class="tRes_53">
		        	<?php 
		        	if($i<=3) echo '<img src="assets/images/img-1.jpg" alt="">'; 
		        	else echo '<img  class="owl-lazy"  data-src="assets/images/img-1.jpg" src="assets/images/img-1.jpg" alt="">';
		        	?>
		        </div>
		    </div>
	        <?php
	        } ?>
	    </div>
	  </div>
	</section>

	<section class="sec-register sec-tb">
	  <div class="container">
	   	<div class="row grid-space-0">

	   		<div class="col-lg-6">
	   			<div class="img tRes_58">
	   				<img class="   lazy-hidden" data-lazy-type="image"   data-lazy-src="assets/images/img-6.jpg" alt="">
	   			</div>
	   		</div>
	   		<div class="col-lg-6">
	   			<form class="divtext">
	   				<h3>Đăng ký thiết kế miễn phí</h3>
	   				<div class="row">
	   					<div class="col-sm-6">
	   						<input type="text"  placeholder="Họ">
	   					</div>
	   					<div class="col-sm-6">
	   						<input type="text"  placeholder="Tên">
	   					</div>
	   					<div class="col-sm-6">
	   						<input type="text"  placeholder="Điện thoại">
	   					</div>
	   					<div class="col-sm-6">
	   						<input type="text"  placeholder="Email">
	   					</div>
	   					<div class="col-sm-12">
	   						<textarea name="" id="" cols="30" rows="10" placeholder="Nội dung"></textarea>
	   					</div>
	   					<div class="col-sm-12">
	   						<button class="btn btn2">GỬI</button>  
	   					</div>
	   					
	   				</div>
	   			</form>
	   		</div>
	  		

	  	</div>

	  </div>
	</section>
</main>

<?php include 'include/index-bottom.php';?>

