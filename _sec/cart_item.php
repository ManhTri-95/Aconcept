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
		<div class="desc">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniami.
		</div>
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
		<div class="quantity-wrapper pull-left clearfix">
			<div class="quantity">
				<button type="button" class="btn-number btn-minus" data-type="minus" ><i class="icon-minus-2"></i></button>
				<input type="text" name="qty" value="1" class="input-number input-quantity " min="1" max="">
				<button type="button" class="btn-number btn-plus" data-type="plus"><i class="icon-plus-2"></i></button>
			</div>
			<button data-toggle="tooltip" data-placement="top" title="Update" class="btn-update"  data-quantity-field=".qty-0">
			<i class="icon icon-spin" aria-hidden="true"></i>
			</button>
		</div>
	</td>
	<td>
		<label>Total:</label>
		<span>5,000,000 VND</span>
	</td>
	<td>
		
		<form method="POST" action="#" onsubmit="return confirm('Are you sure want to delete this product from your cart?');">
			<input type="hidden" name="_method" value="delete">
			<button type="submit" class="btn-close" data-toggle="tooltip" data-placement="top" title="Remove">
			<i class="icon icon-close"></i>
			</button>
		</form>
	</td>
</tr>