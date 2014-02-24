		<meta charset="utf-8" />
		<title>eSPKKPA - Sistem Pendaftaran Klien Kaunseling Perkhidmatan Awam</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--[if lte IE 9]><script src="libraries/javascripts/html5.js"></script><![endif]-->
		<link rel="shortcut icon" href="libraries/images/jpa_logo.ico" />
		<link rel="stylesheet" href="libraries/css/front.css" />
		<link rel="stylesheet" href="libraries/css/font.css" />
		<link rel="stylesheet" href="libraries/css/foundation.min.css" />
		<link rel="stylesheet" href="libraries/css/app.css" />
		<link rel="stylesheet" href="libraries/css/flexslider.css" />
		<link rel="stylesheet" href="libraries/css/responsive.css" />
		<link rel="stylesheet" href="libraries/css/options.css" />
		<link rel="stylesheet" href="libraries/css/prettyPhoto.css" />
		<script type='text/javascript' src='libraries/javascripts/jquery-1.8.3.js'></script>
		<script type="text/javascript" src="libraries/javascripts/livedate.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function () {

				var menu_speed = 'normal';
				var animation_effect = 'slide_down';

				jQuery("nav#top-menu > ul > li > ul").hide();

				var windowWidth = jQuery(window).width();

				jQuery(window).resize(function() {
					windowWidth = jQuery(window).width();
				}).resize();

				jQuery("nav#top-menu > ul > li").hover(function () {
					if (animation_effect == 'fade_in')
						jQuery('ul', this).stop(true, true).fadeIn(menu_speed);
					if (animation_effect == 'slide_down')
						jQuery('ul', this).stop(true, true).slideDown(menu_speed);
					}, function () {
						if (animation_effect == 'fade_in')
							jQuery('ul', this).stop(true, true).fadeOut(menu_speed);
						if (animation_effect == 'slide_down')
							jQuery('ul', this).stop(true, true).slideUp(menu_speed);
				});
				jQuery('nav#top-menu > ul > li').mouseleave(function() {
					jQuery("nav#top-menu > ul > li > ul").hide();
				});
			});
		</script>
		
		<style type="text/css" >
			#pg-0 , #pg-1 , #pg-2 , .panel-grid-cell .panel { margin-bottom: 40px; } 
			#pgc-1-0 , #pgc-1-1 , #pgc-1-2 { width:33.333%; } 
			#pg-1 .panel-grid-cell , #pg-2 .panel-grid-cell { float:left; } 
			#pgc-2-0 { width:66.725%; } 
			#pgc-2-1 { width:33.275%; } 
			.panel-grid-cell .panel:last-child { margin-bottom: 0 !important } 
			.panel-grid { margin: 0 -10px 0 -10px } 
			.panel-grid-cell { padding: 0 10px 0 10px } 
			@media (max-width:769px) { 
				#pg-0 .panel-grid-cell , #pg-1 .panel-grid-cell , #pg-2 .panel-grid-cell , #pg-3 .panel-grid-cell { float:none; } 
				#pg-0 .panel-grid-cell , #pg-1 .panel-grid-cell , #pg-2 .panel-grid-cell , #pg-3 .panel-grid-cell { width:auto; } 
				#pgc-1-0 , #pgc-1-1 , #pgc-2-0 { margin-bottom:40px; } 
				.panel-grid { margin-left: 0 !important; margin-right: 0 !important; } 
				.panel-grid-cell { padding: 0 !important; }  
			} 
		</style>
		
		