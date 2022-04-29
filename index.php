<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/estilos.css">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body background="<?php bloginfo('template_url');?>/stmpddd.jpg">
	<header class="container-flip">
		<h1><?php bloginfo('name');?></h1>

		<img src="<?php bloginfo('template_url');?>/stmmp.jpg" class="stmp" width="100">
           	<ul class="menu">
           	<li>Follow</li>
           	<li>Limitles</li>
           	<li>Reboot</li>
           	<li>Quantum</li>
           	<li>Good Morn</li>
           	<li>Starlight</li> 
           	<li>Funk</li>
           	</ul>     
    </header>
<section>
    <?php $articulos= new WP_Query([
                   'showposts' => 3,
                  ]);
while ($articulos->have_posts()) {
    $articulos->the_post(); ?>




<?php the_post_thumbnail("large");?> 
<h2><?php the_title();?></h2>
<?php the_excerpt();?>

    





<?php } ?>


</div><img src="<?php bloginfo('template_url');?>/follow.jpg" class="grafico">
<h2 class="texto1">FOLLOW</h2>
<h4 class="texto2"><p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></h4>




</div><img src="<?php bloginfo('template_url');?>/Limitless.jpg" class="grafico" width="500">
<h2 class="texto1">LIMITLESS</h2>
<h4 class="texto2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>



</div><img src="<?php bloginfo('template_url');?>/Reboot.jpg" class="grafico" width="500">
<h2 class="texto1">REBOOT</h2>
<h4 class="texto2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>




</div><img src="<?php bloginfo('template_url');?>/Quantum.jpg" class="grafico" width="500">
<h2 class="texto1">QUANTUM</h2>
<h4 class="texto2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>




</div><img src="<?php bloginfo('template_url');?>/God.jpg" class="grafico" width="500">
<h2 class="texto1">GOOD MORNING</h2>
<h4 class="texto2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>



</div><img src="<?php bloginfo('template_url');?>/Starlight.jpg" class="grafico" width="500">
<h2 class="texto" >STARLIGHT</h2>
<h4 class="texto2">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>



</div><img src="<?php bloginfo('template_url');?>/Funk.jpg" class="grafico" width="500">
<h2 class="texto" >FUNK</h2>
<h4 class="texto2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
</section>
<footer class="container-flip">
	
</footer>





</body>
</html>