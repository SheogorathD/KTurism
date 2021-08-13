<?php
/**
/* Template Name: Tour
 *
 * Displays Only Tour template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>
    
    <div class="container">
        <div class="route">

            <h2>Маршрут водно-пішохідної екскурсії "Мандри загубленим світом"</h2>
            <p>Від Національного природного парку «Нижньодніпровський»‎</p>

                <div class="manyBoxes">

                    <div class="box">
                        <img src="<?php timage('Кемпінг Козак.jpg'); ?>" alt="kemping_kozak" style="width: 250px;">
                        <h3>Кемпінг "Козак"</h3>
                    </div>
                    <div class="box">
                        <img src="<?php timage('Велетні загубленого світу.jpg'); ?>" alt="zagubleniy_svit" style="width: 250px; margin-top: -147.39px;">
                        <h3>Велетні загубленого світу</h3>
                    </div>
                    <div class="box">
                        <img src="<?php timage('Вхід до загубленого світу Дніпровської Гілеї.jpg'); ?>" alt="dniprovska_gileya" style="width: 250px;">
                        <h3>Вхід до загубленого світу Дніпровської Гілеї</h3>
                    </div>
                    <div class="box">
                        <img src="<?php timage('Загублений світ_Річка Хмільник.jpg'); ?>" alt="hmilnyk" style="width: 250px;">
                        <h3>Загублений світ. Річка Хмільник</h3>
                    </div>
                    <div class="box">
                        <img src="<?php timage('Зарості латаття.jpg'); ?>" alt="zarosti_latattya" style="width: 250px;">
                        <h3>Зарості латаття</h3>
                    </div>
                    <div class="box">
                        <img src="<?php timage('Річка Козак.jpg'); ?>" alt="richka_kozak" style="width: 250px;">
                        <h3>Річка Козак</h3>
                    </div>
                    <div class="box">
                        <img src="<?php timage('bober.jpg'); ?>" alt="bober" style="width: 250px;">
                        <h3>Бобер європейський</h3>
                    </div>
                    <div class="box">
                        <img src="<?php timage('Робота бобрів.jpg'); ?>" alt="robota_bobriv" style="width: 250px; margin-top: -145.84px;">
                        <h3>Робота бобрів</h3>
                    </div>                

                </div>
        

    
        
        <div class="third">

            <h2>Маршрут водно-пішохідної екскурсії "Мандри загубленим світом"</h2>
            <p>Від Національного природного парку «Нижньодніпровський»‎</p>

            <div class="audio">
                <div class="audioA">

                    <h2>Аудіогід</h2>
                    <audio controls src="<?php taudio('zagubleniy_svit.mp3'); ?>" style="width: 400px; padding-left: 50px; padding-bottom: 10px;"></audio>
                    <a href="https://www.google.com/maps/d/u/0/viewer?mid=146rpkNKXOG5soxAMFEi2gKeCb9pkiSxH&ll=46.78017420866445%2C33.281060005570474&z=15" style="margin-left: -500px; padding-top: 200px;">Перейти на карту для перегляду інтерактивного маршруту</a>
                </div>

                <img src="<?php timage('Маршрут.jpg'); ?>" alt="route" style="width:50%;">
                

            </div>
            
        </div>
        </div>
    </div>    

        <?php get_footer(); ?>