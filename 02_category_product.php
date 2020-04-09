<?php include 'include/index-top.php';?>

<?php include '_sec/banner.php';?>




<section class="sec-filter">
  <div class="container">
    <div class="filter">
      <div class="bottomsearch"><span class="t1">Nâng cao</span><span class="t2">Thu gọn</span></div>


<div class="row">
  <div class="col-lg-9">
    

      <div class="row grid-space-10">
        <div class="col-6 col-md-3">
          <div class="item">
            <div class="key"> <span>Nội thất</span> <i class="icon-arrow-3"></i></div>
            <select name="" class="selectpicker"  data-live-search="true" data-hide-disabled="true" data-actions-box="true" data-count-selected-text="Đã chọn" data-selected-text-format="count>1">
              <option value="Phòng khách" selected="">Phòng khách</option>
              <option value="Phòng ngủ">Phòng ngủ</option>
              <option value="Phòng bếp">Phòng bếp</option>
            </select>


          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="item">
            <div class="key"> <span>Danh mục</span> <i class="icon-arrow-3"></i></div>
            <select name="" class="selectpicker" multiple data-live-search="true" data-hide-disabled="true" data-actions-box="true" data-count-selected-text="Đã chọn" data-selected-text-format="count>1">
              <option value="Bàn" >Bàn</option>                
              <option value="Bàn 1" selected="" >Bàn 1</option>
              <option value="Bàn 2" >Bàn 2</option>
            </select>            
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="item">
            <div class="key"> <span>Màu sắc</span> <i class="icon-arrow-3"></i></div>
            <select name="" class="selectpicker" multiple data-live-search="true" data-hide-disabled="true" data-actions-box="true" data-count-selected-text="Đã chọn" data-selected-text-format="count>1">
              <option value="Trắng">Trắng</option>                
              <option value="Xanh" selected="">Xanh</option>
              <option value="Đỏ" >Đỏ</option>
            </select>   
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="item">
            <div class="key"> <span>Chất liệu</span> <i class="icon-arrow-3"></i></div>
            <select name="" class="selectpicker" multiple data-live-search="true" data-hide-disabled="true" data-actions-box="true" data-count-selected-text="Đã chọn" data-selected-text-format="count>1">
              <option value="Gỗ">Gỗ</option>                
              <option value="Gỗ 1" selected="">Gỗ 1</option>
              <option value="Gỗ 2" >Gỗ 2</option>
            </select>              
          </div>
        </div>

      </div>

      <div class="showmore" style="display: none;">
        <div class="row grid-space-10">
          <?php
          for($i=1;$i<=2;$i++){ ?>
          <div class="col-6 col-md-3">  
            <div class="item">
              <div class="key"> <span>Chất liệu</span> <i class="icon-arrow-3"></i></div>
              <select name="" class="selectpicker" multiple data-live-search="true" data-hide-disabled="true" data-actions-box="true" data-count-selected-text="Đã chọn" data-selected-text-format="count>1">
                <option value="Gỗ">Gỗ</option>                
                <option value="Gỗ 1" selected="">Gỗ 1</option>
                <option value="Gỗ 2" >Gỗ 2</option>
              </select>              
            </div>
          </div>
          <?php 
          } ?>
          <div class="col-12  col-md-6">  
            <div class="item wrangeprice toggleClass">
              <div class="key toggle"> <span>Giá</span> <i class="icon-arrow-3"></i></div>
              <div class="value toggle">Từ <span id="amount"></span> VNĐ</div>
              <div class="rangeprice">

                <div id="slider-range"></div>              
                <input type="hidden" id="amount1" name="amount1">
                <input type="hidden" id="amount2" name="amount2">
                <script src="assets/js/jquery-ui.js"></script>
                <script>
                (function($){
                    $(document).ready(function(){

                      $( "#slider-range" ).slider({
                        range: true,
                        min: 0,
                        max: 500,
                        values: [ 100, 300 ],
                        slide: function( event, ui ) {
                          //$( "#amount" ).html( "Price Range : $" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                          $( "#amount" ).html( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                        $( "#amount1" ).val(ui.values[ 0 ]);
                        $( "#amount2" ).val(ui.values[ 1 ]);
                        }
                      });
                      $( "#amount" ).html( $( "#slider-range" ).slider( "values", 0 ) +    " - " + $( "#slider-range" ).slider( "values", 1 ) );
                      $( "#amount1" ).val($( "#slider-range" ).slider( "values", 0 ));
                      $( "#amount2" ).val($( "#slider-range" ).slider( "values", 1 ));
                  
                    }); 
                })(jQuery); 
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  <div class="col-lg-3 group-btn">

      <button type="reset" class="btnreset"><img  src="assets/images/svg/reset.svg"  alt="" /> Thiết lập lại</button>
      <button  class="btn btnfilter"><i class="icon-search-2"></i></button>

  </div>

</div>






    </div>


    
  </div>
</section>





<main id="main">
  <div class="container">
    


    <div class="worder clearfix">
      <div class="iorder">
        <img  src="assets/images/order.svg"  alt="" />
        <select name="" id="">
          <option value="">Sắp xếp mặc định</option>
          <option value="">Sắp xếp mặc định</option>
        </select>
      </div>
    </div>
    <?php include '_sec/category_sec-1.php';?>

    <?php include '_sec/category_sec-2.php';?>

  </div>
</main>


<script>
// JavaScript Document
(function($){
    $(document).ready(function(){
      var   hd = $('#header'),
            hh = hd.outerHeight();

        function scrolltolist() {   
            var id  = $('#cate-list-product'),
                top = $(id).offset().top;
            $('html, body').animate({
              scrollTop: $(id).offset().top - hh
              }, 1000)
        }            

        // Click scroll a
          $(".btnfilter").click(function (event) {
            scrolltolist();
          });

          $(".iorder select").on('change',function (event) {
            scrolltolist();
          });

    }); 
})(jQuery); 

  
</script>

<?php include 'include/index-bottom.php';?>

