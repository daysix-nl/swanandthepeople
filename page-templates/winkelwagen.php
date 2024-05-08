<?php
/**
 * Template name: Winkelwagen
 */


 get_header(); ?>


 
<main class="custom-checkout bg-white">

    <!-- cart -->
    <div class="mb-[60px] lg:mb-[200px] xl:mb-[132px] mt-[20px]">
        <div class="container lg:flex lg:justify-between lg:px-[30px] xl:px-[unset]">
            <div class="w-full">
                <?php echo do_shortcode( '[woocommerce_cart]' ); ?>
            </div>
        </div>
    </div>
</main>




<?php get_footer(); ?>