<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */


defined( 'ABSPATH' ) || exit;


get_header( 'shop' ); ?>

<main>
    <div class="container mt-[20px] padding-bottom-true">

        <?php do_action('woocommerce_before_shop_loop'); ?>
        <div class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-[10px] md:gap-x-[20px] lg:gap-x-[30px] gap-y-[40px]">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1, 
                );

                $products_query = new WP_Query($args);

                if ($products_query->have_posts()) :
                    while ($products_query->have_posts()) : $products_query->the_post();

                $product = wc_get_product(get_the_ID());
                
                ?>
                <?php include get_template_directory() . '/componenten/product-item.php'; ?>

                <?php
                endwhile;

                wp_reset_postdata();
            else :
                echo 'Geen producten gevonden';
            endif;
            ?>
        </div>

    </div>
</main>

<script>
// Wacht tot de DOM geladen is
document.addEventListener('DOMContentLoaded', function() {
    // Zoek het element met de class "delete_item"
    var deleteItem = document.querySelector('.delete_item');

    // Verwijder de tekstinhoud van het element
    deleteItem.textContent = '';

    // Of als je alleen de tekst voor het icoon wilt laten staan:
    // deleteItem.textContent = ' ';
});
</script>

<?php
get_footer( 'shop' ); ?>
