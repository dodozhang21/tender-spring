<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package tenderSpring
 * @since tenderSpring 1.0
 */
?>

	</div><!-- #main -->

	

</div><!-- #container -->


<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
		<?php do_action( 'tenderSpring_credits' ); ?>
		<?php printf( __( 'Proudly powered by %1$s', 'tender-spring' ), '<a href="https://wordpress.org/" title="A Semantic Personal Publishing Platform" rel="generator">WordPress</a> | ' ); ?>
		<?php printf( __( 'Theme %1$s by %2$s.', 'tender-spring' ), 'Tender Spring', '<a href="http://regretless.com/" rel="designer">Ying Zhang</a>' ); ?>
	</div><!-- .site-info -->
	<?php printf( __( '%1$s', 'tender-spring' ), '<a id="top" href="#top">Back to top</a>' ); ?>
</footer><!-- .site-footer .site-footer -->


</div><!-- #page .hfeed .site -->


<?php wp_footer(); ?>


</body>
</html>