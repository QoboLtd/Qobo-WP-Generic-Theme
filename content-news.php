<?php
/**
 * The template used for displaying news content
 *
 * @package Qobo WP Theme
 */
?>



		<?php $the_query = new WP_Query(array('posts_per_page'=>-1, 'category_name'=>'news')) ?>
		<h1>NEWS &amp; PRESS</h1>

		<?php while ($the_query -> have_posts()) : $the_query -> the_post();
		?>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="news-item">
				<figure>
					<?php
					if (has_post_thumbnail()) :
						the_post_thumbnail(array(260, 180));

					endif;
					?>
				</figure>
				<div class="details">
					<h4 class='news-title'><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h4>
					<div class="description">
						<p>
							<?php echo implode(' ', array_slice(explode(' ', $post -> post_content), 0, 50)); ?>...
						</p>
						<p>
							<a title="<?php the_title(); ?>"
							href="<?php the_permalink(); ?>"><span>Read more <i
								class="fa fa-angle-double-right"></i></span></a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
<!-- #post-## -->
