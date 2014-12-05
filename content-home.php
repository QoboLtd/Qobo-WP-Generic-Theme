<?php
/**
 * The template used for displaying page content
 *
 * @package Qobo WP Theme
 *
 */
include_once WP_PLUGIN_DIR . '/qobo-real-estates/scripts/qobo_services.php';

$service = new Qobo_Services ();

$resultset = $service->get_featured_projects ( "Residential" );
// print_r($resultset);
$json_result = json_decode ( $resultset, true );

if (! isset ( $json_result ['projects'] )) {
	echo "No Results Found!";
} else {
	
	// echo "<pre>";
	// print_r ( $json_result );
	// echo "</pre>";
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
		the_content ();
		?>
		<div id="property-finder" class="row">
			<div class="col-sm-3">
				<article class="refine-search-results last">
				<?php
				
				ob_start ();
				the_widget ( 'wpb_widget', array (
						'title' => 'Property Finder' 
				), array (
						'before_widget' => '<h1>Property Finder</h1>',
						'after_widget' => '',
						'before_title' => '',
						'after_title' => '' 
				) );
				$contents = ob_get_clean ();
				echo $contents;
				?>
				</article>
			</div>
			<div class="col-sm-9">
				<h1>Developments of Choice</h1>
				<!--property-->
				<div class="row">
				
				<?php
				$three = 0;
				for($i = 0; $i < sizeof ( $json_result ['projects'] ) && $three < 3; $i ++) {
					
					?>   
					<div class="col-sm-4 property-item-container">
						<div class="property-item no-padding">
							<div class="col-sm-12">
								<figure>
									<a
										href="<?php echo get_bloginfo('url')?>/projects?id=<?php echo $json_result['projects'][$i]['project_id']?>&project_type=Residential"><img
										src="<?php echo $json_result ['projects'] [$i] ['project_front_image'][0] ?>"
										alt=""></a>
								</figure>
							</div>
							<div class="col-sm-12">
								<div class="details">
									<a
										href="<?php echo get_bloginfo('url')?>/projects?id=<?php echo $json_result['projects'][$i]['project_id']?>&project_type=Residential">
										<h1 class="property-title"><?php echo $json_result ['projects'] [$i] ['project_name']?></h1>
									</a>
									<div class="description clearfix ">
										<p>
										<?php
					
					$sentence = $json_result ['projects'] [$i] ['project_long_descr'];
					echo implode ( ' ', array_slice ( explode ( ' ', $sentence ), 0, 10 ) );
					?>... <br> <a
												href="<?php echo get_bloginfo('url')?>/projects?id=<?php echo $json_result['projects'][$i]['project_id']?>&project_type=Residential"><span>More
													info <i class="fa fa-angle-double-right"></i>
											</span></a>
										</p>

									</div>

								</div>
							</div>
							<div class="col-sm-12">
								<div class="price ">
									<span class="ribbon-text">Permanent Residency Approved</span>
								</div>
							</div>
						</div>
					</div>
					<?php $three++; ?>
					<!--//property-->
 	<?php } ?>
				</div>
			</div>
		</div>
		<div id="news" class="row">
			
		  <?php $the_query = new WP_Query( array('posts_per_page'=>4, 'category_name'=>'news') ); ?>
		  <h1>NEWS &amp; PRESS</h1>
		
		  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
  
  				<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="news-item">
					<figure>
  				<?php
					if (has_post_thumbnail ()) :
						the_post_thumbnail ( array (
								260,
								180 
						) );
					
					
					
					
					
					
					
					 endif;
					?>
				</figure>
					<div class="details">
						<h4 class='news-title'>
							<a href="<?php the_permalink() ?>">
						<?php the_title(); ?>
					</a>
						</h4>
						<div class="description">
							<p>
					<?php echo implode(' ', array_slice(explode(' ', $post->post_content), 0, 50));?>...
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
 		 <?php endwhile;?>
			</div>
	</div>
	<!-- .entry-content -->
</article>
<!-- #post-## -->
