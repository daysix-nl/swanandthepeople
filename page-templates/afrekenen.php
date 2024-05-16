<?php
/**
 * Template name: Afrekenen
 */


 get_header(); ?>


 
<main class="custom-checkout bg-white">

    <!-- CHECKOUT -->
    <div class="custom-afrekenen mt-[20px] mb-[60px] lg:mb-[200px] xl:mb-[132px]">
        <div class="container lg:flex lg:justify-between lg:px-[30px] xl:px-[unset]">
            <div class="w-full lg:max-w-[590px] xl:max-w-[736px]">
                <?php echo do_shortcode( '[woocommerce_checkout]' ); ?>
            </div>
            <div class="w-full lg:max-w-[337px] xl:max-w-[381px] hidden lg:block h-auto">
                <div class="sticky top-[143px] xl:top-[143px]">
                    <?php include get_template_directory() . '/componenten/side-cart-checkout.php'; ?>
                    <a href="/cart" class="text-14 leading-25 text-[#525252] mb-[30px] block underline w-full text-center">Winkelwagen wijzigen</a>
                </div>
            </div>
        </div>
    </div>

 
  


</main>




<?php get_footer(); ?>