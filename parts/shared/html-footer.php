        </div> <!-- WRAPPER -->

        <div id="yesorno">
            <h3 class="hed-xl">Studio Sorrentino is <a href="mailto:hello@jonsorrentino">AVAILABLE</a> for freelance projects</h3>
            <h3 class="hed-xl odd">Studio Sorrentino is <a href="mailto:hello@jonsorrentino">AVAILABLE</a> for freelance projects</h3>
            <h3 class="hed-xl">Studio Sorrentino is <a href="mailto:hello@jonsorrentino">AVAILABLE</a> for freelance projects</h3>
            <h3 class="hed-xl odd">Studio Sorrentino is <a href="mailto:hello@jonsorrentino">AVAILABLE</a> for freelance projects</h3>
            <h3 class="hed-xl">Studio Sorrentino is <a href="mailto:hello@jonsorrentino">AVAILABLE</a> for freelance projects</h3>
        </div>

        <div id="footer">
            
            <div class="grid-container">

                <div id="footer_links" class="grid-x grid-padding-x">
                    <div id="footer-links" class="large-8 medium-12 cell">                        
                            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => ' ', 'menu_class' => ' ', 'container' => false ) ); ?>
                    </div>

                    <div id="footer-rights" class="large-4 medium-12 cell">
                        <article class="body">© 2017 Jon Sorrentino. All rights reserved.</article>
                    </div>
                </div>
            </div>

        </div>
        
    </div> <!-- GRID CONTAINER -->
</div> <!-- GRID WRAPPER -->




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