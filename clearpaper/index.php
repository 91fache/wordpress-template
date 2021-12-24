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
					<a rel="category tag">
						<?php the_category(",") ?>
					</a>
					&middot;
					<span class="post_meta_date"> <?php the_time("Y年m月d日"); ?></span>
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
		<span class="previous"><?php next_post_link("%link", "&laquo; 上一页 "); ?></span>
		<span class="next"><?php previous_post_link("%link", "下一页 &raquo;"); ?></span>
        <!-- debug本段内容由 index.php 生成  -->
		</div>


	</div><!-- #content end -->

<?php
// 引入 footer.php
get_footer();
?>
