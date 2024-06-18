<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<div class="lg:flex lg:justify-between lg:px-[30px] xl:px-[unset]">
	<form class="woocommerce-cart-form w-full lg:max-w-[590px] xl:max-w-[736px]" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
		<?php do_action( 'woocommerce_before_cart_table' ); ?>

		<table class="relative w-full" cellspacing="0">
			
			<tbody class="pt-[60px] block w-full">
			
				<?php do_action( 'woocommerce_before_cart_contents' ); ?>

				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
					/**
					 * Filter the product name.
					 *
					 * @since 2.1.0
					 * @param string $product_name Name of the product in the cart.
					 * @param array $cart_item The product in the cart.
					 * @param string $cart_item_key Key for the product in the cart.
					 */
					$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<tr class="woocommerce-cart-form__cart-item w-full flex items-center border-b-[1px] border-[#DDDDDD] pb-[20px] mb-[20px] <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						

							<td class="product-thumbnail w-[60px] md:w-[81px] xl:w-[90px] block mr-[10px] md:mr-[30px] rounded-[10px] overflow-hidden">
							<?php
							$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

							if ( ! $product_permalink ) {
								echo $thumbnail; // PHPCS: XSS ok.
							} else {
								printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
							}
							?>
							</td>
							<td class="grid md:gap-[2px] w-[115px] md:w-[315px] lg:w-[228px] xl:w-[340px] mr-[10px] md:mr-[20px]">
								<div class="product-name text-12 leading-16 md:text-16 md:leading-20 xl:text-17 xl:leading-20 font-semibold text-[#525252]" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
								<?php
								if ( ! $product_permalink ) {
									echo wp_kses_post( $product_name . '&nbsp;' );
								} else {
									/**
									 * This filter is documented above.
									 *
									 * @since 2.1.0
									 */
									echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
								}

								do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

								
								?>
								</div>
								<div class="">
									<?php 
										// Meta data.
										echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

										// Backorder notification.
										if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
											echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
										}
									?>
								</div>

								<div class="product-price text-12 leading-15 md:text-15 md:leading-19 xl:text-16 xl:leading-19 text-[#BCBCBC]" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
									<?php
										echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
									?>
								</div>
							</td>
							

							<td class="h-[42px] md:h-[47px] xl:h-[52px] w-[51px] md:w-[57px] xl:w-[63px] border-[1px] border-[#E5E5E5] md:rounded-r-[10px] rounded-l-[10px] flex items-center justify-center mr-[-1px] md:mr-[10px]" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
							<div class="scale-[0.7] md:scale-[0.8]">
							<?php
							if ( $_product->is_sold_individually() ) {
								$min_quantity = 1;
								$max_quantity = 1;
							} else {
								$min_quantity = 0;
								$max_quantity = $_product->get_max_purchase_quantity();
							}

							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $max_quantity,
									'min_value'    => $min_quantity,
									'product_name' => $product_name,
								),
								$_product,
								false
							);

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
							?>
							</div>
							</td>
							<td class="h-[42px] md:h-[47px] xl:h-[52px] w-[42px] md:w-[47px] xl:w-[52px] border-[1px] border-[#E5E5E5] rounded-r-[10px] md:rounded-l-[10px] flex items-center justify-center">
								<?php
									echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
										'woocommerce_cart_item_remove_link',
										sprintf(
											'<a href="%s" class="" aria-label="%s" data-product_id="%s" data-product_sku="%s"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="16.1" viewBox="0 0 14 16.1">
											<g id="bin-delete-recycle-svgrepo-com" transform="translate(-4 -1)">
												<path id="Path_496" data-name="Path 496" d="M17.3,1.7H12.4a.7.7,0,0,0-.7-.7H10.3a.7.7,0,0,0-.7.7H4.7a.7.7,0,0,0,0,1.4H17.3a.7.7,0,1,0,0-1.4Z" fill="#acacac"/>
												<path id="Path_497" data-name="Path 497" d="M17.5,9.7V20.9H8.4V9.7H7V21.6a.7.7,0,0,0,.7.7H18.2a.7.7,0,0,0,.7-.7V9.7Z" transform="translate(-1.95 -5.2)" fill="#acacac"/>
												<path id="Path_498" data-name="Path 498" d="M18.4,24.7v-7H17v7Z" transform="translate(-8.45 -11.1)" fill="#acacac"/>
												<path id="Path_499" data-name="Path 499" d="M28.4,24.7v-7H27v7Z" transform="translate(-14.95 -11.1)" fill="#acacac"/>
											</g>
											</svg>
											</a>',
											esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
											/* translators: %s is the product name */
											esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
											esc_attr( $product_id ),
											esc_attr( $_product->get_sku() )
										),
										$cart_item_key
									);
								?>
							</td>

							<td class="product-subtotal text-right text-12 leading-12 md:text-16 md:leading-20 xl:text-17 xl:leading-[20px] font-semibold w-[70px] md:w-[130px] lg:w-[115px] xl:w-[125px] text-[#525252]" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
								<?php
									echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
							</td>
						</tr>
						<?php
					}
				}
				?>

				<?php do_action( 'woocommerce_cart_contents' ); ?>

				<tr class="w-full block mb-[30px]">
					<td class="w-full block">

						<?php if ( wc_coupons_enabled() ) { ?>
							<div class="w-full block bg-[#f9f9f9] p-[15px] md:p-[20px] rounded-[10px] mt-[30px] md:mt-[unset]">
								<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label>
								<div class="coupon flex w-full">
									 <input type="text" name="coupon_code" class="w-full bg-transparent border-[1px] border-[#dddd] px-[20px] text-[#121212] rounded-l-[10px] text-12 leading-15 md:text-15 md:leading-19 xl:text-15 xl:leading-19 font-jakarta" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="w-[200px] bg-[#dddd] text-12 leading-15 md:text-15 md:leading-19 xl:text-15 xl:leading-19 font-jakarta font-semibold text-[#525252] h-[47px] lg:h-[52px] rounded-r-[10px]" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>">Toepassen</button>
									<?php do_action( 'woocommerce_cart_coupon' ); ?>
								</div>
							</div>
							
						<?php } ?>
						

						<div class="absolute top-0 left-0 right-0">
							<h1 class="text-28 leading-28 text-[#5D7365]">Winkelwagen</h1>
							<hr class="mt-[12px] border-[#DDDDDD]">
						</div>
						<div class="absolute bottom-[117px] md:bottom-[unset] md:top-0 right-0 flex justify-end w-[200px] h-[28px] items-center">
							<button type="submit" class="update-cart items-center button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" class="mr-[8px]">
								<g id="renew-svgrepo-com" transform="translate(-0.672 -0.672)">
									<path id="Path_585" data-name="Path 585" d="M7.909,6.413H5.358a5.375,5.375,0,0,1,9.879,2.932h.977A6.352,6.352,0,0,0,4.977,5.279v-1.8H4V7.39H7.909Z" transform="translate(-2.009 -1.49)" fill="#525252"/>
									<path id="Path_586" data-name="Path 586" d="M11.306,18.932h2.55A5.375,5.375,0,0,1,3.977,16H3a6.352,6.352,0,0,0,11.238,4.065v1.8h.977V17.954H11.306Z" transform="translate(-1.498 -8.146)" fill="#525252"/>
									<g id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" transform="translate(0.368 0.368)">
									<rect id="Rectangle_340" data-name="Rectangle 340" width="15" height="15" transform="translate(0.304 0.304)" fill="none"/>
									</g>
								</g>
							</svg>
							Update winkelwagen
						</button>
						</div>
						
							

						<?php do_action( 'woocommerce_cart_actions' ); ?>

						<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
					</td>
				</tr>

				<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			</tbody>
		</table>
		<?php do_action( 'woocommerce_after_cart_table' ); ?>
	</form>

	<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

	<div class="w-full lg:max-w-[337px] xl:max-w-[381px]">
		<div class="flex items-center h-[28px]">
			<svg xmlns="http://www.w3.org/2000/svg" width="18.153" height="17.537" viewBox="0 0 18.153 17.537">
				<path id="shopping-bag" d="M20.468,9.58A.587.587,0,0,0,20,9.343H16.917A4.728,4.728,0,0,0,12.4,5H11.187A4.728,4.728,0,0,0,6.672,9.343H3.587a.586.586,0,0,0-.472.235.716.716,0,0,0-.136.55L4.608,20.25a2.04,2.04,0,0,0,1.949,1.787H17.033a2.041,2.041,0,0,0,1.949-1.791l1.63-10.119A.715.715,0,0,0,20.468,9.58ZM11.187,6.336H12.4a3.447,3.447,0,0,1,3.286,3.007H7.9A3.447,3.447,0,0,1,11.187,6.336Zm6.6,13.676a.786.786,0,0,1-.754.688H6.557a.786.786,0,0,1-.751-.685l-1.5-9.337H19.28Z" transform="translate(-2.717 -4.75)" stroke="#5D7365" stroke-width="0.1"/>
			</svg>
			<h2 class="ml-[10px] text-22 leading-22 text-[#5D7365]">Order overzicht</h2>
		</div>
		<hr class="my-[12px] border-[#DDDDDD]">
		<?php
			/**
			 * Cart collaterals hook.
			 *
			 * @hooked woocommerce_cross_sell_display
			 * @hooked woocommerce_cart_totals - 10
			 */
			do_action( 'woocommerce_cart_collaterals' );
		?>
	</div>
