<?php include 'include/index-top.php';?>

<?php 
$page_title = 'THANH TOÁN';
include '_sec/banner-cart.php';?>

<div class="container">
	<div class="row">
		<div class="col-sm-10 margin-auto">
			<?php
			$active = 'payment'; 
			include '_sec/cart_wizard.php';?>
		</div>
	</div>
    <div class="cart-list-wrapper row">
       	<div class="col-lg-4 col-md-6 col-sm-12 cart-list-inner">
       		<form action="#" class="form-checkout">
       			<div class="row">
       				<div class="col-lg-6">
       					<div class="rowblock">
	       					<label for="firstname">Họ</label>
	       					<input type="text" class="form-control input" name="firstname" placeholder="Họ">
	       				</div>
       				</div>
       				<div class="col-lg-6">
	       				<div class="rowblock">
	       						<label for="lastname">Tên</label>
	       					<input type="text" class="form-control input"  name="lastname" placeholder="Tên">
	       				</div>
       				</div>
       				<div class="col-lg-12">
       					<div class="rowblock">
       						<label for="billing-state">
				                Tỉnh/ Thành phố<span>*</span>
				            </label>
				           <select name="billing[state]" class="custom-select-black " id="billing-state">
				           		<option value="" selected="">Please Select</option><option value="AL">Alabama</option>
				           </select>
       					</div>
       				</div>
       				<div class="col-lg-6">
       					<div class="rowblock">
       						<label for="billing-state">
				                Quận / Huyện<span>*</span>
				            </label>
				           <select name="billing[state]" class="custom-select-black " id="billing-state">
				           		<option value="" selected="">Please Select</option><option value="AL">Alabama</option>
				           </select>
       					</div>
       				</div>
       				<div class="col-lg-6">
       					<div class="rowblock">
       						<label for="billing-state">
				                Phường / xã<span>*</span>
				            </label>
				           <select name="billing[state]" class="custom-select-black " id="billing-state">
				           		<option value="" selected="">Please Select</option><option value="AL">Alabama</option>
				           </select>
       					</div>
       				</div>
       				<div class="col-lg-12">
       					<div class="rowblock">
	       					<label for="address">Địa chỉ</label>
	       					<input type="text" class="form-control input"  name="address" placeholder="Địa chỉ">
	       				</div>
       				</div>
       				<div class="col-lg-12">
       					<div class="rowblock">
	       					<label for="phone">Điện thoại</label>
	       					<input type="tel" class="form-control input"  name="phone" placeholder="Điện thoại">
	       				</div>
       				</div>
       				<div class="col-lg-12">
       					<label for="shipping">VẬN CHUYỂN</label>
       					<ul class="menu-shipping-method">
       						<li class="active"><a href="#"><span class="price">400.000 VNĐ</span> <span class="duration">2-3 ngày</span></a></li>
       						<li><a href="#"><span class="price">600.000 VNĐ</span> <span class="duration">5 ngày</span></a></li>
       					</ul>
       				</div>
       			</div>

       		</form>

		
	       
       </div>
       <div class="col-sm-10 margin-auto">
       		<div class="cart-list-actions">
                	 <a href="" class=" btn btn-back">QUAY LẠI ĐẶT HÀNG </a>
                     <a href="cart-completed.php" class=" btn btn-primary ico-r btn-checkout">
                       <span> XÁC NHẬN THANH TOÁN</span> | 14.900.000 VNĐ
                        <i class="icon icon-arrow-14"></i>
                    </a>
			</div>
       </div>
   </div>
</div>
<?php include 'include/index-bottom.php';?>
