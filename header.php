<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta <?php bloginfo('charset');?>>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('title'); ?> | <?php bloginfo('description'); ?> </title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>>
	<p>this is a header</p>