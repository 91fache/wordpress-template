<!--
	
	test内容:
	
	wp_title():  <?php wp_title(); ?>
	
	bloginfo("name"):  <?php bloginfo("name"); ?>
	
	get_template_directory_uri():  <?php get_template_directory_uri(); ?>
	
	get_stylesheet_directory_uri():  <?php get_stylesheet_directory_uri(); ?>
	
	bloginfo("template_url"):  <?php bloginfo("template_url"); ?>

	next_posts_link(__("下一页")): <?php next_posts_link(__("下一页")) ?>
	
	wp_head(): 
	
	<?php 
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
	
	wp_head(); 
	
	?>



other:


安装 Disable Google Fonts 插件


参考: http://www.webzhe.com/wordpress-han-shu.html

-->