</div>






<?php
// Controleer het aantal producten in de winkelwagen
$product_count = WC()->cart->get_cart_contents_count();

if ($product_count < 2) { ?>
 
        <div class="pop_up fixed top-0 left-0 w-screen flex bg-[#00000099] z-[99999] justify-center items-center h-screen overflow-scroll py-5">
            <div class="m-auto flex flex-col bg-[#f9f9f9] w-full mx-2  pb-3 md:max-w-[481px] lg:max-w-[594px] rounded-[20px] relative">
                <button class="closePopUp absolute top-3 right-3 h-[40px] w-[40px] rounded-full bg-white shadow lg:hover:bg-[#f8f8f8] duration-300 flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.799" height="19.799" viewBox="0 0 19.799 19.799" class="scale-[0.8]">
						<g id="Group_431" data-name="Group 431" transform="translate(-8.485 9.899) rotate(-45)">
							<line id="Line_55" data-name="Line 55" y2="26" transform="translate(13 0)" fill="none" stroke="#5D7365" stroke-width="2"/>
							<line id="Line_56" data-name="Line 56" y2="26" transform="translate(26 13) rotate(90)" fill="none" stroke="#5D7365" stroke-width="2"/>
						</g>
                    </svg>
                </button>  
				 <div class="h-auto aspect-[16/8] rounded-t-[20px] overflow-hidden mb-[25px] lg:mb-2">
                    <img class="min-w-full min-h-full object-cover object-center" src="https://swanandthepeople.com/wp-content/uploads/2024/04/IMG_4705-1-scaled.jpg" alt="">
                </div>
                <h2 class="text-30 leading-30 md:text-36 md:leading-36 text-[#5D7365] font-normal text-center md:max-w-[404px] lg:max-w-[473px] xl:max-w-[531px] mx-auto mb-[15px]">Bestel meer items <br> en ontvang 10% korting</h2>
                <div class="text-14 leading-25 text-[#525252] pb-[30px] mx-auto text-center max-w-[301px] md:max-w-[395px] lg:max-w-[484px] text-editor">Als je twee of meer producten toevoegt aan je winkelwagen, ontvang je automatisch 10% bundelkorting op het totaalbedrag. </div>
                <a href="/shop" class="h-[52px] w-[70%] mx-auto bg-[#5D7365] flex items-center justify-center rounded-[20px] text-15 leading-15 text-white font-jakarta font-bold" target="">Shop verder</a>
            </div>
        </div>
   
	<?php
} else {
   
}
?>


<?php do_action( 'woocommerce_after_cart' ); ?>
