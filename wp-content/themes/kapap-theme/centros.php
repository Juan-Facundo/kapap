<?php
/*
Template name: listar centros
*/
?>

<?php get_header(); ?>
</head>
<body>

<?php
$backgrounds = new WP_Query(array(
  'post_type' => 'centroskapap',
  'orderby' => 'rand',
  'showposts' => 10,
  'post_status'=>'publish'
));
?>

<div class="lista_contenedor">

<?php
// The Loop
if (have_posts()) :
  while ($backgrounds->have_posts()) :
  $backgrounds->the_post();
  $post_thumb_id = get_post_thumbnail_id($post->ID);
  $image = wp_get_attachment_image_src($post_thumb_id,'single-post-thumbnail');
  $slug = get_post( $post )->post_name;
?>

  <div class="centro_item">

  <h5>
    <a href='<?php echo site_url();?>/centros-kapap/<?php echo $slug;?>'>
      <?php the_title();?>
    </a>
  </h5>

  <?php
  $numero =  simple_fields_value('numero');
  $calle =  simple_fields_value('calle');
  $cpostal =  simple_fields_value('cpostal');
  $ciudad =  simple_fields_value('ciudad');
  $provincia =  simple_fields_value('provincia');
  $pais =  simple_fields_value('pais');
  $instructor =  simple_fields_value('instructor');
  ?>

    <div class="centro_info">
      <?php echo 'Domicilio: '.$calle.' '.$numero.', '.$cpostal.'<br />';?>
      <?php echo $ciudad.', '.$provincia.', '.$pais.'<br />';?>
      <?php echo 'Instructor a Cargo: '.$instructor.'<br />';?>
    </div>

  </div><!-- centro_item -->
  <?php
  endwhile;
  endif;
  wp_reset_postdata();
  ?>

</div><!-- lista_contenedor -->
<?php if ($themify->layout != "sidebar-none"): get_sidebar(); endif; ?>
<?php get_footer(); ?>
