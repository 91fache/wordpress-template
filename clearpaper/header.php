<?php
// header.php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="generator" content="WordPress 4.5.2" />
	<meta name="orig" content="来自于 twentysixteen 主题" />
	<title>就要发车</title>
	<link rel="stylesheet" href="/wp-content/themes/clearpaper-1/style.css" type="text/css" media="screen" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
</head>
<body>

	
<div id="wrap">

	
<?php 
	// 引入侧边栏  sidebar.php
	get_sidebar(); 
?>

<div id="right">

	<div id="head">
	<a href="/" class="head_content">就要发车</a>
	</div><!-- #head end -->
	
