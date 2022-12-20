<script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->
    <!--//footer-->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
    
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $("#motivation_willingness").change(function () {
                var val = $(this).val();
                if(val == 'tinggi'){
                    $("#perception_severity").closest(".form-group").hide();
                }else{
                    $("#perception_severity").closest(".form-group").show();
                }
            });
            $("#empowerment_abilities").change(function () {
                var val = $(this).val();
                if(val == 'tinggi'){
                    $("#empowerment_desires").closest(".form-group").hide();
                    $("#norm_fulfillment").closest(".form-group").hide();
                    $("#perception_vulnerability").closest(".form-group").hide();
                    
                }else if(val == 'sedang'){
                    $("#empowerment_desires").closest(".form-group").hide();
                    $("#norm_fulfillment").closest(".form-group").hide();
                    $("#intention_aggregation").closest(".form-group").hide();
                }else if (val == 'rendah'){
                    $("#empowerment_desires").closest(".form-group").hide();
                    $("#perception_vulnerability").closest(".form-group").hide();
                    $("#intention_aggregation").closest(".form-group").hide();

                }else{
                    $("#empowerment_desires").closest(".form-group").show();
                    $("#norm_fulfillment").closest(".form-group").show();
                    $("#perception_vulnerability").closest(".form-group").show();
                    $("#intention_aggregation").closest(".form-group").show();
                }
            });
            $("#intention_aggregation").change(function () {
                var val = $(this).val();
                if(val == 'rendah'){
                    $("#socialSupport_emotionality").closest(".form-group").hide();
                    $("#empowerment_knowledge").closest(".form-group").hide();
                    $("#motivation_strength").closest(".form-group").hide();
                }else if (val == 'sedang'){
                    $("#socialSupport_emotionality").closest(".form-group").hide();
                    $("#behavior_eating").closest(".form-group").hide();
                    $("#motivation_strength").closest(".form-group").hide();
                }else{
                    $("#socialSupport_emotionality").closest(".form-group").show();
                    $("#empowerment_knowledge").closest(".form-group").show();
                    $("#motivation_strength").closest(".form-group").show();
                    $("#behavior_eating").closest(".form-group").show();
                }
            });
            $("#perception_vulnerability").change(function () {
                var val = $(this).val();
                if(val == 'tinggi'){
                    $("#socialSupport_emotionality").closest(".form-group").hide();
                    $("#empowerment_knowledge").closest(".form-group").hide();
                    $("#motivation_strength").closest(".form-group").hide();
                    $("#behavior_eating").closest(".form-group").hide();
                    $("#socialSupport_appreciation").closest(".form-group").hide();
                    $("#behavior_sexualRisk").closest(".form-group").hide();
                    $("#intention_commitmen").closest(".form-group").hide();
                    $("#socialSupport_instrumental").closest(".form-group").hide();
                    $("#behavior_personalHygine").closest(".form-group").hide();
                    $("#attitude_consistency").closest(".form-group").hide();
                    $("#attitude_spontaneity").closest(".form-group").hide();
                    $("#norm_significantPerson").closest(".form-group").hide();
                }else{
                    $("#socialSupport_emotionality").closest(".form-group").show();
                    $("#empowerment_knowledge").closest(".form-group").show();
                    $("#motivation_strength").closest(".form-group").show();
                    $("#behavior_eating").closest(".form-group").show();
                    $("#socialSupport_appreciation").closest(".form-group").show();
                    $("#behavior_sexualRisk").closest(".form-group").show();
                    $("#intention_commitmen").closest(".form-group").show();
                    $("#socialSupport_instrumental").closest(".form-group").show();
                    $("#behavior_personalHygine").closest(".form-group").show();
                    $("#attitude_consistency").closest(".form-group").show();
                    $("#attitude_spontaneity").closest(".form-group").show();
                    $("#norm_significantPerson").closest(".form-group").show();
                }
            });
            $("#norm_fulfillment").change(function () {
                var val = $(this).val();
                if(val == 'tinggi'){
                    $("#socialSupport_emotionality").closest(".form-group").hide();
                    $("#empowerment_knowledge").closest(".form-group").hide();
                    $("#behavior_eating").closest(".form-group").hide();
                }else{
                    $("#socialSupport_emotionality").closest(".form-group").show();
                    $("#empowerment_knowledge").closest(".form-group").show();
                    $("#behavior_eating").closest(".form-group").show();
                }
            }); 
            $("#motivation_strength").change(function () {
                var val = $(this).val();
                if(val == 'rendah'){
                    $("#socialSupport_appreciation").closest(".form-group").hide();
                    $("#behavior_sexualRisk").closest(".form-group").hide();
                    $("#intention_commitmen").closest(".form-group").hide();
                    $("#socialSupport_instrumental").closest(".form-group").hide();
                    $("#behavior_personalHygine").closest(".form-group").hide();
                    $("#attitude_consistency").closest(".form-group").hide();
                    $("#attitude_spontaneity").closest(".form-group").hide();
                    $("#norm_significantPerson").closest(".form-group").hide();
                }else if (val == 'sedang'){
                    $("#behavior_sexualRisk").closest(".form-group").hide();
                    $("#intention_commitmen").closest(".form-group").hide();
                    $("#socialSupport_instrumental").closest(".form-group").hide();
                    $("#behavior_personalHygine").closest(".form-group").hide();
                }else if (val == 'tinggi'){
                    $("#socialSupport_appreciation").closest(".form-group").hide();
                    $("#intention_commitmen").closest(".form-group").hide();
                    $("#socialSupport_instrumental").closest(".form-group").hide();
                    $("#behavior_personalHygine").closest(".form-group").hide();
                }else{
                    $("#socialSupport_appreciation").closest(".form-group").show();
                    $("#behavior_sexualRisk").closest(".form-group").show();
                    $("#intention_commitmen").closest(".form-group").show();
                    $("#socialSupport_instrumental").closest(".form-group").show();
                    $("#behavior_personalHygine").closest(".form-group").show();
                    $("#attitude_consistency").closest(".form-group").show();
                    $("#attitude_spontaneity").closest(".form-group").show();
                    $("#norm_significantPerson").closest(".form-group").show();
                }
            });
            $("#behavior_eating").change(function () {
                var val = $(this).val();
                if(val == 'rendah'){
                    $("#socialSupport_appreciation").closest(".form-group").hide();
                    $("#behavior_sexualRisk").closest(".form-group").hide();
                    $("#intention_commitmen").closest(".form-group").hide();
                    $("#socialSupport_instrumental").closest(".form-group").hide();
                    $("#behavior_personalHygine").closest(".form-group").hide();
                    $("#attitude_consistency").closest(".form-group").hide();
                    $("#attitude_spontaneity").closest(".form-group").hide();
                    $("#norm_significantPerson").closest(".form-group").hide();
                }else if (val == 'sedang'){
                    $("#socialSupport_appreciation").closest(".form-group").hide();
                    $("#behavior_sexualRisk").closest(".form-group").hide();
                    $("#intention_commitmen").closest(".form-group").hide();
                    $("#socialSupport_instrumental").closest(".form-group").hide();
                    $("#behavior_personalHygine").closest(".form-group").hide();
                    $("#attitude_consistency").closest(".form-group").hide();
                    $("#attitude_spontaneity").closest(".form-group").hide();
                    $("#norm_significantPerson").closest(".form-group").hide();
                }else{
                    $("#socialSupport_appreciation").closest(".form-group").show();
                    $("#behavior_sexualRisk").closest(".form-group").show();
                    $("#intention_commitmen").closest(".form-group").show();
                    $("#socialSupport_instrumental").closest(".form-group").show();
                    $("#behavior_personalHygine").closest(".form-group").show();
                    $("#attitude_consistency").closest(".form-group").show();
                    $("#attitude_spontaneity").closest(".form-group").show();
                    $("#norm_significantPerson").closest(".form-group").show();
                }
            });
            $("#socialSupport_appreciation").change(function () {
                var val = $(this).val();
                if(val == 'rendah'){
                    $("#attitude_spontaneity").closest(".form-group").hide();
                    $("#norm_significantPerson").closest(".form-group").hide();
                }else if (val == 'sedang'){
                    $("#attitude_spontaneity").closest(".form-group").hide();
                    $("#norm_significantPerson").closest(".form-group").hide();
                }else{
                    $("#attitude_consistency").closest(".form-group").show();
                    $("#attitude_spontaneity").closest(".form-group").show();
                    $("#norm_significantPerson").closest(".form-group").show();
                }
            });
            $("#behavior_sexualRisk").change(function () {
                var val = $(this).val();
                if(val == 'rendah'){
                    $("#attitude_consistency").closest(".form-group").hide();
                    $("#attitude_spontaneity").closest(".form-group").hide();
                    $("#norm_significantPerson").closest(".form-group").hide();
                }else if (val == 'sedang'){
                    $("#attitude_consistency").closest(".form-group").hide();
                    $("#norm_significantPerson").closest(".form-group").hide();
                }else{
                    $("#attitude_consistency").closest(".form-group").show();
                    $("#attitude_spontaneity").closest(".form-group").show();
                    $("#norm_significantPerson").closest(".form-group").show();
                }
            });
            
            
            
            
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>