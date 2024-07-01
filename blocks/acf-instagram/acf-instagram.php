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
$link = get_field('button');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- INSTAGRAM -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?>">
    <div class="h-full lg:h-[418px] xl:h-[470px] bg-[#5D7365] grid lg:flex justify-end relative overflow-hidden">
        <div class="h-full w-screen lg:w-[calc(50%-345px)] xl:w-[calc(50%-390px) relative overflow-hidden order-2 z-[2] max-h-[650px] lg:max-h-[unset]">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover ocject-center-top">
        </div>
        <div class="lg:absolute top-0 left-0 right-0 bottom-0 order-1 z-[3]">
            <div class="w-full h-full flex items-center relative">
                <div class="container md:h-[592px] lg:h-[202px] xl:h-[228px]">
                    <div class="w-full lg:max-w-[956px] xl:max-w-[1080px] h-full lg:ml-[45px] xl:ml-[50px] flex flex-col lg:flex-row items-center justify-between">
                        <div class="h-full w-full lg:w-[288px] xl:w-[329px] flex items-center order-2 lg:order-1 pt-[130px] md:pt-[unset] pb-[50px] md:pb-[unset]">
                            <div class="">
                                <h3 class="font-crimson font-normal text-16 leading-28 text-white">@<?php echo get_field('gebruikersnaam');?></h3>
                                <h2 class="text-white font-crimson font-normal text-36 leading-36 mt-[8px]"><?php echo get_field('titel');?></h2>
                                 <?php if (get_field('button')): ?>   
                                    <a href="<?php echo $link_url; ?>" class="w-fit px-[30px] h-[50px] md:h-[40px] xl:h-[50px] flex items-center border-[1px] border-white font-crimson font-normal text-white text-18 leading-22 md:text-16 md:leading-21 xl:text-18 xl:leading-22 lg:hover:bg-[#fff] lg:hover:border-[#fff] lg:hover:text-[#5D7365] duration-300 mt-[35px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="h-[50vw] w-[360px] md:h-full md:w-full max-w-full lg:w-full lg:max-w-[652px] xl:max-w-[733px] justify-between order-1 lg:order-2 pt-[80px] lg:pt-[unset]">
                            <div class="swiper mySwiperInsta absolute md:relative top-[80px] md:top-[unset] left-0 right-0 md:left-[unset] md:right-[unset]">
                                <div class="swiper-wrapper ml-[calc(50vw-180px)] md:ml-[unset] mr-[calc(50vw+380px)] md:mr-[unset]">
                                    <a href="<?php echo $link_url; ?>" class="swiper-slide aspect-[1/1] w-[50vw] h-[50vw] md:w-[228px] md:h-[228px] lg:w-[202px] xl:w-[228px] lg:h-[202px] xl:h-[228px] bg-black overflow-hidden mr-[30px] lg:mr-[unset] rounded-[20px]">
                                        <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="min-h-full min-w-full object-cover ocject-center">
                                    </a>
                                    <a href="<?php echo $link_url; ?>" class="swiper-slide aspect-[1/1] w-[50vw] h-[50vw] md:w-[228px] md:h-[228px] lg:w-[202px] xl:w-[228px] lg:h-[202px] xl:h-[228px] bg-black overflow-hidden mr-[30px] lg:mr-[unset] rounded-[20px]">
                                        <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="min-h-full min-w-full object-cover ocject-center">
                                    </a>
                                    <a href="<?php echo $link_url; ?>" class="swiper-slide aspect-[1/1] w-[50vw] h-[50vw] md:w-[228px] md:h-[228px] lg:w-[202px] xl:w-[228px] lg:h-[202px] xl:h-[228px] bg-black overflow-hidden mr-[30px] lg:mr-[unset] rounded-[20px]">
                                        <img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>" class="min-h-full min-w-full object-cover ocject-center">
                                    </a>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
 </section>
<?php endif; ?>
