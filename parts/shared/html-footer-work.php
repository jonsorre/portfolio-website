		</div> <!-- WRAPPER -->

        
    </div> <!-- GRID CONTAINER -->
</div> <!-- GRID WRAPPER -->


<div id="footer">
            
            <div class="grid-container">


                <div  id="footer-cta" class="grid-x grid-padding-x align-center --work">
                    <div class="large-6 cell">
                        <h4><a href="mailto:hello@jonsorrentino.com">Why wait? <br> Let's work together now.</a></h4>
                    </div>
                </div>
                <div id="footer_links" class="grid-x grid-padding-x">
                    <div id="footer-links" class="large-6 medium-6 cell">                        
                            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => ' ', 'menu_class' => ' ', 'container' => false ) ); ?>
                    </div>

                    <div id="footer-rights" class="large-6 medium-6 cell">
                        <span>© 2017 Jon Sorrentino. All rights reserved.</span>
                    </div>
                </div>
            </div>

</div>



	<?php wp_footer(); ?>


			<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
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