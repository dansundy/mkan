<?php
/**
 * The template for displaying the footer.
 */
?>
    </div><!-- .wrapper -->
	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="wrapper">
  		<?php	if ( ! is_404() ) 
  			get_sidebar( 'footer' );
  		?>
  		<div class="site-info">
  			<p>&copy; Copyright <a href="<?php echo home_url( '/' ); ?>">My Kids Are Napping</a> <?php echo date('Y') ?>.</p>
  		</div><!-- .site-info -->
    </div>
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>


</body>
</html>