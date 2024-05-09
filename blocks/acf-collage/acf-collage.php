<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- COLLAGE -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('witruimte_bovenkant');?> <?php echo get_field('witruimte_onderkant');?>">
    <?php if (get_field('titel')): ?> 
    <div class="container text-center mb-[30px]">
        <h2 class="text-36 leading-36 text-[#5D7365] font-crimson font-normal"><?php echo get_field('titel');?></h2>
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 lg:gap-4 container">
            <div class="grid gap-2 lg:gap-4">
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-2 lg:gap-4">
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-2 lg:gap-4">
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-2 lg:gap-4">
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-[20px]" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

   
</section>
<?php endif; ?>
