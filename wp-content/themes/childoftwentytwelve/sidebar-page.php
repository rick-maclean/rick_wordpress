<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
		
			<aside id="social-icons" class="widget clear"> 
				<h3 class="widget-title">Connect with us!</h3>
				<ul>
					<li class="social-twitter">
						<a href="#" title="Follow RickWordpress on Twitter" target="_blank">Follow Red 30 on Twitter</a>
					</li>
					<li class="social-facebook">
						<a href="#" title="Like RickWordpress on Facebook" target="_blank">Like Red 30 on Facebook</a>
					</li>
					<li class="social-flickr">
						<a href="#" title="Check out RickWordpress's photos on Flickr" target="_blank">Check out Red 30's photos on Flickr</a>
					</li>
					<li class="social-contact">
						<a href="#" title="Get in touch with RickWordpress" target="_blank">Get in touch with Red 30</a>
					</li>
				</ul>
			</aside>
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>