<?php
/**
 * @package Infinity
 */

$infinity_hide_tags         =  Kirki::get_option( 'infinity', 'post_layout_hide_tags' );
$infinity_hide_share        =  Kirki::get_option( 'infinity', 'post_layout_hide_share' );
$infinity_hide_read_more    =  Kirki::get_option( 'infinity', 'post_layout_hide_read_more' );

$class = '';
if( has_post_thumbnail() ) {
	$item_class = 'col-md-8';
}
?>

<article <?php post_class('post-list-item row'); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumb col-md-4">
			<a href="<?php echo esc_url( get_permalink()); ?>">
				<?php the_post_thumbnail( 'post-thumb' ); ?>
			</a>
		</div>
	<?php } ?>
	<div class="<?php echo esc_attr($item_class ? $item_class . ' ' : ''); ?>post-content">
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php infinity_posted_on(); ?>
				<span class="author vcard"><i class="fa fa-pencil"></i> <?php echo get_the_author(); ?></span>
				<span class="categories-links"><i class="fa fa-folder-open-o"></i> <?php echo get_the_category_list( __( ', ', 'infinity' ) ) ?> </span>
				<span class="comments-counts"><i class="fa fa-comments"></i><?php comments_number( '0', '1', '%' ); ?> <?php comments_number( '', '', '' ); ?></span>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<div class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</div><!-- .entry-header -->

		<div class="entry-content">
			<?php infinity_print_excerpt(180); ?>
			<?php if (!$infinity_hide_read_more) { ?>
				<p class="read-more"><a href="<?php the_permalink( $post->ID ) ?>"><?php esc_html_e( 'Read More', 'infinity' ); ?><i class="fa fa-angle-double-right"></i></a></p>
			<?php } ?>
		</div><!-- .entry-content -->

		<div class="entry-footer">
			<?php if ( $infinity_hide_tags || $infinity_hide_share ):
				$class = 'col-xs-12';
			else:
				$class = 'col-sm-6';
			endif;
			?>

			<div class="row middle">
				<?php if (!$infinity_hide_tags) : ?>
					<div class="<?php echo esc_attr($class); ?>">
						<?php the_tags( '<i class="fa fa-tags"></i> Tags: ', ', ' ); ?>
					</div>
				<?php endif; ?>
				<?php if (!$infinity_hide_share) : ?>
					<div class="<?php echo esc_attr($class); ?> <?php if (!$infinity_hide_tags) { echo 'end-sm'; }?>">
						<div class="post-share-buttons">
							<span><?php echo __( 'Share ', 'infinity' ); ?></span>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
							   onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=455,width=600'); return false;">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php echo rawurlencode(the_title('', '', false)); ?>%20-%20<?php the_permalink(); ?>"
							   onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=455,width=600'); return false;">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"
							   onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=455,width=600'); return false;">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- .entry-footer-->

	</div>
</article><!-- #post-## -->