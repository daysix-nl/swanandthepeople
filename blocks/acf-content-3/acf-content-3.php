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
<!-- CONTENT 3 -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?>">
    <div class="w-[360px] md:w-[600px] lg:w-[800px] mx-auto">
        <h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal text-center"><?php echo get_field('titel');?></h2>
        <?php if (get_field('subtitel')): ?> 
            <h3 class="text-22 leading-22 text-[#5D7365] font-crimson font-normal mt-[15px] text-center"><?php echo get_field('subtitel');?></h3>
        <?php endif; ?>
        <p class="text-14 leading-25 text-[#525252] mt-[20px] text-center"><?php echo get_field('tekst');?></p>
        <?php if (get_field('button')): ?>   
            <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-[#5D7365] mx-auto font-crimson font-normal text-[#5D7365] text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 lg:hover:bg-[#5D7365] lg:hover:border-[#5D7365] lg:hover:text-[#fff] duration-300 mt-[35px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
