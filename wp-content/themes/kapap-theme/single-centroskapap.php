<?php get_header(); ?>

<?php
global $themify; ?>

<?php if( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="contenedor_centro">
  <div class="desc_centro">

  <h1>
    Centro de entrenamiento
    <?php the_title(); ?>
  </h1>

  <?php 
    $field_values = simple_fields_values("numero,calle,cpostal,ciudad,pais,instructor");
    $members_values = simple_fields_values("miembro");
    $numero =  simple_fields_value('numero');
    $calle =  simple_fields_value('calle');
    $cpostal =  simple_fields_value('cpostal');
    $ciudad =  simple_fields_value('ciudad');
    $pais =  simple_fields_value('pais');
    $instructor =  simple_fields_value('instructor');
  ?>

  <h6>
    Domicilio:
  </h6>

  <?php
    echo $calle.' '.$numero.', '.$ciudad.', '.$cpostal.', '.$pais;
  ?>

  <h6>
    Instructor a Cargo:
  </h6>

  <?php echo $instructor; ?>

  <?php the_content(); ?>

  <?php 
  $ctx = stream_context_create(array(
    'http' => array(
      'timeout' => 10
    )
  )
  );
  $lugar_query = 'http://nominatim.openstreetmap.org/search?street='.$numero.'+'.$calle.'&city='.$ciudad.'&country='.$pais.'&format=json&limit=1';
  $lugar_query = str_replace(' ', '+', $lugar_query);
  $lugar_result = file_get_contents($lugar_query, 0, $ctx);
  $lugar = json_decode($lugar_result);

  $area=( $lugar[0]->boundingbox );
  $lat=$lugar[0]->lat;
  $lon=$lugar[0]->lon;
  $izq=( $area[0]);
  $arr=( $area[0]);
  $der=( $area[3]);
  $aba=( $area[2]);

  $query="http://www.openstreetmap.org/?mlat=$lat&mlon=$lon&zoom=16#map=16/$lat/$lon&layer=mapnik";
  ?>
  </div><!-- desc_centro -->
  <iframe class="mapa_centro" scrolling="no"
    src="<?php echo $query; ?>">
  </iframe>

<?php endwhile; ?>

<div class="miembros_centro">
  <h5>
    Miembros de <?php the_title(); ?>:
  </h5>
  <?php
    foreach ($members_values as $mvalue) {
      $nivel = get_cimyFieldValue($mvalue, 'NIVEL');

      $user_info = get_userdata($mvalue);
        $user_email = $user_info->user_email;
        $first_name = $user_info-> user_firstname;
        $last_name = $user_info-> user_lastname;
  ?>
  <div class="miembro">
    <div class="img_cont">
      <?php echo get_avatar( $mvalue, full ); ?>
    </div>

    <div class="datos_cont">
    <?php
      echo '<br />'.$first_name.' '.$last_name;
      echo '<br />'.$user_email;
      //echo '<br />Nivel: '.$nivel;
  ?>
    </div>
  </div><!-- miembro -->

  <?php
    }
  ?>

</div><!-- miembros_centro -->

</div><!-- contenedor_centro -->
<?php //if ($themify->layout != "sidebar-none"): get_sidebar(); endif; ?>
<?php get_footer(); ?>
