<?php
/*
Template name: INIT
*/
?>


<meta charset="utf-8">

  <!-- SlidesJS Required (if responsive): Sets the page width to the device width. -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0"/>
  <!-- End SlidesJS Required -->

  <!-- CSS for slidesjs.com example 
  <link rel="stylesheet" href="css/example.css"> -->

  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- End CSS for slidesjs.com example -->

  <!-- SlidesJS Optional: If you'd like to use this design -->
  <style>
    body {
      -webkit-font-smoothing: antialiased;
      font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
      color: #232525;
      padding-top:70px;
    }

    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
      background-image: url(img/btns-next-prev.png);
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
    /* End SlidesJS Optional */

    /* SlidesJS Required: These styles are required 
      if you'd like a responsive slideshow

      se agregan algunas para titulo y demás */

    #slides {
      display: none
    }

    .container {
      margin: 20px auto 0px;
      width: 70%
    }

  /* Estilos para init page */
  .slidesjs-container {
    border: 4px solid rgba(0,0,0,0.4);
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    }
  div.back {
    position: fixed;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    z-index: -5;
    opacity: 0.4;
    }
  div.back img.back_image {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    max-width: 50%;
    margin: auto;
    }
  h1.site-title, h4.site-desc {
    text-shadow: black 3px 3px;
    margin: -10px 10px 5px;
    }
  a.entrar {
    position: absolute;
    background-color: rgba(0,0,0,0.3);
    display: block;
    text-decoration: none;
    font-weight: bold;
    z-index: 20;
    text-align: center;
    }
  a.entrar:hover {
    color: white;
    background-color: rgba(0,0,0,0.6);
    text-decoration: none;
    }
  .addthis_toolbox.addthis_floating_style.nomobile {
    background: none !important;
    margin-left: 20px;
}
	.addthis_toolbox.addthis_default_style.mobile {
	display: none;
	}
   
    /* For larger displays */
    @media only screen and (min-width: 1200px) {
      h1.site-title {
        font-size: 35px;
      	text-align: center;
        }
      h4.site-desc {
        font-size: 20px;
      	text-align: center;

        }
      .container {
        width: 65%;
      }

      a.entrar {
        font-size: 25px;
        padding: 20px;
        top: 20px;
        right: 20px;
        }
    }

    /* For smaller displays like laptops */
    @media only screen and (max-width: 1199px) {
      h1.site-title {
        font-size: 30px;
        text-align: center;
        }
      h4.site-desc {
        font-size: 18px;
        text-align: center;
        }
      a.entrar {
        font-size: 20px;
        padding: 15px;
        top: 20px;
        right: 20px;
        }
    }

    /* For normal displays like desktop pc */
    @media only screen and (max-width: 1024px) {
      h1.site-title {
        font-size: 30px;
        }
      h4.site-desc {
        font-size: 18px;
        }
      a.entrar {
        font-size: 20px;
        padding: 15px;
	      }
    }

    /* For tablets & smart phones */
    @media only screen and (max-width: 767px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }
    }

    /* For smartphones */
    @media only screen and (max-width: 480px) {
      #main-title {
        position: absolute;
	top: 10px;
	left: 10px;
	}
    h1.site-title {
    font-size: 16px;
    text-align: left;
    margin: 0px;
        }
      h4.site-desc {
        font-size: 10px;
      	text-align: left;
	margin: 0px;
        }
      .container {
        width: 90%;
  position: absolute;
  top: 11%;
  left: 5%;
      }
      a.entrar {
      font-size: 16px;
      padding: 10px;
      top: 10px;
      right: 10px;
      }
  .addthis_toolbox.addthis_floating_style.nomobile {
    display: none;
  }
  .addthis_toolbox.addthis_default_style.mobile {
  display: inline;
  position: absolute;
  bottom: 10%;
  left: 5%;
    }
    }
    @media only screen and (max-aspect-ratio: 540/400) {
      div.back img.back_image {
      max-width: none; 
      max-height: 50%;
      }
     }


