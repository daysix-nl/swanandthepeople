<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- COLLECTIE SLIDER -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?> overflow-x-hidden">
    <?php if (get_field('titel')): ?> 
    <div class="container text-center mb-[30px]">
        <h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal"><?php echo get_field('titel');?></h2>
    </div>
    <?php endif; ?>
    <div class="swiper mySwiperProducts px-[15px] md:px-[25px] lg:px-[55px]">
        <div class="swiper-wrapper">
            <?php
            if( have_rows('collectie_slider') ):
                while( have_rows('collectie_slider') ) : the_row(); ?>
                <?php
                $image = get_sub_field('afbeelding');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>
                <div href="" class="swiper-slide">
                    <div class="w-full aspect-[10/16] md:aspect-[10/16] rounded-[20px] relative overflow-hidden slide-item">
                        <a href="<?php echo get_sub_field('hoofdlink');?>">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-w-full min-h-full object-cover">
                        </a>
                        <div class="absolute left-0 top-0 right-0 top-unset z-[2]">
                            <div class="w-[70%] mx-auto h-[75px] bg-white rounded-b-[20px] flex items-center justify-center">
                                <div class="">
                                    <?php
                                    $current_product_id = get_sub_field('categorie');
                                    $category = get_term_by('id', $current_product_id, 'product_cat');
                                    if ($category) :
                                    ?>
                                        <h3 class="text-[#5D7365] text-18 leading-22 font-normal text-center"><?php echo esc_html($category->name); ?></h3>
                                        <?php if (get_sub_field('prijs')): ?>   
                                        <p class="text-12 leading-12 text-[#525252] text-center">€ <?php echo get_sub_field('prijs');?></p>
                                        <?php endif; ?>
                                        <div class="flex flex-wrap w-[155px] mx-auto mt-[5px] md:mt-[5px] justify-center space-x-[10px]">
                                            <?php
                                            $args = array(
                                                'post_type' => 'product',
                                                'posts_per_page' => -1,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'product_cat',
                                                        'field' => 'id',
                                                        'terms' => $current_product_id,
                                                        'operator' => 'IN',
                                                    ),
                                                ),
                                            );
                                            $related_products = new WP_Query($args);
                                            if ($related_products->have_posts()) :
                                                while ($related_products->have_posts()) : $related_products->the_post();
                                                    $product = wc_get_product(get_the_ID());
                                            ?>
                                                    <a href="<?php the_permalink(); ?>" class="h-[18px] w-[18px] rounded-full block" style="background:<?php the_field('kleur', get_the_ID()); ?>;"></a>
                                            <?php
                                                endwhile;
                                            endif;
                                            wp_reset_postdata();
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="swiper-scrollbar mt-[40px] block max-w-[300px] mx-auto"></div>
        <?php if (get_field('button')): ?> 
            <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-[#525252] mx-auto font-crimson font-normal text-[#525252] text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 lg:hover:bg-[#525252] lg:hover:border-[#525252] lg:hover:text-[#fff] duration-300 mt-[35px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
        <?php endif; ?>
     </div>
</section>
<?php endif; ?>
