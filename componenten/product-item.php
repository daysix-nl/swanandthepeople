


<div class="product-item h-fit relative">

        <a href="<?php the_permalink(); ?>">
            <div class="w-full flex justify-center">
                <div class="aspect-[12/16] w-full bg-[#F2FBFF] flex justify-center items-center rounded-[10px] overflow-hidden relative">
                    <img src="<?php echo get_the_post_thumbnail_url($product->get_id()); ?>" alt="" class="min-w-full min-h-full object-cover object-center">
                    <?php if (get_field('video', $product->get_id())): ?>   
                    <video class="w-full h-full object-cover absolute top-0 right-0 video hidden md:block" autoplay="" loop="" muted="" playsinline="">
                        <source src="<?php echo get_field('video', $product->get_id());?>#t=0.001" type="video/mp4">
                        Uw browser ondersteunt geen HTML5-video.
                    </video>
                    <?php endif; ?>
                </div>
            </div>
            <h3 class="text-[#5D7365] text-22 leading-32 font-normal mt-[8px] text-center max-w-[130px] mx-auto"><?php the_title(); ?></h3>
            <div class="text-[#525252] font-jakarta text-15 leading-24 font-normal md:mt-[1px] relative overflow-hidden text-center"><?php echo $product->get_price_html(); ?>
                <div class="absolute selectoption normal-case h-[25px] bg-white w-full underline">Selecteer een maat</div>
            </div>
        </a>
        <div class="flex flex-wrap w-[155px] mx-auto mt-[5px] md:mt-[10px] justify-center space-x-[10px]">
        <?php
            global $post;
            // Haal de huidige productcategorieën op
            $terms = wp_get_post_terms($post->ID, 'product_cat');
            $category_ids = array();
            foreach ($terms as $term) {
                $category_ids[] = $term->term_id;
            }
            // Huidige product uitsluiten
            $current_product_id = $post->ID;
            // De query voor gerelateerde producten
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1, // Aantal gerelateerde producten om weer te geven
                // 'post__not_in' => array($current_product_id), // Uitsluiten van het huidige product
                'orderby' => 'rand', // Willekeurige volgorde (je kunt wijzigen naar andere orderby-opties)
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'id',
                        'terms' => $category_ids,
                        'operator' => 'IN',
                    ),
                ),
            );
            $related_products = new WP_Query($args);
            if ($related_products->have_posts()) :
                while ($related_products->have_posts()) : $related_products->the_post();  // Informatie over het product ophalen
                        $product = wc_get_product( get_the_ID() ); ?>
                        <a href="<?php the_permalink(); ?>" class="h-[11px] w-[11px] rounded-full block" style="background:<?php the_field('kleur', get_the_ID());?>;"></a>
                <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>            
  
</div>