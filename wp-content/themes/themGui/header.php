<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title><?php echo wp_title() ?></title>
		<link rel="stylesheet" href="<?= get_template_directory_uri()?>/style.css" >
		<link rel="stylesheet" href="<?= get_template_directory_uri()?>/bootstrap/css/bootstrap.min.css">
		<script src="<?= get_template_directory_uri()?>/bootstrap/js/bootstrap.min.js"></script>
	</head>
<body>
	<div class="col-md-10 col-md-offset-1">
		<?php if (get_header_image()) : ?>

		<a href="<?php echo esc_url(home_url('/') ); ?>">
			<img src="<?php header_image(); ?>"  class="img-responsive" height="300px" width="100%" alt=""/>
		</a>
		<?php endif ?>