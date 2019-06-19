<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );

$classes = 'col-sm-' . ceil(12/$woocommerce_loop['columns']);
?>
<div <?php post_class( $classes ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>

  <div class="product-thumb">

    <a href="<?php the_permalink(); ?>" class="product-thumb-link">

      <?php
        /**
         * woocommerce_before_shop_loop_item_title hook
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
        do_action( 'woocommerce_before_shop_loop_item_title' );
      ?>

      <?php

      /**
       * woocommerce_after_shop_loop_item hook
       *
       * @hooked woocommerce_template_loop_add_to_cart - 10
       */
      do_action( 'woocommerce_after_shop_loop_item' );

      ?>

    </a>

  </div>

  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

  <?php
  /**
   * woocommerce_after_shop_loop_item_title hook
   *
   * @hooked woocommerce_template_loop_rating - 5
   * @hooked woocommerce_template_loop_price - 10
   */
  remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
  remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
  add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 5 );
  add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 10 );
  do_action( 'woocommerce_after_shop_loop_item_title' );
  ?>

</div>
