<?php

/* Template Name: Про Нас
 *
 */

get_header(); ?>

<section class="about">
   <div class="container">
      <h2 class="title">Про нас</h2>
      <ul class="about__list">
      <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'category_name' => 'about-us'
            ]);

            if( $myposts ){
                foreach( $myposts as $post ){
                    setup_postdata( $post );

                    ?>
                        <li class="about__item">
                           <div class="about__item-box"> 
                              <?php echo get_the_post_thumbnail($post->ID, array( 250, 350)); ?>
                              <h3><?php the_title(); ?></h3>
                              <p><?php the_content() ?></p>
                           </div>
                        </li>
                    <?php 
                }
            }
            wp_reset_postdata();
        ?>
      </ul>
   </div>
</section>

<?php get_footer(); ?>
