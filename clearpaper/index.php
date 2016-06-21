<?php

//get_header(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>就要发车</title>
<link rel="stylesheet" href="/wp-content/themes/clearpaper-1/style.css" type="text/css" media="screen" />
<meta name="generator" content="WordPress 4.5.2" />
<meta name="orig" content="来自于 twentysixteen 主题" />
</head>
<body>

	
<div id="wrap">

<div id="left">
	<div id="logo">
		<h1><a href="http://www.91fache.com/"><span>FACHE</span></a></h1>
	</div><!-- #logo end -->
	
	<div id="menu" class="left_box">
		<ul>
			<li><a href="https://www.91fache.com/wp-login.php">登录</a></li>
		</ul>
	</div><!-- #menu end -->
	
	<div id="info">
		<a href="https://www.91fache.com/wp-login.php?action=logout&_wpnonce=55a3671ac2" class="info_about">登出</a>
		<a href="http://www.91fache.com/" title="" class="info_right">Copyright &copy; 2016</a>
		<div class="clear"></div>
	</div><!-- #info end -->
		
</div><!-- #left end -->
<div id="right">

	<div id="head">
	<a href="/" class="head_content">就要发车</a>
	</div><!-- #head end -->
	
	<div id="content">
		
		<div id="posts">
		
		
		<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
			
		?>
			<div class="post">
				<h2 class="post_title">
					<?php the_title(); ?>
				</h2>
				<div class="post_meta">
					<a href="" title="" rel="category tag">
						<?php the_tags(); ?> 段子
					</a> 
					&middot; 
					<span class="post_meta_date"> <?php the_date(); ?></span>
				</div>
								
				<div class="post_entry">
						<?php the_content(); ?>
				</div><!-- .post_entry end -->																		
				
			</div><!-- .post end -->	
		
		<?php
			// End the loop.
			endwhile;
		?>
		
				
		</div><!-- #posts end -->
		
		<div id="nav">
		<span class="previous"><a href="" >&laquo; 上一页</a></span>		
		<span class="next"><a href="" >&raquo; 下一页</a></span>
		</div>		

	
	</div><!-- #content end -->
	
</div><!-- #right end -->

<div class="clear"></div>

</div><!-- wrap end -->

	
<?php 
//get_sidebar(); 
?>
<?php 
//get_footer(); 
?>
