<div class="widget">
  <h3>Instagram</h3>
  <div id="instagram_list" class="wrap_instagram row grid-space-10"></div>
  <script src="assets/js/jquery.instafeed.min.js" type="text/javascript"></script>
  <script>
    jQuery(document).ready(function($) {
      var feed = new Instafeed({
        get: "user",
        target: "instagram_list",
        accessToken: "2209322954.1654d0c.9e2972ce62754c6880df622fdc7c1f4e",
        userId: 2209322954,
        clientId: "",
        limit: 6,
        resolution: "low_resolution",
        resolution2: "standard_resolution",
        template: '<div class="col-xs-4 col-sm-4"><div class="item"><a target="_blank" href="\{\{link\}\}"><img src="\{\{image\}\}" alt="\{\{caption\}\}" /></a></div></div>'
      });
      feed.run();
    });
  </script>
</div>