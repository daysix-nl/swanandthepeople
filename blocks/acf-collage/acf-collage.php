<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image1 = get_field('afbeelding_1');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$image2 = get_field('afbeelding_2');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>
<?php
$image3 = get_field('afbeelding_3');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>
<?php
$image4 = get_field('afbeelding_4');
$image4_url = isset($image4['url']) ? esc_url($image4['url']) : '';
$image4_alt = isset($image4['alt']) ? esc_attr($image4['alt']) : '';
?>
<?php
$image5 = get_field('afbeelding_5');
$image5_url = isset($image5['url']) ? esc_url($image5['url']) : '';
$image5_alt = isset($image5['alt']) ? esc_attr($image5['alt']) : '';
?>
<?php
$image6 = get_field('afbeelding_6');
$image6_url = isset($image6['url']) ? esc_url($image6['url']) : '';
$image6_alt = isset($image6['alt']) ? esc_attr($image6['alt']) : '';
?>
<?php
$image7 = get_field('afbeelding_7');
$image7_url = isset($image7['url']) ? esc_url($image7['url']) : '';
$image7_alt = isset($image7['alt']) ? esc_attr($image7['alt']) : '';
?>
<?php
$image8 = get_field('afbeelding_8');
$image8_url = isset($image8['url']) ? esc_url($image8['url']) : '';
$image8_alt = isset($image8['alt']) ? esc_attr($image8['alt']) : '';
?>
<?php
$image9 = get_field('afbeelding_9');
$image9_url = isset($image9['url']) ? esc_url($image9['url']) : '';
$image9_alt = isset($image9['alt']) ? esc_attr($image9['alt']) : '';
?>
<?php
$image10 = get_field('afbeelding_10');
$image10_url = isset($image10['url']) ? esc_url($image10['url']) : '';
$image10_alt = isset($image10['alt']) ? esc_attr($image10['alt']) : '';
?>
<?php
$image11 = get_field('afbeelding_11');
$image11_url = isset($image11['url']) ? esc_url($image11['url']) : '';
$image11_alt = isset($image11['alt']) ? esc_attr($image11['alt']) : '';
?>
<?php
$image12 = get_field('afbeelding_12');
$image12_url = isset($image12['url']) ? esc_url($image12['url']) : '';
$image12_alt = isset($image12['alt']) ? esc_attr($image12['alt']) : '';
?>
<!-- COLLAGE -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?>">
    <?php if (get_field('titel')): ?> 
    <div class="container text-center mb-[30px]">
        <h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal"><?php echo get_field('titel');?></h2>
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 lg:gap-4 container">
            <div class="grid gap-2 lg:gap-4 h-[515px] lg:h-[825px] xl:h-[913px]">
                <div class="h-[200px] lg:h-[313px] xl:h-[356px] w-full overflow-hidden rounded-[20px]">
                    <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>">
                </div>
                <div class="h-[130px] lg:h-[204px] xl:h-[233px] w-full overflow-hidden rounded-[20px]">
                    <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>">
                </div>
                <div class="h-[148px] lg:h-[232px] xl:h-[264px] w-full overflow-hidden rounded-[20px]">
                    <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>">
                </div>
            </div>
            <div class="grid gap-2 lg:gap-4 h-[515px] lg:h-[825px] xl:h-[913px]">
                <div class="h-[155px] lg:h-[234px] xl:h-[278px] w-full overflow-hidden rounded-[20px]">
                    <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>">
                </div>
                <div class="h-[222px] lg:h-[349px] xl:h-[397px] w-full overflow-hidden rounded-[20px]">
                    <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image5_url; ?>" alt="<?php echo $image5_alt; ?>">
                </div>
                <div class="h-[101px] lg:h-[160px] xl:h-[178px] w-full overflow-hidden rounded-[20px]">
                    <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image6_url; ?>" alt="<?php echo $image6_alt; ?>">
                </div>
            </div>
            <div class="grid gap-2 lg:gap-4 h-[515px] lg:h-[825px] xl:h-[913px]">
                <div class="h-[221px] lg:h-[345px] xl:h-[395px] w-full overflow-hidden rounded-[20px]">
                   <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image7_url; ?>" alt="<?php echo $image7_alt; ?>">
                </div>
                <div class="h-[122px] lg:h-[190px] xl:h-[218px] w-full overflow-hidden rounded-[20px]">
                   <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image8_url; ?>" alt="<?php echo $image8_alt; ?>">
                </div>
                <div class="h-[136px] lg:h-[213px] xl:h-[241px] w-full overflow-hidden rounded-[20px]">
                   <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image9_url; ?>" alt="<?php echo $image9_alt; ?>">
                </div>
            </div>
            <div class="grid gap-2 lg:gap-4 h-[515px] lg:h-[825px] xl:h-[913px]">
               <div class="h-[111px] lg:h-[172px] xl:h-[198px] w-full overflow-hidden rounded-[20px]">
                   <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image10_url; ?>" alt="<?php echo $image10_alt; ?>">
                </div>
                <div class="h-[266px] lg:h-[417px] xl:h-[475px] w-full overflow-hidden rounded-[20px]">
                    <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image11_url; ?>" alt="<?php echo $image11_alt; ?>">
                </div>
                <div class="h-[102px] lg:h-[158px] xl:h-[181px] w-full overflow-hidden rounded-[20px]">
                    <img class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo $image12_url; ?>" alt="<?php echo $image12_alt; ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
