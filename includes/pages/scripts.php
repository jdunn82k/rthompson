<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollspy.min.js" type="text/javascript"></script>
<!-- Magnific Popup -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<!--Counter-->
<script src="js/waypoints.min.js" type="text/javascript"></script>
<script src="js/jquery.counterup.min.js" type="text/javascript"></script>
<!--common script for all pages-->

<script src="js/jquery.app.js"></script>

<script>
    $(document).ready(function(){
        $(".no-scroll").off();
        $(".no-scroll").on("click", function(e){
            e.preventDefault();
            var url = $(this).data("href");
            window.location = url;
        });

    });


</script>
</body>
</html>