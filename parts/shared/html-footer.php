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
                    <div id="footer-links" class="large-7 medium-12 cell">                        
                            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => ' ', 'menu_class' => ' ', 'container' => false ) ); ?>
                    </div>

                    <div id="footer-rights" class="large-5 medium-12 cell">
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

            
        

            <script>
            $(document).foundation();
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

            <!-------- FOR HAMBURGER -------->

            <!----- FADE OUT PAGE ---->

           <script>
            
                $(document).ready(function(){
                $("#curtain").delay(250).fadeOut(300);
                $("a").click(function(event){
                    event.preventDefault();
                    linkLocation = this.href;
                    $("#grid-wrapper").fadeOut(300, redirectPage);      
                });

                function redirectPage() {
                    window.location = linkLocation;
                }
            });
            </script>

            <!-- FADE OUT PAGE -->
</body>
</html>