        </div> <!-- WRAPPER -->

        
    </div> <!-- GRID CONTAINER -->
</div> <!-- GRID WRAPPER -->


<div id="footer">
            
            <div class="grid-container">


                <div  id="footer-cta" class="grid-x grid-padding-x align-center --index">
                    <div class="large-6 cell">
                        <h4>Stay in the know</h4>
                        <!-- Begin MailChimp Signup Form -->
                            <div id="mc_embed_signup">
                                <form action="//jonsorrentino.us12.list-manage.com/subscribe/post?u=170cc7d7b09ed97923ebe1131&amp;id=ebe9b04c09" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">

                                        <div class="mc-field-group">
                                            <input type="email" value="→ Subscribe to my mailing list." name="EMAIL" class="required email" id="mce-EMAIL">
                                        </div>

                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_170cc7d7b09ed97923ebe1131_ebe9b04c09" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="do it." name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                    </div>
                                </form>
                            </div>

                        <!--End mc_embed_signup-->
                    </div>
                </div>
                <div id="footer_links" class="grid-x grid-padding-x">
                    <div id="footer-links" class="large-7 medium-6 cell">                        
                            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => ' ', 'menu_class' => ' ', 'container' => false ) ); ?>
                    </div>

                    <div id="footer-rights" class="large-5 medium-6 cell">
                        <span>© 2017 Jon Sorrentino. All rights reserved.</span>
                    </div>
                </div>
            </div>

</div>



    <?php wp_footer(); ?>
            
            

            


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

            <script src="<?php bloginfo('template_url'); ?>/js/what-input.js"></script>
            <script src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>

            <script src="<?php bloginfo('template_url'); ?>/js/masonry.js"></script>
        

            <script>
            $(document).foundation();
            </script>

            <script>
                $('.grid').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-sizer',
                gutter:30,
                percentPosition: true
                
                });
            </script>

            <script>
            $(document).on("click","input#mce-EMAIL",function() {
            if ($("input#mce-EMAIL").val() !== "") {
            $("input#mce-EMAIL").val("") = ""
            }
            });
            </script>

            <!----- FOR HAMBURGER ------>

            <script>
            (function() {

            "use strict";

            var toggles = document.querySelectorAll(".c-hamburger");

            for (var i = toggles.length - 1; i >= 0; i--) {
            var toggle = toggles[i];
            toggleHandler(toggle);
            };

            function toggleHandler(toggle) {
            toggle.addEventListener( "click", function(e) {
            e.preventDefault();
            (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
            });
            }

            })();
            </script>

            

            <script> 
            $(document).ready(function(){
            $(".c-hamburger").click(function(){
            $("#panel").fadeToggle(300);
            });
            });
            </script>

            <!--------- FOR HAMBURGER ----------------->
</body>
</html>