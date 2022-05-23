
<?php

/* Template Name: Тури
 *
 */

get_header(); ?>

<section class="tour__excursion">
    <div class="container">
        

        <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'category_name' => 'tours'
            ]);

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );

                    ?>
                        <div class="container">
                            <h2 class="title"><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    <?php 
                }
            }
            wp_reset_postdata();
        ?>
        
    </div>
</section>

<?php get_footer(); ?>