<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

/* Note: This file has been altered by Laborator */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $wp_query;

if( ! get_data('shop_add_to_cart_listing') || get_data('shop_catalog_mode'))
	return;

$classes        = array('add-to-cart');

$href           = get_permalink();
$button_text    = __('Add to cart', 'aurum');

if($product->is_in_stock() == false)
{
	$classes[]     = 'out-of-stock';
	$button_text   = __('Out of stock', 'aurum');
}
else
if($product->is_type('variable'))
{
	$classes[]     = 'select-options';
	$button_text   = __('Select options', 'aurum');
}
else
if($product->is_type('external'))
{
	$classes[]     = 'external-product';
	$button_text   = $product->button_text;
	$href          = $product->product_url;
}

# Add To Cart via AJAX
if($product->product_type == 'simple')
{
	$classes[] = 'ajax-add-to-cart';
}

if ( ! $class ) {
	$class = 'button';
}

$class .= ' ';
$class .= implode( ' ', $classes );

$is_textual = get_data( 'shop_add_to_cart_textual' );

if ( in_array( 'wishlist-action', array_keys( $wp_query->query ) ) ) {
	$is_textual = true;
}

if ( $is_textual ) {
	$class .= ' is-textual';
}

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product-id="%s" ' . ( ! $is_textual ? 'data-toggle="tooltip"' : '' ) . ' data-placement="' . ( is_rtl() ? 'right' : 'left' ) . '" data-added-to-cart-title="' . __('Product added to cart!', 'aurum') . '" data-product_sku="%s" class="%s" title="%s">%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $class ) ? $class : 'button' ),
		esc_attr( $product->add_to_cart_text() ),
		esc_html( $is_textual ? $product->add_to_cart_text() : '' )
	),
$product );
