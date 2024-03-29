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
                    <a href="<?php the_permalink(); ?>" title="" rel="category tag">
					<?php the_title(); ?>
					</a>
				</h2>
				<div class="post_meta">
					<span class="post_meta_date"> 发布时间&middot; <?php the_time("Y年m月d日"); ?></span>
					<a href="<?php the_permalink(); ?>" title="" rel="category tag">
					[<?php if(function_exists('the_views')) { the_views(); } ?>]
					</a>
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
		<span class="previous"><?php next_post_link("%link", "&laquo; 上一篇 "); ?></span>
		<span class="next"><?php previous_post_link("%link", "下一篇 &raquo;"); ?></span>
        <!-- debug: 本段内容由 single.php 生成  -->
		</div>


	</div><!-- #content end -->

<?php
// 引入 footer.php
get_footer();
?>
