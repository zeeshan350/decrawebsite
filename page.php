<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Infinity
 */

$infinity_custom_logo         = get_post_meta( get_the_ID(), "infinity_custom_logo", true );
$infinity_page_layout_private = get_post_meta( get_the_ID(), "infinity_page_layout_private", true );
$infinity_custom_class        = get_post_meta( get_the_ID(), "infinity_custom_class", true );
$infinity_sticky_menu         = get_post_meta( get_the_ID(), "infinity_sticky_menu", true );
$infinity_disable_comment     = get_post_meta( get_the_ID(), "infinity_disable_comment", true );
$infinity_bread_crumb_enable  = get_post_meta( get_the_ID(), "infinity_bread_crumb_enable", true );

$infinity_disable_title       = get_post_meta( get_the_ID(), "infinity_disable_title", true );
$infinity_heading_bg_image    = get_post_meta( get_the_ID(), "infinity_heading_image", true );
$infinity_title_style         = get_post_meta( get_the_ID(), "infinity_title_style",   true );
$infinity_disable_parallax    = get_post_meta( get_the_ID(), "infinity_disable_parallax", true );
$infinity_heading_bg_color    = get_post_meta( get_the_ID(), "infinity_heading_bg_color", true );
$infinity_heading_color       = get_post_meta( get_the_ID(), "infinity_heading_color", true );
$infinity_alt_title           = get_post_meta( get_the_ID(), "infinity_alt_title", true );

if("default" == $infinity_title_style || '' == $infinity_title_style) {
	$infinity_title_style       =  Kirki::get_option( 'infinity', 'page_style_heading_style' );
	$infinity_heading_bg_image  =  Kirki::get_option( 'infinity', 'page_heading_bg_image' );
	$infinity_heading_bg_color  =  Kirki::get_option( 'infinity', 'page_heading_bg_color' );
	$infinity_heading_color     =  Kirki::get_option( 'infinity', 'page_style_heading_font_color' );
	$infinity_disable_parallax  =  !Kirki::get_option( 'infinity', 'page_style_disable_parallax' );
}

if ( $infinity_page_layout_private != 'default' && class_exists( 'cmb2_bootstrap_205' ) ) {
	$infinity_layout = get_post_meta( get_the_ID(), "infinity_page_layout_private", true );
} else {
	$infinity_layout = Kirki::get_option( 'infinity', 'page_layout' );
}

get_header();
?>

<?php if ( $infinity_disable_title != 'on' ) { ?>
	<?php if (('bg_color' != $infinity_title_style &&
               'bg_color' != Kirki::get_option( 'infinity', 'page_style_heading_style' )) || ('image' == $infinity_title_style || 'big-image' == $infinity_title_style)) { //If enable heading image ?>
		<div class="big-title image-bg <?php if( 'big-image' == $infinity_title_style  ) { echo 'image-bg--big'; } ?>" style="background-image: url('<?php echo esc_url( $infinity_heading_bg_image ); ?>')"
			<?php if(("on" != $infinity_disable_parallax  || !Kirki::get_option( 'infinity', 'page_style_disable_parallax')) && !$infinity_disable_parallax){ ?>
				data-stellar-background-ratio="0.5"
			<?php } ?>>
			<div class="container">
				<?php if ($infinity_alt_title) { ?>
					<h1 class="entry-title" itemprop="headline" style="color: <?php echo esc_attr($infinity_heading_color); ?>"><?php echo $infinity_alt_title; ?></h1>
				<?php } else { ?>
					<?php the_title( '<h1 class="entry-title" itemprop="headline"  style="color: ' . esc_attr($infinity_heading_color) . ';" itemprop="headline">', '</h1>' ); ?>
				<?php } ?>
			</div>
		</div>
	<?php } else { // single color heading ?>
		<div class="big-title color-bg" style="background-color: <?php echo esc_attr($infinity_heading_bg_color); ?>">
			<div class="container">
				<?php if ($infinity_alt_title) {?>
					<h1 class="entry-title" itemprop="headline" style="color: <?php echo esc_attr($infinity_heading_color); ?>"><?php echo $infinity_alt_title; ?></h1>
				<?php } else { ?>
					<?php the_title('<h1 class="entry-title" itemprop="headline" style="color: ' . esc_attr($infinity_heading_color) . ';" itemprop="headline">', '</h1>'); ?>
				<?php } ?>
			</div>
		</div>
	<?php } ?>
<?php } ?>
<?php if ( function_exists( 'tm_bread_crumb' ) && Kirki::get_option( 'infinity', 'site_general_breadcrumb_enable' ) == 1 ) { ?>
	<div class="breadcrumb">
		<div class="container">
			<?php echo tm_bread_crumb( array( 'home_label' => Kirki::get_option( 'infinity', 'site_general_breadcrumb_home_text' ) ) ); ?>
		</div>
	</div>
<?php } ?>
<div class="container">
	<div class="row">
		<?php if ( $infinity_layout == 'sidebar-content' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
		<?php if ( $infinity_layout == 'sidebar-content' || $infinity_layout == 'content-sidebar' ) { ?>
			<?php $class = 'col-sm-8 col-md-9'; ?>
		<?php } else { ?>
			<?php $class = 'col-sm-12'; ?>
		<?php } ?>
		<div class="<?php echo esc_attr( $class ); ?>">
			<div class="content">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php if ( $infinity_layout == 'content-sidebar' ) { ?>
			<?php get_sidebar(); ?>
		<?php } ?>
	</div>
</div>
<?php get_footer(); ?>
