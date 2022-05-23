<?php
/**
 * Template Name: Partners
 *
 * 
 */

 get_header(); ?>

<div class="container">
<div class="partners-page">
   <div class="partners-page__main-content">
      <div class="partners-page__main-text">
         <h1><?php the_title() ?></h1>
         <p>Запрошуємо на гастрономічний тур Херсонщиною. Вже цієї осені Ви отримаєте можливість скоштувати південні смаколики,
         продегустувати найсмачніші вина регіону, насолодитись локальними сирами і зрозуміти яка насправді смачна Херсонщина.
         Все буде туризм!
         </p>
      </div>
         <?php the_content() ?>
      </div>
      <a href="tour-list">Відвідати</a>
      <h1>Ми шукаємо партнерів!</h1>
   </div>
</div>

<?php get_footer(); ?>