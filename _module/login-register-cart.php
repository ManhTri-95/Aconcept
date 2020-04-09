<div class="modal fade formpopup" id="myLogin" data-show="flogin" role="dialog">
  <div class="modal-dialog-cart">
   
    <div class="modal-content">
      <span class="close" data-dismiss="modal"><i class="icon-close"></i></span>
      <form class="inner formlogin">
      <p class="text-center">Vui lòng hoàn thành các bước dưới đây để thanh toán</p>
      <div class="row">
          <div class="col-6 border-left">
              <h5 class="title-design-cart">Bạn đã có tài khoản ?</h5>
              <p class="text-muted">Chào mừng bạn đã quay trở lại. Vui lòng đăng nhập tài khoản.</p>
            <p class="winput">
                <input class="input-cart" type="text" placeholder="Email">
            </p>
            <p class="winput">
                <input class="input-cart" type="password" id="password"  placeholder="Password">
            </p>
            <div class="row">
              <div class="col-sm-7 col-xs-7">
                <label class="remember" ><input type="checkbox">Ghi nhớ đăng nhập</label>
              </div>
              <div class="col-sm-5 col-xs-5">
                <a href="#" class="switchform" data-form="fforgot"><p class="switchform-cart">Quên mật khẩu?<p></a>
              </div>
            </div>
            <!-- <p class="wremember">
                <label class="remember" ><input type="checkbox">Ghi nhớ đăng nhập</label>
                <a href="#" class="switchform" data-form="fforgot">Quên mật khẩu?</a>
            </p> -->
            <p class="text-center">
                <button class="btn register-cart noshadow full">ĐĂNG NHẬP</button>
            </p>
          </div>
          <!-- <hr width="1" size="500"> -->
          <div class="col-6">
                <h5 class="title-design-cart">Bạn chưa đăng kí ?</h5>
                <p class="">Đăng kí để nhận thông tin ưu đãi hấp dẫn từ Aconcept.</p>
               
                <p class="text-center">
                    <button class="btn register-cart-1 noshadow full">ĐĂNG KÝ</button>
                </p>
                <div class="row">
                    <div class="col-sm-6 col-xs-6 fb-gg">
                        <a href="#" class="fb fbregister-cart"><i class="icon-facebook"></i>ĐĂNG KÝ</a>
                    </div>
                    <div class="col-sm-6 col-xs-6 fb-gg">
                      <a href="#" class="gg ggregister-cart"> <i class="icon-google"></i> ĐĂNG KÝ</a>
                    </div>
                </div>
                    <div class="col-12 formregister-cart">
                      <p class="title-formregister-cart"> Hoặc</p>
                    </div>
                    <p class="text-center">
                        <button class="btn register-cart noshadow full">THANH TOÁN KHÔNG CẦN ĐĂNG KÍ</button>
                    </p>
                    <P class="text-danger">Nếu mua hàng qua chứ năng này bạn sẽ không nhận được ưu đãi từ thành viên</p>
                </div>
            </div>
          </div>
      </div>

    </form>

<!-- Modal -->


<script>
(function($){
    $(document).ready(function(){
        $(".switchform").click(function(){
          var f = $(this).data('form');
          $(".formpopup").attr('data-show',f);
        }); 
        $('.formpopup .spass').click(function(){
          if($(this).hasClass('ac')){
            $(this).removeClass('ac');
            $('#password').attr('type','password');
          }else {
            $(this).addClass('ac');
            $('#password').attr('type','text');
          }

        }); 
    });
})(jQuery);   
</script>