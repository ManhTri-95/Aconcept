<?php include 'include/index-top.php';?>

<section id="bannertop" class="lazy-hidden tRes_48 subbanner" data-lazy-type="bg" data-lazy-src="assets/images/banner-6.jpg" >
  <div class="divtext"><h1 >TUYỂN DỤNG</h1></div>
</section>

<main id="main" class="page-career-detail">
    <div class="container">
        <section class="career sec-tb">
            <div class="max670">
               <h6 class="w6 text-career-center">GIA NHẬP VÀO ĐỘI NGŨ</h5>
               <h5 class="w6 text-career-center title-aconcept">aconcept</h5>
               <p class="content-career">Để trở thành một thành viên trong gia đình Aconcept</p>
            </div>
        </section>
        <div>
            <div>
                <form class="max800">
                    <div class="row">
                        <div class="col-5 col-sm-5">
                            <div class="item">
                                <span class="title-career-info">Vị trí</span>
                                <select name="" id="" class="select select-career">
                                    <option value="">Nhân viên bán hàng</option>
                                    <option value="">Nhân viên bán hàng</option>
                                    <option value="">Nhân viên bán hàng</option>
                                    <option value="">Nhân viên bán hàng</option>
                                <select>
                            </div>
                        </div>
                        <div class="col-5 col-sm-5">
                            <div class="item">
                                <span class="title-career-info">Nơi làm việc</span>
                                <select name="" id="" class="select select-career">
                                    <option value="">Tp. Hồ Chí Minh</option>
                                    <option value="">Tp. Hồ Chí Minh</option>
                                    <option value="">Tp. Hồ Chí Minh</option>
                                    <option value="">Tp. Hồ Chí Minh</option>
                                <select>
                            </div>
                        </div>
                        <div class="col-2 col-sm-2">
                            <button class="btn search-career"><i class="icon-search"></i></button>
                        </div>
                    </div>
                </form>
                <div class="wrap-list-career">
                    <div class="row grid-space-10 titlediv ">
                        <div class="col-4 col-sm-4">Vị trí</div>
                        <div class="col-4 col-sm-4">phân loại tuyển dụng</div>
                        <div class="col-4 col-sm-4">Địa điểm làm việc</div>
                    </div>
                    <ul class="list-career-info" id="career-info">
                        <li class = "row grid-space-10 my-career-info">
                            <span class="col-4 col-sm-4">Nhân viên tư vấn</span>
                            <span class="col-4 col-sm-4">Toàn thời gian</span>
                            <span class="col-4 col-sm-4">Tp. Hồ Chí Minh</span>
                        </li>
                        <li class = "row grid-space-10 my-career-info">
                            <span class="col-4 col-sm-4">Nhân viên tư vấn</span>
                            <span class="col-4 col-sm-4">Toàn thời gian</span>
                            <span class="col-4 col-sm-4">Tp. Hồ Chí Minh</span>
                        </li>
                        <li class = "row grid-space-10 my-career-info">
                            <span class="col-4 col-sm-4">Nhân viên tư vấn</span>
                            <span class="col-4 col-sm-4">Toàn thời gian</span>
                            <span class="col-4 col-sm-4">Tp. Hồ Chí Minh</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'include/index-bottom.php';?>

<script>
// Add active class to the current li
var header = document.getElementById("career-info");
var btns = header.getElementsByClassName("my-career-info");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
</script>