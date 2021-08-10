<?php
/**
/* Template Name: Partners
 *
 * Displays Only Partners template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>
   <div class="container">
      <div class="container partners">
         <div class="text">

            <h1>Туризм Херсону</h1>
            <p>Запрошуємо на гастрономічний тур Херсонщиною. Вже цієї осені Ви отримаєте можливість скоштувати південні смаколики, продегустувати найсмачніші вина регіону, насолодитись локальними сирами і зрозуміти яка насправді смачна Херсонщина. Все буде туризм!</p>
            <button><a href="tour-list" style="color: white;">Відвідати</a></button>

         </div>

         <video id="vid" controls src="<?php vid('IMG_4660.MOV'); ?>" width="50%" height=auto style="margin-right: -20%; padding-left: 10px; width: 70%;"></video>
      
      </div>

      <h1 style="text-align: center; font-size: 70px; padding-top: 20px;">Ми шукаємо партнерів!</h1>

   </div>
    <?php get_footer(); ?>