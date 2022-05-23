<?php
/**
 * Template Name: Home
 *
 */
get_header()
?>

<div class="container">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <div id="mapid"></div>
    <script>
        var map = L.map('mapid').setView([46.753,33.682], 8);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var onlyMarker = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/marker.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55] // point from which the popup should open relative to the iconAnchor
        });
        
        var cMA = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-1.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cMB = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-2.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cMC = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-3.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cMD = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-4.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cME = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-5.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cMF = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-6.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cMG = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-7.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cMH = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-8.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cMI = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-9.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cMJ = L.icon({
            iconUrl: '<?php echo get_template_directory_uri(); ?>/assets/img/icons/100x100-10.png',
            iconAnchor: [35,60],
            popupAnchor:  [-1, -55],
            iconSize: [70,70]
        });
        var cA = L.marker([46.87602634982689, 34.43520893540559], {
            icon: cMA,
            title:"смт Нижні Сірогози Генічеського району",
        }).bindPopup("<img src='<?php oimage('01.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Скіфський курган «Огуз» – пам’ятка археології IV ст. до н. е. (смт Нижні Сірогози Генічеського району)</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='ogus' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/Yo8iLY9sMZa78R3i8'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps' ></a></div>", {maxHeight: 500, minWidth: 400});
        var cB = L.marker([46.75832312271102, 33.057909336890944], {
            icon: cMB,
            title:"с. Тягинка Бериславського району",
        }).bindPopup("<img src='<?php oimage('02.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Залишки оборонних споруд фортеці Тягинь – пам’ятка археології ХIV – XVI ст. (с. Тягинка Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='tagyn' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/1g5xVspwvGALthEr7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cC = L.marker([47.00622334807345, 33.64999371414304], {
            icon: cMC,
            title:"с. Республіканець Бериславського району",
        }).bindPopup("<img src='<?php oimage('03.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Кам’янська Січ та могила кошового отамана Костя Гордієнка – пам’ятка археології XVIII ст. (с. Республіканець Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='ksich' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/ZxqU5ntfUTQjidJw7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cD = L.marker([46.848956271235494, 33.44089428461835], {
            icon: cMD,
            title:"м. Берислав",
        }).bindPopup("<img src='<?php oimage('04.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Свято-Введенська дерев’яна церква – пам’ятка архітектури початку XVIII ст. (м. Берислав).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='cerkva' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/BDh7jSEvQtV68MB1A'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cE = L.marker([46.8537, 33.20877], {
            icon: cME,
            title:"с. Бургунка Бериславського району",
        }).bindPopup("<img src='<?php oimage('05.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Бургунський кам’яний міст – пам’ятка історії кінця XVIII ст. (с. Бургунка Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='mist' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/b9FGhYBUmavdDFxX8'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cF = L.marker([46.64114720211024, 32.626284155775465], {
            icon: cMF,
            title:"м. Херсон",
        }).bindPopup("<img src='<?php oimage('06.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Херсонська фортеця – пам’ятка історії та архітектури кінця XVIII ст. (м. Херсон).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='fortecya' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/1qCq8j7CbxXXu1nN6'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cG = L.marker([46.95205399885384, 33.606321112762195], {
            icon: cMG,
            title:"с. Червоний Маяк Бериславського району",
        }).bindPopup("<img src='<?php oimage('07.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Свято-Григоріївський Бізюків чоловічий монастир – пам’ятка історії кінця XVIII – початку ХХ ст. (с. Червоний Маяк Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='monastyr' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/3nSfHajuPoztTinA9'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cH = L.marker([46.78742560928144, 33.35768402638266], {
            icon: cMH,
            title:"с. Веселе Бериславського району",
        }).bindPopup("<img src='<?php oimage('08.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Водонапірна вежа маєтку князя П. М. Трубецького («вежа Вітовта») – пам’ятка архітектури XІХ ст. (с. Веселе Бериславського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='vezha' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/9ccajvCzeoqtyLTa9'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cI = L.marker([46.492468732079764, 32.2326636422778], {
            icon: cMI,
            title:"с. Рибальче Скадовського району",
        }).bindPopup("<img src='<?php oimage('09.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Станіслав-Аджигольські маяки – пам’ятка історії початку ХХ ст. (с. Рибальче Скадовського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='mayaky' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/3R815z5WVeqMf1cV7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cJ = L.marker([46.67160778617346, 32.030020755170774], {
            icon: cMJ,
            title:"с. Олександрівка Херсонського району",
        }).bindPopup("<img src='<?php oimage('10.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Хабловський задній маяк – «Маяк у полі» (с. Олександрівка Херсонського району).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='mayak' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/Vpda6LkezfSNpkBM7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cK = L.marker([46.49132385323168, 31.90428104402817], {
            icon: onlyMarker,
            title:"с. Геройське Скадовського району",
        }).bindPopup("<img src='<?php oimage('11.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Соляні промисли («Рожеві озера») у селі Геройському (Скадовський район).</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='ozera' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/fvf4PBRrfFWfBSrb7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var cP = L.marker([47.23884818323438, 33.90536072037797], {
            icon: onlyMarker,
            title:"с. Новоолександрівка Бериславського району",
        }).bindPopup("<img src='<?php oimage('12.jpg'); ?>' width='100%' height='auto'><p style='font-size: 20px;'>Руїни палацу Фальц-Фейнів (с. Новоолександрівка Бериславського району)</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='ruins' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/ixkzu7zm7UQ3tKda7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        
            /***************************************************aGroup***************************************************/
        
        var gA = L.marker([46.79182601931684, 33.36328892569683], {
        icon: onlyMarker,
        title:"с. Веселе Бериславського району",
        }).bindPopup("<p style='font-size: 20px;'>Виноробне господарство Князя П. М. Трубецького</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/uweGSMpSog2KTXDY9'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        
        var gB = L.marker([46.7472716882117, 33.295550559056814], {
        icon: onlyMarker,
        title:"м. Нова Каховка",
        }).bindPopup("<p style='font-size: 20px;'>Дім марочних коньяків «Таврія»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/T8wbmBrFtcdhAF7aA'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var gC = L.marker([46.542647962514536, 32.56654631659656], {
        icon: onlyMarker,
        title:"м. Гола Пристань Скадовського району",
        }).bindPopup("<p style='font-size: 20px;'>Сімейна виноробня «Клара Марсала»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/Q89xkxexTnA8JTVt5'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var gD = L.marker([46.71944725123051, 32.580721463733525], {
        icon: onlyMarker,
        title:"с. Степанівка Херсонської міської ради",
        }).bindPopup("<p style='font-size: 20px;'>Сімейна виноробня «Château Kurin» </p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/SXSsg2shsiFY9fFV9'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var gE = L.marker([46.62721369983363, 32.74091260881092], {
        icon: onlyMarker,
        title:"м. Олешки, Херсонського району",
        }).bindPopup("<p style='font-size: 20px;'>Ресторан авторської української кухні «Пан Отаман»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://g.page/pan-ataman-kherson?share'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var gF = L.marker([46.576282529527866, 32.15849398187228], {
        icon: onlyMarker,
        title:"с. Станіслав Херсонського району",
        }).bindPopup("<p style='font-size: 20px;'>Екоферма «Лиманська коза»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/wVyA1MirqYgXSMBp7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        // var gG = L.marker([46.62721369983363, 32.74091260881092], {
        // icon: onlyMarker,                                                     Нет координат
        // title:"с. Музиківка Херсонського району",
        // }).bindPopup("<p style='font-size: 20px;'>Екоферма «Коза Амальтея»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://g.page/pan-ataman-kherson?share'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var gH = L.marker([46.551650587827154, 33.8219714226995], {
        icon: onlyMarker,
        title:"с. Тавричанка Каховського району",
        }).bindPopup("<p style='font-size: 20px;'>Державне підприємство «Дослідне господарство «Асканійське»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/Qjgfmecka8LLWPUc9'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
            /***************************************************Gastronom***************************************************/
        var eA = L.marker([46.582371352449236, 33.04155764889663], {
        icon: onlyMarker,
        title:"«Херсонська пустеля», урочище Буркути",
        }).bindPopup("<p style='font-size: 20px;'>Національний природний парк «Олешківські піски»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/8J97h8X3oevaW1Xd7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eB = L.marker([47.069163891159185, 33.628333938236125], {
        icon: onlyMarker,
        title:"",
        }).bindPopup("<p style='font-size: 20px;'>Національний природний парк «Кам’янська Січ»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/JoAZQ19MhRLxiM759'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eC = L.marker([46.66621962850968, 32.65733922103027], {
        icon: onlyMarker,
        title:"",
        }).bindPopup("<p style='font-size: 20px;'>Національний природний парк «Нижньодніпровський»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/tEZJRwmdxVcfdjmB8'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eD = L.marker([46.5860135786528, 32.12511509301834], {
        icon: onlyMarker,
        title:"(«Станіславські скелі»",
        }).bindPopup("<p style='font-size: 20px;'>Станіславський ландшафтний заказник загальнодержавного значення</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/cyWpFvui5qEYyyBg8'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eE = L.marker([46.53620356532584, 32.65266484657383], {
        icon: onlyMarker,
        title:"с. Велика Кардашинка Скадовського району",
        }).bindPopup("<p style='font-size: 20px;'>Історико-розважальний комплекс «Зелені хутори Таврії»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/rG9nJXG9i6Ae4jGb6'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eF = L.marker([46.59148554153926, 32.76158203310372], {
        icon: onlyMarker,
        title:"м. Олешки, Херсонського району, урочище «Ближній Карабай»",
        }).bindPopup("<p style='font-size: 20px;'>База зеленого туризму «Чумацька криниця»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/KqAu7Hd44jiiue5X9'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eG = L.marker([46.539481931974315, 32.553932996153655], {
        icon: onlyMarker,
        title:"м. Гола Пристань Скадовського району",
        }).bindPopup("<p style='font-size: 20px;'>База зеленого туризму «Чайка»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/P6a6hoG8kZ3MYHDo7'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eH = L.marker([46.59004812383713, 32.748431456522596], {
        icon: onlyMarker,
        title:"с. Нечаєво Херсонського району",
        }).bindPopup("<p style='font-size: 20px;'>Зелена садиба «Казка Олешшя»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/cE1ESdysfmSuEj8GA'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eI = L.marker([46.56175428417032, 32.358711897871785], {
        icon: onlyMarker,
        title:"с. Кізомис Херсонського району",
        }).bindPopup("<p style='font-size: 20px;'>Екоклуб «Savage»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/3x7XrWsYBNVBxSLA9'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var eJ = L.marker([46.595159872807834, 32.76854110614474], {
        icon: onlyMarker,
        title:"с. Саги Херсонського району",
        }).bindPopup("<p style='font-size: 20px;'>Екосадиба «Райдуга»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/JP8WSXUssMmsZYh57'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
            /***************************************************ECO***************************************************/
        var aA = L.marker([46.60188911143459, 32.727639688980304], {
        icon: onlyMarker,
        title:"м. Олешки Херсонського району",
        }).bindPopup("<p style='font-size: 20px;'>Кінний клуб «Буцефал»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/8h4fDnvdoSttYi8i8'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var aB = L.marker([46.59831528588017, 32.79357796573364], {
        icon: onlyMarker,
        title:"с. Саги Херсонського району",
        }).bindPopup("<p style='font-size: 20px;'>Кінний клуб «Grand-Prix»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/r7Tq8tnWxjDHqesA8'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var aC = L.marker([46.75550008039247, 33.33602694102427], {
        icon: onlyMarker,
        title:"м. Нова Каховка",
        }).bindPopup("<p style='font-size: 20px;'>Яхт-клуб «Maxmarine» </p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/v9tKZtaeD6SdLRcD6'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var aD = L.marker([46.63243727081649, 32.61546493146783], {
        icon: onlyMarker,
        title:"м. Херсон, 3-й затон",
        }).bindPopup("<p style='font-size: 20px;'>Агенція екотуризму «ForTouristTravel»</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/m72wqFNSjjqssbaSA'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var aE = L.marker([48.579482380697094, 35.236921741924235], {
        icon: onlyMarker,
        title:"м. Херсон, 3-й затон",
        }).bindPopup("<p style='font-size: 20px;'>Клуб активного відпочинку River Club</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/8PPsEwwRNz5xQ5SE6'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        var aF = L.marker([46.57286046203756, 32.13292016239571], {
        icon: onlyMarker,
        title:"с. Станіслав Херсонського району",
        }).bindPopup("<p style='font-size: 20px;'>Flykherson: Outdoor Activity Organiser</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/MUfm913DHfTYvdyJA'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
        //     var aG = L.marker([46.595159872807834, 32.76854110614474], {
        // icon: onlyMarker,
        // title:"с. Микільське Херсонського району",
        // }).bindPopup("<p style='font-size: 20px;'>Природний скалодром</p><div style='display:flex; flex-direction: row; justify-content: space-between;'><a href='#' style='font-size:15px; color: #000; padding-top:17px;'>Детальніше ></a><a href='https://goo.gl/maps/JP8WSXUssMmsZYh57'><img src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/google-map.svg' width='30px' style='padding-right: 10px;' alt='google-maps'></a></div>", {maxHeight: 500, minWidth: 400});
            /***************************************************Active***************************************************/
            /***************************************************Groups***************************************************/
        var culture = L.layerGroup([cA, cB, cC, cD, cE, cF, cG, cH, cI, cJ, cK, cP]).addTo(map);
        var gastronom = L.layerGroup([gA, gB, gC, gD, gE, gF, gH]).addTo(map);
        var eco = L.layerGroup([eA, eB, eC, eD, eE, eF, eG, eH, eI, eJ]).addTo(map);
        var active = L.layerGroup([aA, aB, aC, aD, aE, aF]).addTo(map);
        var overlayMaps = {
            "Об’єкти культурно-пізнавального туризму": culture,
            "Об’єкти гастрономічного туризму": gastronom,
            "Об’єкти екологічного (сільського, зеленого) туризму": eco,
            "Об’єкти активного туризму": active
        };
        L.control.layers(overlayMaps).addTo(map);
    </script>
</div>
<?php get_footer(); ?>