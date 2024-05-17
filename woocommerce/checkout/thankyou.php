<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="custom-checkout bg-white">

	<div class="relative overflow-hidden succes-order">
           
            <div class="container md:pt-[10px] lg:pt-[60px] xl:pt-[70px] pb-[70px] lg:pb-[90px] xl:pb-[100px] flex justify-center items-center relative z-[2]">
                <div class="w-full md:w-[686px] lg:w-[680px] xl:w-[715px] mx-auto bg-white">
					<!-- BEGIN -->
							<div class="woocommerce-order">

								<?php
								if ( $order ) :

									do_action( 'woocommerce_before_thankyou', $order->get_id() );
									?>

									<?php if ( $order->has_status( 'failed' ) ) : ?>

										<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

										<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
											<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
											<?php if ( is_user_logged_in() ) : ?>
												<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
											<?php endif; ?>
										</p>

									<?php else : ?>

										<?php wc_get_template( 'checkout/order-received.php', array( 'order' => $order ) ); ?>

									
										<div class="w-[297px] md:w-[450px] mx-auto mt-[30px] mb-[80px]">
											<h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal text-center">Bedankt voor je bestelling!</h2>
											<p class="text-14 leading-25 text-[#525252] mt-[20px] text-center">Je ordernummer is #<?php echo esc_html( $order->get_order_number() ); ?>.</p>
										</div>
								

									<?php endif; ?>

									<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
									<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

								<?php else : ?>

									<?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>

								<?php endif; ?>

							</div>
						<!-- EINDE -->
                </div>
            </div>
      
        </div>
      
    </div>






</div>