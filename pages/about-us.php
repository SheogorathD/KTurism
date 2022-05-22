<?php
/**
/* Template Name: About
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>
   <div class="container">
      <div class="about_page">
         <div class="box">
            <img src="<?php abimage('Orlenko.jpg'); ?>" alt="Orlenko" style="weight: 350px;">
            <h3>Орленко Олена Владиславівна</h3>
            <p>Завідувачка кафедри готельно-ресторанного та туристичного бізнесу, професорка, докторка економічних наук.</p>
         </div>

         <div class="box">
            <img src="<?php abimage('Yarovuy.jpg'); ?>" alt="Yarovuy" style="weight: 350px;">
            <h3>Яровий Вадим Федорович</h3>
            <p>Доцент, доктор економічних наук.</p>
         </div>

         <div class="box">
            <img src="<?php abimage('Makienko.jpg'); ?>" alt="Makienko" style="weight: 350px;">
            <h3>Макієнко Олексій Анатолійович</h3>
            <p>Доцент, кандидат історичних наук.</p>
         </div>

         <div class="box">
            <img src="<?php abimage('IMG_9687.jpg'); ?>" alt="Lemeshchuk" style="weight: 350px;">
            <h3>Лемещук Олександр Ігорович</h3>
            <p>Менеджмент ІТ проєкту.</p>
         </div>

         <div class="box">
            <img src="<?php abimage('Shcherbyna.jpg'); ?>" alt="Shcherbyna" style="weight: 350px;">
            <h3>Щербина Володимир Володимирович</h3>
            <p>ІТ розробник.</p>
         </div>

         <div class="box">
            <img src="<?php abimage('Zhukov.jpg'); ?>" alt="Zhukov">
            <h3>Жуков Андрій Сергійович</h3>
            <p>ІТ розробник.</p>
         </div>
         
      </div>

   </div>
<?php get_footer(); ?>