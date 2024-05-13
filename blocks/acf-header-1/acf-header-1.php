<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HEADER 1 -->
<section class="swiper mySwiper relative ">
    <div class="swiper-wrapper rounded-b-[20px] overflow-hidden">
        <?php
        if( have_rows('header_1_slider') ):
            while( have_rows('header_1_slider') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
            <?php
            $link = get_sub_field('button');
            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
            ?>
            <div class="swiper-slide w-full overflow-hidden h-[60vh] relative min-h-[500px]">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center-center" />
                <div class="h-full w-full flex justify-center items-center absolute top-0 left-0 right-0 bottom-0 bg-[#00000017]">
                    <div class="text-center w-[360px] md:w-[600px] mx-auto mb-[40px]">
                        <h2 class="text-[42px] leading-42 text-[#fff] font-crimson font-normal"><?php echo get_sub_field('titel');?></h2>
                        <?php if (get_sub_field('tekst')): ?>   
                        <p class="text-22 leading-28 text-[#fff] font-crimson font-normal mt-[15px] text-center md:px-[60px]"><?php echo get_sub_field('tekst');?></p>
                        <?php endif; ?>
                        <?php if (get_sub_field('button')): ?>   
                        <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-white mx-auto font-crimson font-normal text-white text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 lg:hover:bg-[#fff] lg:hover:border-[#fff] lg:hover:text-[#5D7365] duration-300 mt-[35px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
    <div class="slider-1-next h-[40px] w-[40px] rounded-full bg-white absolute bottom-[20px] left-[calc(50%+10px)] z-50 shadow lg:hover:bg-[#f8f8f8] duration-300 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="9.264" height="12.657" viewBox="0 0 9.264 12.657">
            <g id="Group_82" data-name="Group 82" transform="translate(1.697 1.697)">
                <line id="Line_3" data-name="Line 3" x2="5.359" y2="2.436" transform="matrix(0.94, 0.342, -0.342, 0.94, 0.833, 0)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                <line id="Line_4" data-name="Line 4" x2="5.359" y2="2.436" transform="matrix(-0.342, 0.94, -0.94, -0.342, 4.921, 4.227)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
            </g>
        </svg>
    </div>
    <div class="slider-1-prev h-[40px] w-[40px] rounded-full bg-white absolute bottom-[20px] right-[calc(50%+10px)] z-50 shadow lg:hover:bg-[#f8f8f8] duration-300 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="9.264" height="12.657" viewBox="0 0 9.264 12.657" class="rotate-[180deg]">
            <g id="Group_82" data-name="Group 82" transform="translate(1.697 1.697)">
                <line id="Line_3" data-name="Line 3" x2="5.359" y2="2.436" transform="matrix(0.94, 0.342, -0.342, 0.94, 0.833, 0)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
                <line id="Line_4" data-name="Line 4" x2="5.359" y2="2.436" transform="matrix(-0.342, 0.94, -0.94, -0.342, 4.921, 4.227)" fill="none" stroke="#5D7365" stroke-linecap="round" stroke-width="1"/>
            </g>
        </svg>
    </div>
</section>
<?php endif; ?>
