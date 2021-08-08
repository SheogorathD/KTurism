<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>
	<div class="container">
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>

        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

        <div id="mapid" style="width:1400px; height: 600px;"></div>

        <script>
            var map = L.map('mapid').setView([46.753,33.682], 8);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var onlyMarker = L.icon({
                iconUrl: '<?php echo get_template_directory_uri(); ?>/media/img/icons/marker.png',
                iconAnchor: [35,60],
                popupAnchor:  [-1, -55] // point from which the popup should open relative to the iconAnchor
            });
            
            var marker = L.marker([46.87602634982689, 34.43520893540559], {
                icon: onlyMarker,
                title:"смт Нижні Сірогози Генічеського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('01.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Скіфський курган «Огуз» – пам’ятка археології IV ст. до н. е. (смт Нижні Сірогози Генічеського району)</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/Yo8iLY9sMZa78R3i8'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps' ></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.75832312271102, 33.057909336890944], {
                icon: onlyMarker,
                title:"с. Тягинка Бериславського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('02.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Залишки оборонних споруд фортеці Тягинь – пам’ятка археології ХIV – XVI ст. (с. Тягинка Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/1g5xVspwvGALthEr7'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([47.00622334807345, 33.64999371414304], {
                icon: onlyMarker,
                title:"с. Республіканець Бериславського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('03.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Кам’янська Січ та могила кошового отамана Костя Гордієнка – пам’ятка археології XVIII ст. (с. Республіканець Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/ZxqU5ntfUTQjidJw7'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.848956271235494, 33.44089428461835], {
                icon: onlyMarker,
                title:"м. Берислав",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('04.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Свято-Введенська дерев’яна церква – пам’ятка архітектури початку XVIII ст. (м. Берислав).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/BDh7jSEvQtV68MB1A'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.8537, 33.20877], {
                icon: onlyMarker,
                title:"с. Бургунка Бериславського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('05.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Бургунський кам’яний міст – пам’ятка історії кінця XVIII ст. (с. Бургунка Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/b9FGhYBUmavdDFxX8'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.64114720211024, 32.626284155775465], {
                icon: onlyMarker,
                title:"м. Херсон",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('06.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Херсонська фортеця – пам’ятка історії та архітектури кінця XVIII ст. (м. Херсон).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/1qCq8j7CbxXXu1nN6'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.95205399885384, 33.606321112762195], {
                icon: onlyMarker,
                title:"с. Червоний Маяк Бериславського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('07.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Свято-Григоріївський Бізюків чоловічий монастир – пам’ятка історії кінця XVIII – початку ХХ ст. (с. Червоний Маяк Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/3nSfHajuPoztTinA9'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.78742560928144, 33.35768402638266], {
                icon: onlyMarker,
                title:"с. Веселе Бериславського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('08.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Водонапірна вежа маєтку князя П. М. Трубецького («вежа Вітовта») – пам’ятка архітектури XІХ ст. (с. Веселе Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/9ccajvCzeoqtyLTa9'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.492468732079764, 32.2326636422778], {
                icon: onlyMarker,
                title:"с. Рибальче Скадовського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('09.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Станіслав-Аджигольські маяки – пам’ятка історії початку ХХ ст. (с. Рибальче Скадовського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/3R815z5WVeqMf1cV7'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.67160778617346, 32.030020755170774], {
                icon: onlyMarker,
                title:"с. Олександрівка Херсонського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('10.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Хабловський задній маяк – «Маяк у полі» (с. Олександрівка Херсонського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/Vpda6LkezfSNpkBM7'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([46.49132385323168, 31.90428104402817], {
                icon: onlyMarker,
                title:"с. Геройське Скадовського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('11.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Соляні промисли («Рожеві озера») у селі Геройському (Скадовський район).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/fvf4PBRrfFWfBSrb7'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

            var marker = L.marker([47.23884818323438, 33.90536072037797], {
                icon: onlyMarker,
                title:"с. Новоолександрівка Бериславського району",
            }).addTo(map)
            .bindPopup("<img src='<?php oimage('12.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Руїни палацу Фальц-Фейнів (с. Новоолександрівка Бериславського району)</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/ixkzu7zm7UQ3tKda7'><img src='<?php echo get_template_directory_uri(); ?>/media/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});

        </script>
    </div>
	        <?php get_footer(); ?>