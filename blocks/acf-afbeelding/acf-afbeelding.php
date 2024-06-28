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
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- AFBEELDING -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?>">
    <div class="w-[360px] md:w-[600px] lg:w-[800px] aspect-[3/2] mx-auto rounded-[20px] overflow-hidden relative">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
        <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#00000017]">
            <div class="h-full w-full flex justify-center items-center flex-col">
                <?php if (get_field('titel')): ?>   
                <h2 class="text-24 leading-24 lg:text-36 lg:leading-36 text-[#fff] font-crimson font-normal text-center px-[30px]"><?php echo get_field('titel');?></h2>
                <?php endif; ?>
                <?php if (get_field('button')): ?>   
                <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-[#fff] mx-auto font-crimson font-normal text-[#fff] text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 lg:hover:bg-[#fff] lg:hover:border-[#fff] lg:hover:text-[#5D7365] duration-300 mt-[35px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                 <?php endif; ?>
            </div>
        </div>
       
    </div>
</section>
<?php endif; ?>
