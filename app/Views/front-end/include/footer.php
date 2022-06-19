<footer class="site-footer">	  
    <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
                <a href="#">News</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->

<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script> -->



<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
<script type='text/javascript' src='vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='vendor/Camera-master/scripts/camera.min.js'></script>
<script type="text/javascript" src="vendor/bootstrap-mega-menu/js/menu.js"></script>
<script type="text/javascript" src="vendor/WOW-master/dist/wow.min.js"></script>
<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="vendor/jquery.appear.js"></script>
<script type="text/javascript" src="vendor/jquery.countTo.js"></script>
<script type="text/javascript" src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="js/owl-cust-slider.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
<script>
function progressBarScroll() {
  let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
      height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
      scrolled = (winScroll / height) * 100;
  document.getElementById("progressBar").style.width = scrolled + "%";
}
window.onscroll = function () {
  progressBarScroll();
};
</script>	
<script>
$(document).ready(function(){
 $('.toggle').click(function(){
   $('.sidebar-contact').toggleClass('active')
   $('.toggle').toggleClass('active')
 })
})
</script>

<script>
$(document).ready(function(){
    $(".first-result-tab").click(function(){
        $(".first-result-panel").toggle(500);
        
    });

    $(".second-result-tab").click(function(){
        $(".second-result-panel").toggle(500);
    });

    $(".third-result-tab").click(function(){
        $(".third-result-panel").toggle(500);
    });

    $(".four-result-tab").click(function(){
        $(".four-result-panel").toggle(500);
    });

    $(".five-result-tab").click(function(){
        $(".five-result-panel").toggle(500);
    });

    $(".six-result-tab").click(function(){
        $(".six-result-panel").toggle(500);
    });

    $(".seven-result-tab").click(function(){
        $(".seven-result-panel").toggle(500);
    });

    $(".eight-result-tab").click(function(){
        $(".eight-result-panel").toggle(500);
    });
    
});
</script>

</body>
</html>