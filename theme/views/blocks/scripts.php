<script src="/static/js/jquery-2.2.4.min.js"></script>
    <script src="/static/js/jquery.colorbox-min.js"></script>
    <script src="/static/js/slick.min.js"></script>
    <script src="/static/js/device.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(window).scroll(function () {
          if ($(this).scrollTop() > 0) {
            $(".toupper").fadeIn();
          } else {
            $(".toupper").fadeOut();
          }
        });

        $(".toupper").click(function () {
          $("html, body").animate({ scrollTop: 0 }, 600);
          return false;
        });
      });
    </script>
    <script>
      $(".movie-modal").colorbox({
        onOpen: function () {
          $("#colorbox").addClass("movie");
        },
        onClosed: function () {
          $("#colorbox").removeClass("movie");
        },
      });
      $(function () {
        $(".colorbox").colorbox({
          transition: "none",
          iframe: true,
          speed: 500,
          innerWidth: 998,
          innerHeight: 4000,
          maxWidth: 1000,
          scrolling: false,
        });
        $(".movie-modal").colorbox({
          transition: "none",
          iframe: true,
          speed: 500,
          innerWidth: 790,
          innerHeight: 445,
          maxWidth: "90%",
          right: 0,
          scrolling: false,
        });
        $(".slider").slick({
          prevArrow:
            '<img src="/static/img/common/prev.png" class="slide-arrow prev-arrow">',
          nextArrow:
            '<img src="/static/img/common/next.png" class="slide-arrow next-arrow">',
          centerMode: true,
          dots: false,
          focusOnSelect: true,
          slidesToShow: 1,
          variableWidth: true,
        });
      });
    </script>
    <script src="/static/js/modals.js"></script>
	  <script src="/static/js/collapse.js"></script>
    <script>
    var player = new Playerjs({id:"player", file:"/static/js/player-here/playlist-ft.txt"});
    </script>
    <script>
    var player = new Playerjs({id:"playersp", file:"/static/js/player-here/playlist-ft.txt"});
    </script>
    <script src="/static/js/jquery.mb.YTPlayer.min.js"></script>
    <script src="/static/js/top/top.js"></script>