<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title><?php echo wp_title() ?></title>
		<link type="stylesheet" src="<?php get_template_directory_uri()?>/style.css" >
	</head>
<body>

	<?php if (get_header_image()) : ?>
	<a href="<?php echo esc_url(home_url('/') ); ?>">
		<img src="<?php header_image(); ?>" height="300" width="300" alt=""/>
	</a>
	<?php endif ?>