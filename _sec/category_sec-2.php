<?php 
$img = 'assets/images/img-8.jpg';
$title = ' ZunigCDN 5,9,12,20 Tiêu đề Ghế đơn Kenora';
?>  
<section id="cate-list-product" class="lists-4 sec-tb " >
    <div class="row grid-space-60">
      <?php
      for($i=1;$i<=6;$i++){ ?>
        <div class="col-md-4 col-sm-6">
          <div class="item">
                    <a href="03_product_detail.php" class="img">
                      <?php
                      if($i==1){
                        echo '<span class="new"><img  src="assets/images/new.svg"  alt="" /></span>';
                      }else if($i==2){
                        echo '<span class="sale"><img  src="assets/images/sale.svg"  alt="" /></span>';
                      }
                      ?>
                      <img class="lazy-hidden " data-lazy-type="image" src="assets/images/image.svg" data-lazy-src="<?php echo $img; ?>"  alt="" />      
                    </a>  
                  <div class="divtext ">
                    <div class="wtitle">
                      <a class="h3 title" href="03_product_detail.php"> <?php echo $title; ?> </a>
                      <?php
                      if($i==3 || $i==4){
                        echo '<p class="color">2 màu sắc</p>';
                      }
                      ?>

                    </div>
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
      <?php
      } ?>    
    </div>
    <div class="showmore text-center">
      <a href="#" class="btn btn1">XEM THÊM</a>
    </div>
</section>  
