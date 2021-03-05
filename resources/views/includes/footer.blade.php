<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
 <br><br>
<footer id="dk-footer" class="fixed-bottom"> 
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © <?php echo date("Y"); ?>, All Right Reserved GSI OUTSOURCING </span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu text-white">
                            <ul>
                                <li>
                                    <a href="/terms-service"><b>Terms</b></a>
                                </li>
                                <li>
                                    <a href="/privacy/explanation"><b>Privacy Policy</b></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="toTop" class="back-to-top">
            <button class="btn" style="background-color:#D00C27; color:white" title="Back to Top" style="display: block;"  id="myBtn">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
</footer>
 <script>
    $(document).ready(function(){
        $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $('#toTop').fadeIn();
                } else {
                    $('#toTop').fadeOut();
                }
            });
        $('#toTop').click(function(){
            $("html, body").animate({ scrollTop: 0}, 600);
            return false;
        });
    });
</script>