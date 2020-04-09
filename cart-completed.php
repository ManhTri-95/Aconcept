<?php include 'include/index-top.php';?>

<?php
$page_title = 'CẢM ƠN'; 
include '_sec/banner-cart.php';?>

<div class="container-fluid ">
	<div class="row">
		<div class="col-sm-10 margin-auto">
			<?php
			$active = 'confirm'; 
			include '_sec/cart_wizard.php';?>
		</div>
	</div>
    <div class="cart-list-wrapper row">
       	<div class="col-md-12 cart-list-inner cart-completed">
			<div class="block-center">
				<img src="assets/images/cart/completed.svg" alt="completed.svg">
				<div class="message">
					<h1>Đặt hàng thành công </h1>
					<p>Đơn hàng của bạn đã được xác nhận</p>
				</div>
   				
   			</div>
       </div>
       <div class="col-lg-12 cart-completed-bottom">
       		<h3 class="thankyou">Cám ơn bạn đã tin tưởng lựa chọn AConcept</h3>
            <a href="/" class=" btn btn-grey ico-l btn-back">QUAY LẠI CỬA HÀNG <i class="icon icon-arrow-14"></i></a>
       </div>
   </div>
</div>
<?php include 'include/index-bottom.php';?>
