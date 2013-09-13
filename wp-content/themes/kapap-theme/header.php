<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<?php
/** Themify Default Variables
 @var object */
	global $themify; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<title><?php if (is_home() || is_front_page()) { echo bloginfo('name'); } else { echo wp_title(''); } ?></title>

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<!-- wp_header -->
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43071065-1', 'kapapnqn.com.ar');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=337044836397870";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php themify_body_start(); //hook ?>
<div id="pagewrap">

    <div id="headerwrap">
    	<?php themify_header_before(); //hook ?>
        <div id="header" class="pagewidth">
        	<?php themify_header_start(); //hook ?>
    
            <?php echo themify_logo_image('site_logo'); ?>

            <div id="site-description"><?php bloginfo('description'); ?></div>
    
                    
            <div class="social-widget">
                <?php dynamic_sidebar('social-widget'); ?>
    
                <?php if(!themify_check('setting-exclude_rss')): ?>
                    <div class="rss"><a href="<?php if(themify_get('setting-custom_feed_url') != ""){ echo themify_get('setting-custom_feed_url'); } else { echo bloginfo('rss2_url'); } ?>">RSS</a></div>
                <?php endif ?>
            </div>
            <!--/social widget --> 
    
            <!-- header wdiegt -->
            <div class="header-widget">
                <?php dynamic_sidebar('header-widget'); ?>
            </div>
            <!--/header widget --> 
    
		<?php if(!themify_check('setting-exclude_search_form')): ?>
			<div id="searchform-wrap">
				<div id="search-icon" class="mobile-button"></div>
				<?php get_search_form(); ?>
			</div>
			<!-- /#searchform-wrap -->
		<?php endif ?>
    
            <div id="main-nav-wrap">
                <div id="menu-icon" class="mobile-button"></div>
                <div id="nav-bar">
                    <?php if (function_exists('wp_nav_menu')) {
                        wp_nav_menu(array('theme_location' => 'main-nav' , 'fallback_cb' => 'themify_default_main_nav' , 'container'  => '' , 'menu_id' => 'main-nav' , 'menu_class' => 'main-nav'));
                    } else {
                        themify_default_main_nav();
                    } ?>
                </div><!--/nav bar -->
			</div>
            <!-- /#main-nav-wrap -->

			<?php themify_header_end(); //hook ?>
        </div>
        <!--/header -->
        <?php themify_header_after(); //hook ?>
    </div>
    <!-- /headerwrap -->

	<div id="body" class="clearfix">
    <?php themify_layout_before(); //hook ?>
