 <!-- Page Footer-->

      <footer class="section footer-corporate context-dark">


        <div class="footer-corporate-bottom-panel">

          <div class="container">

            <div class="row row-10 align-items-md-center">

              <div class="col-sm-6 col-md-4 text-sm-right text-md-center">

                <div>

                  <ul class="list-inline list-inline-sm footer-social-list-2">

                    <li><a class="icon fa fa-facebook" href="#"></a></li>

                    <li><a class="icon fa fa-twitter" href="#"></a></li>

                    <li><a class="icon fa fa-google-plus" href="#"></a></li>

                    <li><a class="icon fa fa-instagram" href="#"></a></li>

                  </ul>

                </div>

              </div>

              <div class="col-sm-6 col-md-4 order-sm-first">

                <!-- Rights-->

                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>CCNTS</span>. All rights reserved

                </p>

              </div>

              <div class="col-sm-6 col-md-4 text-md-right">    
               <div class="rights">Design & Develop By Swapnil Talele</a></div>
                <!--<div class="rights"><a href="disclaimer.php">Disclaimer</a></div> -->
              </div>

            </div>

          </div>

        </div>

      </footer>

    </div>

    <!-- Global Mailform Output-->

    <div class="snackbars" id="form-output-global"></div>

    <!-- Javascript-->

    <script src="js/core.min.js"></script>

    <script src="js/script.js"></script>
<script type="text/javascript">
      jQuery(function ($) {
    $(".rd-navbar-main-outer ul a")
        .click(function(e) {
            var link = $(this);

            var item = link.parent("li");
            
            if (item.hasClass("active")) {
                item.removeClass("active").children("a").removeClass("active");
            } else {
                item.addClass("active").children("a").addClass("active");
            }

            if (item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function () { 
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        })
        .each(function() {
            var link = $(this);
            if (link.get(0).href === location.href) {
                link.addClass("active").parents("li").addClass("active");
                return false;
            }
        });
});

    </script>

  </body>

</html>