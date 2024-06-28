<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TESTIMONIALS -->
<section class="bg-white <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?>">
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
