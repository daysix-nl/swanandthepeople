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
<div id="maattabel" class="text-14 leading-25 text-[#525252] mb-[30px] block underline cursor-pointer">Bekijk hier onze maattabel</div>
<div class="woocommerce-variation-add-to-cart variations_button">
	 <div class="flex w-full justify-between">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>



	
	
    <button type="submit" class="h-[45px] bg-[#5D7365] rounded-[99px] font-jakarta font-bold text-white text-15 xl:text-16 w-full lg:w-[305px] xl:w-[370px] flex items-center justify-center alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>">Voeg toe</button>
			
	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />

        
        </div>
</div>



<div id="tabel" class="fixed top-0 left-0 right-0 bottom-0 bg-[#00000099] z-[9999]">
	<div class="h-full w-full flex justify-center items-center">
		<div class="tab">
			<div class="flex justify-end"><p id="close" class="text-white cursor-pointer">Sluiten</p></div>
			<div class="w-[calc(100vw-40px)] md:w-[600px] bg-white pb-[15px] mt-[8px] rounded-[10px] overflow-hidden">
				<img src="https://swanandthepeople.com/wp-content/uploads/2024/06/maattabel.png" alt="">
			</div>
		</div>
	</div>
</div>