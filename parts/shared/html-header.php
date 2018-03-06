<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		
		
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.png"/>
		
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/img/burger-3.svg" type="text/css" charset="utf-8" />

		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/var.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/mobile-menu.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/foundation.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/portfolio.css" type="text/css" charset="utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fonts/ssfonts.css" type="text/css" charset="utf-8" />
		
		<noscript>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/no-js.css" type="text/css" charset="utf-8" />
		</noscript>


	
		
	
	
		
	
	
		
		<?php wp_head(); ?>
		
		<!-- Google Analytics -->
 
		 <script>
		   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		   ga('create', 'UA-51167108-1', 'jonsorrentino.com');
		   ga('send', 'pageview');

		 </script>
		
		
	</head>
	
	<body <?php body_class(); ?>>
		<div id="curtain"></div>

		 <div id="grid-wrapper">
            <div class="grid-container">



            	<!-- TOP BAR -->
                <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
                  <div class="hed-m title-bar-title"><a href="<?php echo site_url(); ?>">Ciao.</a></div>
                    <button class="c-hamburger c-hamburger--htx">
                    	<span>Toggle</span>
                    </button>
                </div>

                <nav>

                    <div id="panel">

                    	<div class="hed-m panel-title"><a href="<?php echo site_url(); ?>">Ciao.</a></div>

                    	<div class="internal">
	                        <p>Here</p>
	                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => ' ', 'menu_class' => 'pages', 'container' => false ) ); ?>
	                    </div>

	                    <div class="external">
	                    	<p>Elsewhere</p>
	                        <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => ' ', 'menu_class' => 'pages', 'container' => false ) ); ?>
	                    </div>
                    </div>

                    <div class="top-bar" id="responsive-menu">
                      <div class="top-bar-left">
                        <ul class="dropdown menu" data-dropdown-menu>
                          <li class="hed-m menu-text"><a href="<?php echo site_url(); ?>">Ciao.</a></li>
                          
                        </ul>
                      </div>
                      <div class="top-bar-right">
                        <ul class="menu">                      
                          <li class="hed-m"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></li>
                        </ul>
                      </div>
                    </div>
                </nav>
                <!-- TOP BAR -->

                <div id="wrapper">
		  		
