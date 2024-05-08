<?php
/**
 * Single variation cart button
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<a href="/" class="text-14 leading-25 text-[#525252] mb-[30px] block underline">Bekijk hier onze maattabel</a>
<div class="woocommerce-variation-add-to-cart variations_button">
	 <div class="flex w-full justify-between">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>



	
	
    <button type="submit" class="h-[45px] bg-[#5D7365] rounded-[20px] font-jakarta font-bold text-white text-15 xl:text-16 w-full lg:w-[305px] xl:w-[370px] flex items-center justify-center alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>">Voeg toe</button>
			
	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />

        
        </div>
</div>
