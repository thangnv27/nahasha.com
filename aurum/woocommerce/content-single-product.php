<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

/* Note: This file has been altered by Laborator */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div class="row">
	<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class("item-details-single"); ?>>
            <meta itemprop="url" content="<?php the_permalink(); ?>" />
            <div class="col-lg-6 col-md-6 col-sm-6 shop-item">
            <?php
                    /**
                     * woocommerce_before_single_product_summary hook
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action( 'woocommerce_before_single_product_summary' );
            ?>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">

                    <div class="summary entry-summary item-info">

                            <?php
                                    /**
                                     * woocommerce_single_product_summary hook
                                     *
                                     * @hooked woocommerce_template_single_title - 5
                                     * @hooked woocommerce_template_single_rating - 10
                                     * @hooked woocommerce_template_single_price - 10
                                     * @hooked woocommerce_template_single_excerpt - 20
                                     * @hooked woocommerce_template_single_add_to_cart - 30
                                     * @hooked woocommerce_template_single_meta - 40
                                     * @hooked woocommerce_template_single_sharing - 50
                                     */
                                    do_action( 'woocommerce_single_product_summary' );
                            ?>

                    </div><!-- .summary -->

            </div>
            <div class="clearfix"></div>

            <?php
            $maucss = get_post_meta(get_the_ID(), 'maucss', true);
            $thanhphan = get_post_meta(get_the_ID(), 'thanhphan', true);
            $hieuqua = get_post_meta(get_the_ID(), 'hieuqua', true);
            $antoan = get_post_meta(get_the_ID(), 'antoan', true);
            $cachsudung = get_post_meta(get_the_ID(), 'cachsudung', true);
            ?>
            <div class="product-content-tabs">
                <ul>
                    <li><a href="#tabs-1">Thành phần</a></li>
                    <li><a href="#tabs-2">Hiệu quả</a></li>
                    <li><a href="#tabs-3">Độ an toàn</a></li>
                    <li><a href="#tabs-4">Cách sử dụng</a></li>
                </ul>
                <div id="tabs-1">
                    <?php echo wpautop($thanhphan) ?>
                </div>
                <div id="tabs-2">
                    <?php echo wpautop($hieuqua) ?>
                </div>
                <div id="tabs-3">
                    <?php echo wpautop($antoan) ?>
                </div>
                <div id="tabs-4">
                    <?php echo wpautop($cachsudung) ?>
                </div>
            </div>
            <?php if(!empty($maucss)): ?>
            <style type="text/css">
                .shop-item-single .item-info.summary h1{
                    color: #<?php echo $maucss ?>;
                }
                .product-content-tabs ul li a{
                    background: #<?php echo $maucss ?>;
                    color: #fff;
                    border: 1px solid #<?php echo $maucss ?>;
                }
                .product-content-tabs ul li.ui-tabs-active a{
                    border: 1px solid #eee;
                    background: #fff;
                    color: #<?php echo $maucss ?>;
                }
            </style>
            <?php endif; ?>
	</div><!-- #product-<?php the_ID(); ?> -->

	<?php
	# start: modified by Arlind Nushi
	global $has_gallery;

	if(get_data('shop_single_sidebar') != 'hide' || get_data('shop_related_products_per_page') > 0)
		$has_gallery = false;
	# end: modified by Arlind Nushi
	?>
	<div class="clear"></div>

	<div class="<?php echo $has_gallery ? 'col-sm-11 col-md-offset-1' : 'col-sm-12'; ?>">

		<?php
			/**
			 * woocommerce_after_single_product_summary hook
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			//do_action( 'woocommerce_after_single_product_summary' );
		?>

	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>