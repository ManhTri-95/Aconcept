<?php 
$img = 'assets/images/img-1.jpg';
$img2 = 'assets/images/img-8.jpg';

$title = 'Casia';

$desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
?>  




<section class="lists-3 sec-tb " >
      <?php
      for($i=1;$i<=5;$i++){ ?>
        <div class="item">

          <div class="row bottom <?php if($i%2!=0) echo 'end'; ?>">
              <div class="col-lg-6">
                  <a href="03_product_detail.php" class="img  tRes_58">
                    <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="<?php echo $img; ?>"  alt="" />      
                  </a>          
              </div>

              <div class="col-lg-6">

                <div class="divtext ">

                  <a href="03_product_detail.php" class="img2">
                    <?php
                    if($i==1){
                      echo '<span class="new"><img  src="assets/images/new.svg"  alt="" /></span>';
                    }else if($i==2){
                      echo '<span class="sale"><img  src="assets/images/sale.svg"  alt="" /></span>';
                    }
                    ?>
                    <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="<?php echo $img2; ?>"  alt="" />      
                  </a>  

                  <a class="h3 title" href="03_product_detail.php"> <?php echo $title; ?> </a>
                  <p class="desc"><?php echo $desc; ?></p>

                  <div class="price">
                    <span> Từ 4.000.000-10.000.000 VNĐ </span> 
                    
                    <?php
                    if($i==3){
                      echo '<span class="like active"><i class="icon-heart-add"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></i>';
                    }else{
                      echo '<span class="like"><i class="icon-heart cl1"></i></span>';
                    }
                    ?>

                  </div>

                </div>

                
                



              </div>
          </div>

        </div>

      <?php
      } ?>    

</section>  
