<div class="footer">
    <div class="container">
        <div class="footer-left agileits-w3layouts">
            <p>&copy; 2018 ChimexRealityEvent. All Rights Reserved | Design by  <a href="#http://w3layouts.com/"> HabaTech</a></p>
        </div> 
        <div class="footer-right">
            <ul>
                <li><a href="#" class="f1"></a></li>
                <li><a href="#" class="f2"></a></li>
                <li><a href="#" class="f3"></a></li>
                <li><a href="#" class="f4"></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer --> 
<script src="js/smoothscroll.min.js"></script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){		
                event.preventDefault();
        
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
</script>
<!-- //end-smooth-scrolling -->	
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */
        
        $().UItoTop({ easingType: 'easeOutQuart' });
        
    });
</script>
<!-- //smooth-scrolling-of-move-up --> 
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>