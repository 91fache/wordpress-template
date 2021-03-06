<?php
// header.php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="generator" content="WordPress <?php bloginfo("version"); ?>" />
	<meta name="orig" content="来自于 twentysixteen 主题" />
	<meta name="description" content="<?php bloginfo("description"); ?>" />
	<meta name="google-site-verification" content="15762f8Dum-f4qP5k8LE3p2OKIqlMu9Y7heeMoHw-N8" />
	<title> <?php
if (is_home()) { echo bloginfo('name'); }
elseif (is_404()) { bloginfo('name'); echo ' - Oops, this is a 404 page'; }
else if ( is_search() ) { bloginfo('name'); echo (' - Search Results');}
else {wp_title('');  echo (' - '); bloginfo('name');}
?></title>
	
	<link href="<?php bloginfo("template_url"); ?>/favicon.ico" rel="bookmark" type="image/x-icon" /> 
	<link href="<?php bloginfo("template_url"); ?>/favicon.ico" rel="icon" type="image/x-icon" /> 
	<link href="<?php bloginfo("template_url"); ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/sticky-footer.css">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
		<?php 
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
		
	//wp_head(); 
	?>
<?php 
// 引入 header-baidu.php
get_header("baidu"); 
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