/* fin estilos slider */

</style><!-- fin estilos -->
<?php wp_head(); ?>
</head>

<!-- inicia la pagina INIT -->
<body>

<!-- rutina de imagenes aleatorias -->
<?php
$backgrounds = new WP_Query(array(
  'post_type' => 'backimages',
  'orderby' => 'rand',
  'showposts' => 1,
  'post_status'=>'publish'
));
// The Loop
if (have_posts()) :
  while ($backgrounds->have_posts()) :
  $backgrounds->the_post();
  $post_thumb_id = get_post_thumbnail_id($post->ID);
  $image = wp_get_attachment_image_src($post_thumb_id, 'single-post-thumbnail');
  $url = $image[0];
?>
<div class="back">
<img class="back_image" src="<?php echo $url; ?>" />
</div>
<?php
  endwhile;
endif;
// end loop
wp_reset_postdata();
?><!-- fin rutina de imagenes -->

<!-- rutina de impersion de posts -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div id="main-title">       
  <h1 class="site-title"><?php echo get_bloginfo('name'); ?></h1> 
</div>

<?php get_template_part( 'post-data' ); ?>
</div><!-- end of #post-<?php the_ID(); ?> -->
<?php //get_template_part( 'init-footer'); ?>

<?php
endwhile;
get_template_part( 'loop-nav' );
else :
get_template_part( 'loop-no-posts' );
endif;
?>
<!-- fin rutina impresion de posts -->

<a class="entrar" href="<?php echo site_url(); ?>/blog/" alt="blog">INGRESE</a>

<!-- AddThis Button BEGIN ->
<div class="addthis_toolbox addthis_floating_style addthis_32x32_style nomobile">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_linkedin"></a>
<a class="addthis_button_email"></a>
<a class="addthis_button_compact"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514e348247cf0e38"></script>
<!- AddThis Button END -->

<!-- SlidesJS Required: Start Slides -->
<!-- The container is used to define the width of the slideshow -->

<!-- rutina init slides aleatorios -->
<div class="container">
  <div id="slides">

    <?php
    $initslides = new WP_Query(array(
      'post_type' => 'initslides',
      'orderby' => 'rand',
      'showposts' => 5,
      'post_status'=>'publish'
    ));
    // The Loop
    if (have_posts()) :
      while ($initslides->have_posts()) :
      $initslides->the_post();
      $post_thumb_id = get_post_thumbnail_id($post->ID);
      $img = wp_get_attachment_image_src($post_thumb_id, 'single-post-thumbnail');
      $url = $img[0];?>

    <img src="<?php echo $url; ?>" alt="kapap neuquen"/>

      <?php
      endwhile;
    endif;
    // end loop
    wp_reset_postdata();
    ?><!--fin init slides aleatorios -->
  </div><!-- fin slides -->
</div><!-- fin container -->
<!-- End SlidesJS Required: Start Slides -->


<!-- SlidesJS Required: Link to jQuery -->
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<!-- End SlidesJS Required -->

<!-- SlidesJS Required: Link to jquery.slides.js -->
<script src="js/jquery.slides.min.js"></script>
<!-- End SlidesJS Required -->

<!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
<script>
  $(function() {
    $('#slides').slidesjs({
      width: 470,
      height: 264,
      play: {
        active: true,
        auto: true,
        interval: 9000,
        swap: true
      }
    });
  });
</script>
<!-- End SlidesJS Required -->
<div id="initwidget" class="entrar">
  <?php dynamic_sidebar( 'faco' ); ?>
</div>
<!-- AddThis Button BEGIN ->
<div class="addthis_toolbox addthis_default_style addthis_32x32_stylei mobile">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_linkedin"></a>
<a class="addthis_button_email"></a>
<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514e348247cf0e38"></script>
<!- AddThis Button END -->

</div>
</body>
<!-- fin INIT -->
</html>
