<?php include 'include/index-top.php';?>

<section id="bannertop" class="lazy-hidden tRes_48 subbanner cart" data-lazy-type="bg" data-lazy-src="assets/images/heading.jpg" style="background-image: url(//via.placeholder.com/50x50);">
	<div class="divtext"><h1>THÔNG TIN KHÁCH HÀNG</h1></div>
</section>

<main id="main" class="page-account">
	<div class="container">

		<div class="row">
			<div class="col-md-4 col-lg-3">

				<div class="uname">
					<span class="img">
						<img width="15" height="20" src="assets/images/svg/user.svg" alt="">
					</span>
					<div class="text">
						<span class="t1">Tài khoản của</span>
						<span class="t2">Lê Nhất Nam</span>
					</div>
				</div>

				<ul class="menu-account">
					<li ><a href="12_account.php"><img src="assets/images/svg/ac-1.svg"   alt="" /> Thông tin tài khoản</a></li>
					<li class="active"><a href="13_don_hang.php"><img src="assets/images/svg/ac-2.svg"   alt="" /> Quản lý đơn hàng</a></li>
					<li><a href="#"><img src="assets/images/svg/ac-3.svg"   alt="" /> Sản phẩm đã xem</a></li>
					<li><a href="#"><img src="assets/images/svg/ac-4.svg"   alt="" /> Sản phẩm yêu thích</a></li>
				</ul>
				
			</div>
			<div class="col-md-8 col-lg-9">
				<h4 >LỊCH SỬ ĐƠN HÀNG</h4>




    <div class="cart-list-wrapper">
       	<div class="cart-list-inner">
   			 <div class="cart-list-history">
                    <div class="table-responsive">
                        <table class="table">
                        	<thead class="hidden-xs">
                               <tr class="cart-title">
                                   <th colspan="2">Sản phẩm</th>
                                   <th>Giá</th>
                                   <th>Số lượng</th>
                                   <th>Tổng</th>

                               </tr>
                           </thead>
							<tbody>
								<?php for ($i = 1; $i <= 3; $i++) {
									?>

									<tr class="cart-item">
										<td>
											<div class="image-holder">
												<img src="assets/images/img-8.jpg">
											</div>
										</td>
										<td class="product-info">
											<h5>
											<a href="03_product_detail.php">Abin</a>
											</h5>
											<div class="option">
												<span><span class="label">Màu sắc:</span> <span>Trắng</span></span>
												<span><span class="label">Chất liệu:</span> <span>Gỗ</span></span>
												<span><span class="label">Chất khung:</span> <span>Gỗ</span></span>
											</div>
										</td>
										<td>
											<label>Price:</label>
											<span>5,000,000 VND</span>
										</td>
										<td class="clearfix">
											5
										</td>
										<td>
											<label>Total:</label>
											<span>5,000,000 VND</span>
										</td>

									</tr>
																		<?php
								}?>
							</tbody>
							</table>
							</div>
						</div>


       </div>
   </div>

				
			</div>
		</div>


	</div>
</main>





<?php include 'include/index-bottom.php';?>

