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
	<meta name="description" content="<?php bloginfo("description"); ?>" />
	<title> <?php wp_title(" - ",true,'right'); ?> <?php bloginfo("name"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css" type="text/css" media="screen" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
		<?php 
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
		
	wp_head(); 
	
	?>
</head>
<body>

	
<div id="wrap" class="body_wrap">
<?php
// 引入 header-top.php
get_header("top"); 
?>
	
<?php 
	// 引入侧边栏  sidebar.php
	// get_sidebar(); 
?>

<div id="right">

