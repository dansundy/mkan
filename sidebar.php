<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WPBoiler
 * @since WPBoiler 1.0
 */
?>
		<div id="secondary" class="site-sidebar widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
      <aside id="search" class="widget widget_search">
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
      </aside>

      <aside id="rss-link" class="widget widget-rss">
        <!-- <h1 class="widget-title">RSS</h1> -->
        <a class="rss" href="http://mykidsarenapping.com/feed">RSS Feed</a>
      </aside>
      
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'wpboiler' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'wpboiler' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
