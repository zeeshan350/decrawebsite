<?php
/**
 * Shortcode attributes
 * @var $text
 * @var $link
 * @var $add_icon
 * @var $type
 * @var $icon_fontawesome
 * @var $icon_openiconic
 * @var $icon_typicons
 * @var $icon_entypo
 * @var $icon_linecons
 * @var $icon_pe7stroke
 * @var $icon_renovation
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Button
 */
$output = '';
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

//parse link
$link = ( '||' === $link ) ? '' : $link;
$link = vc_build_link( $link );
$a_href = $link['url'];
$a_title = $link['title'];
$a_target = $link['target'];

// Enqueue needed icon font.
vc_icon_element_fonts_enqueue( $type );
$iconClass = isset( ${"icon_" . $type} ) ? esc_attr( ${"icon_" . $type} ) : 'fa fa-adjust';

?>
 <a <?php echo 'class="btn thememove-btn ' . esc_attr( $el_class ) . '"'; ?>
	href="<?php echo esc_url( $a_href ); ?>"
	title="<?php echo esc_attr( $a_title ); ?>"
	target="<?php echo esc_attr( $a_target ); ?>">
	<span>
		<?php echo $text; ?>
		<?php if ( 'yes' == $add_icon ) { ?>
			<i class="<?php echo esc_attr($iconClass); ?>"></i>
		<?php } ?>
	</span>
</a>

<!--<div class='featured featured-video featured-has-link featured-has-icon featured-has-content'>
  <div class='featured-header'><img alt='Manufacturing' src='<?php esc_url( get_permalink() ); ?>'/></div>
  <div class='featured-content'>
    <h3 class='featured-title text-uppercase'><i class='fa fa-fa fa-industry'></i><?php echo $text; ?></h3>
    <p class='featured-desc'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis bibendum odio, vel suscipit justo finibus.</p>
    <a <?php echo 'class="btn btn-md btn-minimal ' . esc_attr( $el_class ) . '"'; ?>
	href="<?php echo esc_url( $a_href ); ?>"
	title="<?php echo esc_attr( $a_title ); ?>"
	target="<?php echo esc_attr( $a_target ); ?>">READ MORE</a></div>
</div> -->
