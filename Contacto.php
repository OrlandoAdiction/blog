<?php /*Template Name: Contacto*/
get_header(); ?>
<center>

<div class="container">
	<h1><?php the_title();?></h1>
	<?php echo do_shortcode('[contact-form-7 id="117" title="Formulario de contacto 1"]');?>

</div>
</center>


<?php get_footer(); ?>