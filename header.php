<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title();?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700,700i|Raleway:300,300i,400,400i,600,700&amp;subset=latin-ext" rel="stylesheet">

	<?php wp_head()?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>

<body>

	<div id="nav" class="container-fluid bg-black">
		<nav class="navbar navbar-expand-lg font-white justify-content-between container">
		  <a class="navbar-brand" href="#"><img src="<?php echo get_field('ts_header_logo', 'option')['url']; ?>" alt="<?php echo get_field('ts_header_logo', 'option')['alt'] ?>"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		    <?php

					$args = array(
						'theme_location' => 'primary-navigation',
						'menu_class' => 'navbar-nav',
						'container' => false
					);

					wp_nav_menu($args);
					?>
		  </div>
		</nav>
	</div>