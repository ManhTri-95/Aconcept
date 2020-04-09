<?php include 'include/index-top.php';?>


<?php 
$page_title = 'GIỎ HÀNG';
include '_sec/banner-cart.php';?>

<div class="container">
	<div class="row">
		<div class="col-sm-10 margin-auto">
			<?php
			$active = 'cart'; 
			include '_sec/cart_wizard.php';?>
		</div>
	</div>

    <div class="cart-list-wrapper row">
       	<div class="col-md-10 cart-list-inner">
   			 <div class="cart-list">
                    <div class="table-responsive">
                        <table class="table">
                        	<thead class="hidden-xs">
                               <tr class="cart-title">
                                   <th colspan="2">Sản phẩm</th>
                                   <th>Giá</th>
                                   <th>Số lượng</th>
                                   <th>Tổng</th>
                                   <th></th>
                               </tr>
                           </thead>
							<tbody>
								<?php for ($i = 1; $i <= 3; $i++) {
									include('_sec/cart_item.php');
								}?>
							</tbody>
							</table>
							</div>
						</div>
				<div class="cart-list-bottom row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<form method="POST" action="#" id="coupon-apply-form" class="clearfix">
								<div class="form-group">
									<label for="coupon">MÃ GIẢM GIÁ</label>
									<input type="text" name="coupon" class="form-control input" id="coupon" value="" placeholder="coupon">
									<button type="submit" class="btn ico-r" id="coupon-apply-submit" data-loading title="Apply Coupon">
									<i class="icon icon-tick"></i>
									</button>
								</div>
						</form>
					</div>
					<div class="col-lg-3 offset-lg-4 col-md-4 offset-md-0 sub-total">
                        <div class="item-amount">
                           <label for="sub-total">Subtotal</label> <span class="price">25,000,000 VND </span>
                       	</div>
                       	<div class="item-amount coupon">
                           <label for="coupon-price">GIẢM GIÁ</label> <span class="price">- 500.000 VND </span>
                       	</div>
                        <div class="final-total total">
                             <label for="total">Total</label> <span id="total-amount" class="price">24,500,000 VND</span>
                        </div>
                          
                    </div>
                   
				</div>
				<div class="cart-list-actions">
                    	 <a href="#" class=" btn btn-back">QUAY LẠI CỬA HÀNG </a>
                         <a href="checkout.php" class=" btn btn-primary ico-r btn-checkout">
                            Tiếp tục kiểm tra 
                            <i class="icon icon-arrow-14"></i>
                        </a>
				</div>
	       
       </div>
   </div>
</div>
<?php include 'include/index-bottom.php';?>
