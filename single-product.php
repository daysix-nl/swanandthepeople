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
                <p class="text-14 leading-25 text-[#525252] mt-[40px] md:mr-[40px]"><?php echo get_the_excerpt(); ?></p>
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
                <div class="grid gap-[12px] mt-[40px]">
                    <div class="flex items-center">
                        <div class="w-[35px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.124" height="12.329" viewBox="0 0 17.124 12.329">
                                <path id="shipping-truck-svgrepo-com" d="M15.329,6H3V16.274H4.394a2.4,2.4,0,0,0,4.746,0h4.843a2.4,2.4,0,0,0,4.746,0h1.394V11.881L16.983,8.74H15.329Zm0,4.11v3.655A2.4,2.4,0,0,1,18.523,14.9h.231V12.448L16.415,10.11ZM13.959,14.9V7.37H4.37V14.9H4.6a2.4,2.4,0,0,1,4.333,0Zm2.4,2.055a1.027,1.027,0,1,1,1.027-1.027A1.027,1.027,0,0,1,16.357,16.959ZM7.795,15.932A1.027,1.027,0,1,1,6.767,14.9,1.027,1.027,0,0,1,7.795,15.932Z" transform="translate(-3 -6)" fill="#5D7365" fill-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-15 leading-15 text-[#5D7365]">Gratis retourneren in NL</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-[35px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.327" height="13.554" viewBox="0 0 15.327 13.554">
                                <path id="love" d="M10.47,4A4.264,4.264,0,0,0,7.363,5.348,4.257,4.257,0,0,0,0,8.257c0,4.238,6.836,8.4,7.133,8.562a.46.46,0,0,0,.474,0c.283-.163,7.119-4.324,7.119-8.562A4.261,4.261,0,0,0,10.47,4ZM7.363,15.882C6.174,15.123.92,11.575.92,8.257A3.336,3.336,0,0,1,6.986,6.34a.46.46,0,0,0,.752,0,3.336,3.336,0,0,1,6.068,1.917C13.806,11.573,8.553,15.121,7.363,15.882Z" transform="translate(0.3 -3.64)" fill="#5D7365" stroke="#5D7365" stroke-width="0.6"/>
                            </svg>
                        </div>
                        <p class="text-15 leading-15 text-[#5D7365]">Voor, tijdens en na je zwangerschap</p>
                    </div>
                    <div class="flex items-center">
                        <div class="w-[35px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.274" height="16.007" viewBox="0 0 15.274 16.007">
                                <path id="box2-svgrepo-com" d="M15.915,3.508,8.893.926,1.606,3.6v9.944l7.287,2.644,7.287-2.644V3.6l-.265-.1ZM8.623,15.516l-6.477-2.35V4.182l6.477,2.35Zm.27-9.461L2.653,3.791,8.893,1.5l6.234,2.292L8.893,6.055Zm6.747,7.111-6.477,2.35V6.532l6.477-2.34Z" transform="translate(-1.256 -0.553)" fill="#5D7365" stroke="#5D7365" stroke-width="0.7"/>
                            </svg>

                        </div>
                        <p class="text-15 leading-15 text-[#5D7365]">Gratis verzending binnen NL/BE</p>
                    </div>
                </div>
              
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container padding-top-true padding-bottom-true">
                <div class="w-full lg:max-w-[956px] xl:max-w-[1080px] mx-auto rounded-[20px] overflow-hidden tabs bg-[#f9f9f9] md:bg-white">
                    <div class="flex flex-col md:flex-row pt-[15px] md:pt-[unset]">
                        <button class="text-18 leading-18 text-[#5D7365] font-crimson pt-[15px] pb-[15px] px-[40px] flex justify-center items-center rounded-t-[20px] active-button" onclick="openTab(event, 'tab1')">Product omschrijving</button>
                        <button class="text-18 leading-18 text-[#5D7365] font-crimson pt-[15px] pb-[15px] px-[40px] flex justify-center items-center rounded-t-[20px]" onclick="openTab(event, 'tab2')">Verzending & retouren</button>
                    </div>
                    <div id="tab1" class="tabcontent bg-[#f9f9f9] p-[25px] md:p-4">
                        <h2 class="font-normal text-22 leading-30 text-[#5D7365] font-crimson mb-2">Product omschrijving</h2>
                        <div class="font-normal text-15 leading-30 text-[#525252] text-editor"><?php echo get_the_content();?></div>
                    </div>
                    <div id="tab2" class="tabcontent bg-[#f9f9f9] p-[25px] md:p-4 hidden">
                        <h2 class="font-normal text-22 leading-30 text-[#5D7365] mb-2">Verzending & retouren</h2>
                        <div class="font-normal text-15 leading-30 text-[#525252] text-editor"><?php echo get_field('verzending_&_retouren', 'option');?></div>
                    </div>
                </div>
        </div>
    </section>
    <?php if (get_field('testimonials')): ?>   
    <!-- TESTIMONIALS -->
    <section class="bg-white padding-bottom-true">
        <div class="w-[360px] md:w-[600px] lg:w-[800px] mx-auto pb-[25px]">
            <h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal text-center"><?php echo get_field('titel');?></h2>
            <?php if (get_field('subtitel')): ?> 
                <h3 class="text-22 leading-22 text-[#5D7365] font-crimson font-normal mt-[15px] text-center"><?php echo get_field('subtitel');?></h3>
            <?php endif; ?>
        </div>
        <div class="w-[360px] md:w-[745px] lg:w-[800px] mx-auto overflow-hidden">
        <div class="swiper mySwiperTestimonials">
                <div class="swiper-wrapper pb-[60px]">
                    <?php
                    if( have_rows('testimonials') ):
                        while( have_rows('testimonials') ) : the_row(); ?>
                        <?php
                        $image = get_sub_field('afbeelding');
                        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                        ?>
                        <div class="swiper-slide h-[400px] flex items-start md:items-center relative w-full bg-white">
                            <div class="w-[510px] h-[370px] md:h-[270px] bg-[#f9f9f9] x-[1] md:z-[2] testimonial-blur rounded-[20px] p-[30px]">
                                <div class="flex justify-between flex-col h-full">
                                    <div class="grid">
                                        <p class="text-40 leading-22 text-[#525252] font-crimson font-bold">"</p>
                                        <p class="text-14 leading-25 text-[#525252]"><?php echo get_sub_field('quote');?></p>
                                    </div>
                                    <div class="grid mr-[110px] md:mr-[unset]">
                                        <h3 class="text-22 leading-22 text-[#5D7365] font-crimson font-normal"><?php echo get_sub_field('naam');?></h3>
                                        <?php if (get_sub_field('product')): ?>   
                                        <?php
                                            $current_product_id = get_sub_field('product'); // ID van het geselecteerde bericht
                                            $product_post = get_post($current_product_id); // Het bericht ophalen

                                            if ($product_post) { // Controleer of het bericht bestaat
                                                $product_title = $product_post->post_title; // Titel van het bericht
                                                $product_link = get_permalink($current_product_id); // Link naar het bericht
                                            ?>
                                                <a href="<?php echo esc_url($product_link); ?>" class="text-14 leading-25 text-[#525252]"><?php echo esc_html($product_title); ?></a>
                                            <?php
                                            }
                                        ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="absolute md:top-0 right-0 bottom-0 w-[130px] md:w-[320px] bg-black h-[180px] md:h-full z-[2] md:z-[1] overflow-hidden rounded-[20px]">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                            </div>
                        </div>

                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="slider-2-next h-[40px] w-[40px] rounded-full bg-white absolute bottom-[1px] left-[calc(50%+10px)] z-50 shadow lg:hover:bg-[#f8f8f8] duration-300 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.264" height="12.657" viewBox="0 0 9.264 12.657">
                        <g id="Group_82" data-name="Group 82" transform="translate(1.697 1.697)">
                            <line id="Line_3" data-name="Line 3" x2="5.359" y2="2.436" transform="matrix(0.94, 0.342, -0.342, 0.94, 0.833, 0)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                            <line id="Line_4" data-name="Line 4" x2="5.359" y2="2.436" transform="matrix(-0.342, 0.94, -0.94, -0.342, 4.921, 4.227)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                        </g>
                    </svg>
                </div>
                <div class="slider-2-prev h-[40px] w-[40px] rounded-full bg-white absolute bottom-[1px] right-[calc(50%+10px)] z-50 shadow lg:hover:bg-[#f8f8f8] duration-300 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.264" height="12.657" viewBox="0 0 9.264 12.657" class="rotate-[180deg]">
                        <g id="Group_82" data-name="Group 82" transform="translate(1.697 1.697)">
                            <line id="Line_3" data-name="Line 3" x2="5.359" y2="2.436" transform="matrix(0.94, 0.342, -0.342, 0.94, 0.833, 0)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                            <line id="Line_4" data-name="Line 4" x2="5.359" y2="2.436" transform="matrix(-0.342, 0.94, -0.94, -0.342, 4.921, 4.227)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>


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
