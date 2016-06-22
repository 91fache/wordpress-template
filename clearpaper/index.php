<?php
// 引入 header.php
get_header(); 
?>

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
		<span class="next"><a href="" >下一页 &raquo;</a></span>
		</div>		

	
	</div><!-- #content end -->
	
<?php 
// 引入 footer.php
get_footer(); 
?>
