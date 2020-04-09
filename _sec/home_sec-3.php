<?php 
$img = '//via.placeholder.com/310x500';
$title = ['PHÒNG KHÁCH','PHÒNG ĂN','PHÒNG NGỦ','TRANG TRÍ'];
?>  

<section class="lists-1 sec-b sec-3 group-ef lazy-hidden" >
  <div class="container"  >
    <div class="row grid-space-20">
      <?php
      for($i=0;$i<=3;$i++){ ?>
        <div class="col-sm-6 col-md-6 col-lg-3  efch-<?php echo $i+1; ?> ef-img-t">
          <a href="02_category_product.php" class="item" >
            <div class="img  tRes_150">
              <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="<?php echo $img; ?>"  alt="" />      

              <div class="divtext ">
                <h3 class="title"> <?php echo $title[$i]; ?>  </h3>
                <div class="more">
                  <span class="readmore">Xem thêm <i class="icon-arrow-14"></i></span>
                </div>
              </div>

              <h3 class="title2"><span><?php echo $title[$i]; ?></span> </h3>

            </div>

          </a>
        </div>
      <?php
      } ?>

    </div>
  </div>
</section>  
