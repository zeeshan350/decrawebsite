<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Infinity
 */
?>

</div><!-- #content -->
<?php if ( is_active_sidebar( 'footer' ) ) { ?>
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer2' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer3' ); ?>
				</div>
			</div>
		</div>
		<div class="social">
			<?php wp_nav_menu( array(
				'theme_location'  => 'social',
				'menu_id'         => 'social-menu',
				'container_class' => 'social-menu',
				'fallback_cb'     => false
			) ); ?>
		</div>
	</footer>
<?php } ?>
<?php if ( Kirki::get_option( 'infinity', 'copyright_layout_enable' ) == 1 ) { ?>
	<div class="copyright">
		<div class="container">
			<div class="row middle">
				<div class="col-xs-12 center">
					<?php echo html_entity_decode( Kirki::get_option( 'infinity', 'copyright_layout_text' ) ); ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
</div><!-- #page -->

<?php if( Kirki::get_option( 'infinity', 'site_general_back_to_top' ) == 1 ) { ?>
	<a class="scrollup"><i class="fa fa-angle-up"></i>Go to top</a>
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>