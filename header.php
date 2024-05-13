<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block menu-non-active' ); ?>>
<header class="fixed top-0 left-0 right-0 z-[9999]">
    <div class="h-[35px] w-full bg-[#5D7365]"></div>
    <div class="h-[88px] w-full bg-[#fff]">
        <div class="w-full px-[15px] md:px-[25px] lg:px-[55px] mx-auto flex justify-between items-center h-full">
            <div class="h-[68px] w-full md:w-[233px]">
                <a href="/">
                    <?php include get_template_directory() . '/img/icon/logo.php'; ?>
                </a>
            </div>
            <div class="h-[68px] items-center text-center space-x-4 hidden lg:flex hide-in-menu">
                <?php
                if( have_rows('menu_producten', 'option') ):
                    while( have_rows('menu_producten', 'option') ) : the_row(); ?>
                     <a href="<?php echo get_sub_field('menu_producten_link', 'option');?>" class="font-crimson text-[#5D7365] hover:scale-105 duration-300 text-18"><?php echo get_sub_field('menu_producten_titel', 'option');?></a>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
            <div class="h-[68px] w-full md:w-[233px] flex items-center justify-end">
                <div class="w-[100px] md:w-[160px] flex justify-between">
                    <!-- <a href="" class="h-[40px] w-[40px] rounded-full shadow justify-center items-center hidden md:flex lg:hover:bg-[#f8f8f8] duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.231" height="16.898" viewBox="0 0 19.231 16.898">
                        <path id="love" d="M13.317,4c-1.5,0-2.926,1.747-3.95,2.84C7.848,5.219,5.491,3.565,3.425,4.381A5.414,5.414,0,0,0,0,9.414C0,14.805,8.7,20.1,9.073,20.3a.585.585,0,0,0,.6,0c.36-.208,9.055-5.5,9.055-10.89A5.42,5.42,0,0,0,13.317,4ZM9.365,19.114c-1.513-.966-8.195-5.479-8.195-9.7A4.244,4.244,0,0,1,4.136,5.371C5.9,4.814,7.823,6.588,8.887,8.1a.585.585,0,0,0,.957,0c1.063-1.516,2.985-3.292,4.751-2.734A4.244,4.244,0,0,1,17.56,9.414C17.56,13.632,10.879,18.145,9.365,19.114Z" transform="translate(0.25 -3.75)" fill="#5d7365" stroke="#5d7365" stroke-width="0.2"/>
                        </svg>
                    </a> -->
                    <div class="w-[40px] hidden md:flex"></div>
                    <a href="/cart" class="h-[40px] w-[40px] rounded-full shadow flex justify-center items-center lg:hover:bg-[#f8f8f8] duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.565" height="17.924" viewBox="0 0 18.565 17.924">
                        <path id="shopping-bag" d="M21.174,9.765a.611.611,0,0,0-.484-.247H17.48A4.919,4.919,0,0,0,12.783,5H11.518a4.919,4.919,0,0,0-4.7,4.518H3.611a.61.61,0,0,0-.491.244.745.745,0,0,0-.141.572l1.7,10.53A2.123,2.123,0,0,0,6.7,22.724H17.6a2.123,2.123,0,0,0,2.027-1.863l1.7-10.527A.743.743,0,0,0,21.174,9.765ZM11.518,6.39h1.265A3.586,3.586,0,0,1,16.2,9.518H8.1A3.586,3.586,0,0,1,11.518,6.39Zm6.866,14.228a.818.818,0,0,1-.784.716H6.7a.818.818,0,0,1-.781-.712L4.364,10.908H19.938Z" transform="translate(-2.868 -4.9)" fill="#5d7365" stroke="#fff" stroke-width="0.2"/>
                        </svg>
                    </a>
                    <button id="menu" class="h-[40px] w-[40px] rounded-full shadow flex flex-col justify-center items-center lg:hover:bg-[#f8f8f8] duration-300 relative">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="h-[123px]"></div>


<div class="menu fixed h-[calc(100dvh-123px)] w-full max-w-[390px] top-[123px] bottom-0 bg-white z-[999] min-h-[530px] overflow-y-auto">
    <div class="h-full flex flex-col justify-between w-full px-[35px] pt-[50px]">
        <div class="grid">
            <a href="/shop" class="text-16 leading-26 text-center text-[#e5e5e5] uppercase">Collectie</a>
            <?php
            if( have_rows('menu_producten', 'option') ):
                while( have_rows('menu_producten', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('menu_producten_link', 'option');?>" class="font-crimson text-26 leading-46 text-center text-[#5D7365]"><?php echo get_sub_field('menu_producten_titel', 'option');?></a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="grid grid-cols-2 border-t-[1px] border-[#e5e5e5] pt-[30px] pb-[50px]">
            <?php
            if( have_rows('hoofdmenu', 'option') ):
                while( have_rows('hoofdmenu', 'option') ) : the_row(); ?>
                <?php
                $link = get_sub_field('hoofdmenu_link', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <a href="<?php echo $link_url; ?>" class="text-14 leading-34 text-center text-[#5D7365]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
</div>

<div class="overlay-menu"></div>