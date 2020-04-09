<div class="wizard">
     <div class="wizard-inner">
         <div class="progress">
             <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3"></div>
         </div>
         <ul class="nav nav-tabs" role="tablist">
             <li role="presentation" class="address-tab <?php if ($active == 'cart') { echo "active"; } else { echo "disabled";} ?>  ">
                 <a href="cart.php" data-toggle="tab" aria-controls="step1" role="tab" data-step="1">
                     Đặt hàng
                     <span class="round-tab"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                 </a>
             </li>
             <li role="presentation" class=" payment-tab <?php if ($active == 'payment') { echo "active"; } else { echo "disabled";} ?> ">
                 <a href="checkout.php" data-toggle="tab" aria-controls="step2" role="tab" data-step="2">
                     Thanh toán
                     <span class="round-tab"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                 </a>
             </li>
             <li role="presentation" class=" confirm-tab <?php if ($active == 'confirm') { echo "active"; } else { echo "disabled";} ?> ">
                 <a href="cart-completed.php" data-toggle="tab" aria-controls="step3" role="tab" data-step="3">
                     Xác nhận
                     <span class="round-tab"><i class="fa fa-check" aria-hidden="true"></i></span>
                 </a>
             </li>
         </ul>
     </div>
 </div>