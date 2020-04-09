<div class="fb-messenger">
  <span class="btnFb">Send me a message</span>
  <div  class='fb-page' data-adapt-container-width='true' data-height='300' data-hide-cover='false' data-href='https://www.facebook.com/LegendCoffeeTour/' data-show-facepile='true' data-show-posts='false' data-small-header='false' data-tabs='messages' data-width='850'></div>
</div>

<script>
// JavaScript Document
(function($){
    $(document).ready(function(){
        // Facebook
        $('.fb-messenger .btnFb').click(function(){
            $('.fb-messenger').toggleClass('active');
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        }); 
    });
})(jQuery);   
</script>
      