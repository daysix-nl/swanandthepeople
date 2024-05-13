<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>

<!-- FAQ -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?>">
    <div class="w-[360px] md:w-[600px] lg:w-[800px] mx-auto pb-[25px]">
        <h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal text-center"><?php echo get_field('titel');?></h2>
        <?php if (get_field('subtitel')): ?> 
            <h3 class="text-22 leading-22 text-[#5D7365] font-crimson font-normal mt-[15px] text-center"><?php echo get_field('subtitel');?></h3>
        <?php endif; ?>
    </div>
    <div class="w-[360px] md:w-[600px] lg:w-[800px] mx-auto grid gap-[15px] md:gap-[20px] h-fit">
        <?php
        if( have_rows('faq') ):
            while( have_rows('faq') ) : the_row(); ?>
            <div class="accordion-item h-fit"> 
                <button class="accordion text-[#fff] font-crimson text-20 leading-20 md:text-22 md:leading-22 md:text-22 md:leading-22 lg:text-22 lg:leading-22 font-semibold pr-3 px-2 md:px-3 lg:px-4 h-[80px]">
                    <span class="pr-4"><?php echo get_sub_field('vraag');?></span>
                </button>
                <div class="panel">
                    <div class="pb-3 px-2 md:pb-4 md:px-3 lg:pb-4 lg:pt-0 lg:px-4">
                        <div class="text-[#fff] text-14 leading-25 text-[#fff] text-editor"><?php echo get_sub_field('antwoord');?></div>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </div>

</section>
<?php endif; ?>
