<?php get_header();?>

<section>
	<center><h3><?php the_title();?></h3></center>
	<h5>Resumen: <?php the_field('resumen');?></h5>
	<div class="imgg"> 
		<center><?php the_post_thumbnail("large");?></center> 
	</div>

	<div>
		<h5><?php the_content();?></h5>
		<h6>Fuente: <?php the_field('fuente');?></h6>

	</div>
</section>
<?php get_footer();?>


