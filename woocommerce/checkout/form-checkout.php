<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="notice">
<?php
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

</div>

<!-- CHECKOUT -->
<div class="custom-checkout bg-white">
    <div class="custom-afrekenen mt-[20px] mb-[60px] lg:mb-[200px] xl:mb-[132px]">
        <div class="container lg:flex lg:justify-between lg:px-[30px] xl:px-[unset]">
            <div class="w-full lg:max-w-[590px] xl:max-w-[736px]">
                <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

				<?php if ( $checkout->get_checkout_fields() ) : ?>

					<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

					<div class="bg-white">
						<div class="no-title">
							<h2 class="text-28 leading-28 text-[#5D7365] flex items-center pb-[2px]"> 
							<span class="h-[30px] w-[30px] border-[2px] border-[#5D7365] rounded-full flex justify-center items-center font-jakarta font-extrabold text-15 mr-[15px]">
								1
							</span>
							Vul je gegevens in</h2>
							<hr class="border-[#DDDDDD] my-[10px]">
							<?php do_action( 'woocommerce_checkout_billing' ); ?>
						</div>

						<div class="mt-[20px]">
							<div class="paybox">
							<hr class="border-[#DDDDDD] my-[10px]">
							<?php do_action( 'woocommerce_checkout_shipping' ); ?>
							<hr class="border-[#DDDDDD] my-[10px]">
							</div>
						</div>
					</div>

					<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

				<?php endif; ?>
				
				<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

				<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

				<div id="order_review" class="woocommerce-checkout-review-order p-0">
					<?php do_action( 'woocommerce_checkout_order_review' ); ?>
				</div>

				<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

			</form>

			<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

            </div>
            <div class="w-full lg:max-w-[337px] xl:max-w-[381px] hidden lg:block h-auto">
                <div class="sticky top-[0px] xl:top-[0px]">
                    <?php include get_template_directory() . '/componenten/side-cart-checkout.php'; ?>
                    <a href="/cart" class="text-14 leading-25 text-[#525252] mb-[30px] block underline w-full text-center">Winkelwagen wijzigen</a>
                </div>
            </div>
        </div>
    </div>
</div>

