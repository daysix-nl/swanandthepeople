<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */

defined( 'ABSPATH' ) || exit;

global $product;


get_header( 'notitle' ); ?>

<?php while ( have_posts() ) : ?>
<?php the_post(); ?>
<?php
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
} ?>

<main>
   <section class="mt-[10px]">
        <div class="container lg:flex justify-between">
            <!-- FOTOSLIDER -->
            <div class="w-full lg:w-[515px] xl:w-[585px] max-h-[600px] overflow-hidden relative md:flex justify-between">
                 <?php
                global $product;
                if ($product->get_gallery_image_ids()) { ?>
                <div class="swiper mySwiper2 md:w-[564px] lg:w-[386px] xl:w-[455px] order-2">
                    <div class="swiper-wrapper relative">
                        <div class="swiper-slide rounded-[20px] overflow-hidden aspect-[13/16] relative">
                            <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="min-w-full min-h-full object-cover">
                        </div>
                        <?php if (get_field('video', $product->get_id())): ?>  
                         <div class="swiper-slide rounded-[20px] overflow-hidden aspect-[13/16] relative">
                            <video class="w-full h-full object-cover absolute top-0 right-0 video" autoplay="" loop="" muted="" playsinline="">
                                <source src="<?php echo get_field('video', $product->get_id());?>#t=0.001" type="video/mp4">
                                Uw browser ondersteunt geen HTML5-video.
                            </video>
                        </div>
                         <?php endif; ?>
                        <?php
                            global $product;
                            if ( $product->get_gallery_image_ids() ) {
                                $gallery_image_ids = $product->get_gallery_image_ids(); 
                                foreach ( $gallery_image_ids as $image_id ) { 
                                    $image_url = wp_get_attachment_url($image_id); ?>
                                   <div class="swiper-slide rounded-[20px] overflow-hidden aspect-[13/16] relative">
                                        <img src="<?php echo esc_url($image_url);?>" alt="" class="min-w-full min-h-full object-cover">
                                    </div>
                                <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="slider-1-next h-[40px] w-[40px] rounded-full bg-white absolute bottom-[20px] right-[20px] z-50 shadow lg:hover:bg-[#f8f8f8] duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.264" height="12.657" viewBox="0 0 9.264 12.657">
                            <g id="Group_82" data-name="Group 82" transform="translate(1.697 1.697)">
                                <line id="Line_3" data-name="Line 3" x2="5.359" y2="2.436" transform="matrix(0.94, 0.342, -0.342, 0.94, 0.833, 0)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_4" data-name="Line 4" x2="5.359" y2="2.436" transform="matrix(-0.342, 0.94, -0.94, -0.342, 4.921, 4.227)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                            </g>
                        </svg>
                    </div>
                    <div class="slider-1-prev h-[40px] w-[40px] rounded-full bg-white absolute bottom-[20px] right-[70px] z-50 shadow lg:hover:bg-[#f8f8f8] duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.264" height="12.657" viewBox="0 0 9.264 12.657" class="rotate-[180deg]">
                            <g id="Group_82" data-name="Group 82" transform="translate(1.697 1.697)">
                                <line id="Line_3" data-name="Line 3" x2="5.359" y2="2.436" transform="matrix(0.94, 0.342, -0.342, 0.94, 0.833, 0)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_4" data-name="Line 4" x2="5.359" y2="2.436" transform="matrix(-0.342, 0.94, -0.94, -0.342, 4.921, 4.227)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <div thumbsSlider="" class="swiper mySwiperSingleProduct relative w-[109px] order-1 hidden md:block">
                    <div class="swiper-wrapper relative">
                        <div class="swiper-slide rounded-[15px] overflow-hidden aspect-square">
                            <img src="<?php the_post_thumbnail_url($product->get_id());?>" class="min-w-full min-h-full object-cover" />
                        </div>
                        <?php if (get_field('video', $product->get_id())): ?>  
                         <div class="swiper-slide rounded-[15px] overflow-hidden aspect-square relative">
                            <video muted preload="metadata" class="w-full h-full object-cover absolute top-0 right-0">
                                <source src="<?php echo get_field('video', $product->get_id());?>#t=0.3" type="video/mp4">
                                Uw browser ondersteunt geen HTML5-video.
                            </video>
                            <div class="absolute top-0 left-0 right-0 bottom-0">
                                <div class="w-full h-full flex items-center justify-center">
                                    <div class="h-[40px] w-[40px] scale-[0.8]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                            <path id="circle-play-solid" d="M0,20A20,20,0,1,1,20,40,20,20,0,0,1,0,20Zm14.711-8.508a1.873,1.873,0,0,0-.961,1.633v13.75a1.877,1.877,0,0,0,2.859,1.594l11.25-6.875a1.877,1.877,0,0,0,0-3.2l-11.25-6.875a1.9,1.9,0,0,0-1.9-.039Z" fill="rgba(255,255,255,0.67)"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php endif; ?>
                         <?php
                            global $product;
                            if ( $product->get_gallery_image_ids() ) {
                                $gallery_image_ids = $product->get_gallery_image_ids(); 
                                foreach ( $gallery_image_ids as $image_id ) { 
                                    $image_url = wp_get_attachment_url($image_id); ?>
                                   <div class="swiper-slide rounded-[15px] overflow-hidden aspect-square">
                                        <img src="<?php echo esc_url($image_url);?>" class="min-w-full min-h-full object-cover" />
                                    </div>
                                <?php
                                }
                            }
                        ?>
                       
                    </div>
              
                </div>
            </div>
            <?php
            }
            ?>
            <!-- PRODUCT INFORMATIE -->
            <div class="w-full lg:w-[515px] xl:w-[585px]">
                <h1 class="text-36 leading-42 text-[#5D7365] font-normal mt-[40px] lg:mt-[25px]"><?php the_title();?></h1>
                <p class="text-18 leading-18 text-[#5D7365] font-normal mt-[10px]"><?php echo $product->get_price_html(); ?></p>
                <p class="text-14 leading-25 text-[#525252] mt-[40px] md:mr-[40px]"><?php echo get_the_content();?></p>
                <hr class="my-[30px]">
                <div class="flex flex-wrap items-start space-x-2">
                    <div class="w-[40px]">
                        <div class="h-[40px] w-[40px] rounded-full bg-white border-[1px] flex justify-center items-center" style="border-color:<?php echo get_field('kleur', get_the_ID());?>;">
                            <div class="h-[35px] w-[35px] rounded-full block" style="background:<?php echo get_field('kleur', get_the_ID());?>;"></div>
                        </div>
                        <p class="text-10 leading-12 text-center mt-[8px] text-[#525252]"><?php echo get_field('kleur_naam', get_the_ID());?></p>
                    </div>
                    <?php
                        global $post;
                        // Haal de huidige productcategorieën op
                        $terms = wp_get_post_terms($post->ID, 'product_cat');
                        $category_ids = array();
                        foreach ($terms as $term) {
                            $category_ids[] = $term->term_id;
                        }
                        // Huidige product uitsluiten
                        $current_product_id = $post->ID;
                        // De query voor gerelateerde producten
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => -1, // Aantal gerelateerde producten om weer te geven
                            'post__not_in' => array($current_product_id), // Uitsluiten van het huidige product
                            'orderby' => 'rand', // Willekeurige volgorde (je kunt wijzigen naar andere orderby-opties)
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'id',
                                    'terms' => $category_ids,
                                    'operator' => 'IN',
                                ),
                            ),
                        );
                        $related_products = new WP_Query($args);
                        if ($related_products->have_posts()) :
                        while ($related_products->have_posts()) : $related_products->the_post();  // Informatie over het product ophalen
                        $product = wc_get_product( get_the_ID() ); ?>
                            <a href="<?php the_permalink(); ?>" class="w-[40px]">
                                <div class="h-[40px] w-[40px] rounded-full" style="background:<?php echo get_field('kleur', get_the_ID());?>;"></div>
                                <p class="text-10 leading-12 text-center mt-[8px] text-[#525252]"><?php echo get_field('kleur_naam', get_the_ID());?></p>
                            </a>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                </div>
                <div class="mt-[30px]">    
                   <?php
                    global $product;
                    if ($product->is_type('variable')) { ?>
                        <div class="product-add-single">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
                    <?php
                    } else { ?>
                        <div class="simple">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
   </section>
</main>


<?php do_action( 'woocommerce_after_single_product' ); ?>
<?php endwhile; // end of the loop. ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var addToCartButton = document.querySelector('.single_add_to_cart_button');
    if (addToCartButton) {
        addToCartButton.addEventListener('click', function() {
            var variationSelects = document.querySelectorAll('.variations select');
            variationSelects.forEach(function(select) {
                select.value = '';  // Leeg maken van de selectie
            });
        });
    }
});
</script>




<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
