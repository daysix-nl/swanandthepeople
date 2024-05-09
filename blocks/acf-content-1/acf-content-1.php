<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- CONTENT 1 -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?>">
    <!-- IF STATEMENT VOOR FIELD -->
    <?php if (get_field('uitlijning') === "links"): ?>   
        <section>
            <div class="w-full flex flex-col lg:flex-row lg:items-center">
                <div class="w-[calc(100%-15px)] md:w-[calc(100%-25px)] lg:w-[50%] aspect-[16/12] md:aspect-[16/10] lg:aspect-[16/12] bg-black rounded-br-[20px] rounded-tr-[20px] overflow-hidden order-1">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-w-full min-h-full object-cover object-center">
                </div>
                <div class="lg:w-[50%] order-2">
                    <div class="px-[15px] md:px-[25px] lg:px-[55px] max-w-[800px] mx-auto mt-[30px] lg:mt-[unset]">
                        <h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal text-center"><?php echo get_field('titel');?></h2>
                         <?php if (get_field('subtitel')): ?> 
                            <h3 class="text-22 leading-22 text-[#5D7365] font-crimson font-normal mt-[15px] text-center"><?php echo get_field('subtitel');?></h3>
                        <?php endif; ?>
                        <p class="text-14 leading-25 text-[#525252] mt-[20px] text-center"><?php echo get_field('tekst');?></p>
                        <?php if (get_field('button')): ?>   
                            <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-[#5D7365] mx-auto font-crimson font-normal text-[#5D7365] text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 lg:hover:bg-[#5D7365] lg:hover:border-[#5D7365] lg:hover:text-[#fff] duration-300 mt-[35px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
   
    <?php if (get_field('uitlijning') === "rechts"): ?>   
     <section>
        <div class="w-full flex flex-col lg:flex-row lg:items-center">
            <div class="lg:w-[50%] order-2 lg:order-1">
                <div class="px-[15px] md:px-[25px] lg:px-[55px] max-w-[800px] mx-auto mt-[30px] lg:mt-[unset]">
                    <h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal text-center"><?php echo get_field('titel');?></h2>
                    <?php if (get_field('subtitel')): ?> 
                        <h3 class="text-22 leading-22 text-[#5D7365] font-crimson font-normal mt-[15px] text-center"><?php echo get_field('subtitel');?></h3>
                    <?php endif; ?>
                    <p class="text-14 leading-25 text-[#525252] mt-[20px] text-center"><?php echo get_field('tekst');?></p>
                    <?php if (get_field('button')): ?>   
                        <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-[#5D7365] mx-auto font-crimson font-normal text-[#5D7365] text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 lg:hover:bg-[#5D7365] lg:hover:border-[#5D7365] lg:hover:text-[#fff] duration-300 mt-[35px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php endif; ?>
                </div>
            </div>
             <div class="w-[calc(100%-15px)] md:w-[calc(100%-25px)] lg:w-[50%] aspect-[16/12] md:aspect-[16/10] lg:aspect-[16/12] bg-black rounded-bl-[20px] rounded-tl-[20px] overflow-hidden ml-[15px] md:ml-[25px] lg:ml-[unset] order-1 lg:order-2">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-w-full min-h-full object-cover object-center">
            </div>
        </div>
    </section>
    <?php endif; ?>
</section>
<?php endif; ?>
