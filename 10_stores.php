<?php include 'include/index-top.php';?>



<section class="sec-register sec-tb">
  <div class="container">
    <div class="row grid-space-0">

      <div class="col-lg-6">
        <div class="img tRes_58">
          <img class="   lazy-hidden" data-lazy-type="image"   data-lazy-src="assets/images/img-6.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-6">
        <form class="divtext">
          <h3>LIÊN HỆ</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>

          <div class="row">
            <div class="col-sm-6">
              
              <label  class="item" >
                <span class="title">Họ</span>
                <input type="text" >
              </label>
            </div>
            <div class="col-sm-6">
              
              <label  class="item" >
                <span class="title">Tên</span>
                <input type="text" >
              </label>              
            </div>
            <div class="col-sm-6">
              
              <label  class="item" >
                <span class="title">Điện thoại</span>
                <input type="text" >
              </label>              
            </div>
            <div class="col-sm-6">
              
              <label  class="item" >
                <span class="title">Email</span>
                <input type="text" >
              </label>              
            </div>
            <div class="col-sm-6">
              <div  class="item" >
                <span class="title">Khu vực </span>
                <select name="" id="" class="select">
                  <option value="">Tp. Hồ Chí Minh</option>
                  <option value="">Ha Noi</option>
                  <option value="">Miền Bắc</option>
                  <option value="">Miền Nam</option>
                </select>
              </div>              
            </div>
            <div class="col-sm-6">
              <div  class="item" >
                <span class="title">Sản phẩm quan tâm</span>
                <select name="" id="" class="select">
                  <option value="">Ghế sofa</option>
                  <option value="">Bàn</option>
                  <option value="">Tủ</option>
                  <option value="">Giường</option>
                </select>
              </div>              
            </div>

            <div class="col-sm-12">
              
              <label  class="item" >
                <span class="title">Nội dung</span>
                <textarea name="" id="" cols="30" rows="10" ></textarea>
              </label>              
            </div>
            <div class="col-sm-12">
              <button class="btn btn2">GỬI</button>
            </div>
            
          </div>
        </form>
      </div>
      

    </div>

  </div>
</section>


<section class="sec-google-maps sec-tb" id="list-store">
  <div class="container" >

        <div class="filter-map ">
          <div class="title">TÌM CỬA HÀNG</div>

            <div class="row">
              <div class="col-sm-6">
                <div class="mb-10 ">Tỉnh / Thành phố</div>
                        <select name="city" class="select2-single" id="slb_city">    </select>       


              </div>
              <div class="col-sm-6">
                <div class="mb-10">Quận / Huyện</div>
                    <select name="district" class="select2-single" id="slb_district" tabindex="-98">
                      <option value="1">Quận 1</option>
                    </select>

              </div>

            </div>

        </div>

        <div id="map" style="height: 550px;" >    </div>

        <div class="wrap-list-store">
          <div class="top row grid-space-10">
            <div class="col-3 col-sm-4">CỬA HÀNG</div>
            <div class="col-3 col-sm-4">ĐỊA CHỈ </div>
            <div class="col-3 col-sm-2">SỐ ĐIỆN THOẠI</div>
            <div class="col-3 col-sm-2">GIỜ MỞ CỬA</div>
            
          </div>
          <ul class="map-list-store"></ul>
        </div>


  </div>
</section>



        <!-- Scripts -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="assets/js/select-maps/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLozFL2sjFSOp4AnFeIjoIXliYLJZZYe8" type="text/javascript"></script>
        <script type='text/javascript' src='assets/js/select-maps/select2.full.js'></script>
        <script type='text/javascript' src='assets/js/select-maps/common.js'></script>


<?php include 'include/index-bottom.php';?>

