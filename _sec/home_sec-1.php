<?php 
$img = 'assets/images/img-1.jpg';
$title = '<img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="assets/images/logo-1.png"  alt="" />';
$title2 = 'WELCOME TO';
$desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
?>  

<section class="block-single-1 sec-1 sec-tb group-ef lazy-hidden" >
  <div class="container"  >
    <div class="row grid-space-0 end center">
      <div class="col-lg-7 col-md-6">
        <div class="img  efch-1 ef-img-l">
          <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="<?php echo $img; ?>"  alt="" />        
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="divtext ">
          <div class="inner">
            <div class="inner2">
              <div  class="title2 efch-2 ef-tx-t ">
                <?php echo $title2; ?>
              </div>
              <h2 class="title efch-3 ef-tx-t">
                <?php echo $title; ?>
              </h2>
              <div class="desc efch-4 ef-tx-t">
                <?php echo $desc; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
