<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('resources/css/header.css')}}">
    <title>Document</title>
    <style>
        body {
            max-width: 1920px;
            background-image: url("{{ asset('public/images/background-poster.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            max-height: 1080px;
        }
    </style>
</head>
<body>
<div class="container">

    <header>
        <div class="header_img">
            <img src="{{asset('public/images/akvamen.svg')}}" alt="">
        </div>

        <nav class="header_nav">
            <ul class="header_nav_ul">
                <a href="#" class="header_nav_ul_logo">
                    <img src="{{asset('public/images/logo.svg')}}" alt="">
                </a>
                <p class="header_nav_ul_location">Казахстан <br><span class="header_nav_ul_hint">улица Тестовая 1</span></p>
                <p class="header_nav_ul_phone">+7 (775) 000 00 01 <br><span class="header_nav_ul_hint">Касса</span></p>
                <img class="header_nav_ul_social" src="{{asset('public/images/social.svg')}}" alt="">
                <button class="header_nav_ul_btn">Мне пришёл билет</button>

            </ul>
        </nav>

    </header>

    <div class="category">
        <div class="category_nav">
            <a href="">Афиша</a>
            <a href="">Сеансы</a>
            <a href="">Кинотеатр</a>
            <a href="">Контакты</a>
            <button class="category_nav_login">Войти</button>
            <button class="category_nav_review">Написать отзыв</button>
        </div>
        <div class="category_data">
            <button class="category_data_today" style="margin-left: 50px">Сегодня</button>
            <button class="category_data_tomorrow">Завтра</button>
            <button class="category_data_sent">Воскресенье, 10 сент.</button>
            <button class="category_data_sent">Понедельник, 11 сент.</button>
            <button class="category_data_vtor">Вторник, 12 сент.</button>
            <button class="category_data_sred">Среда, 13 сент.</button>
        </div>
    </div>

    <main>
        <div class="card">
            <img src="{{asset('public/images/card1.svg')}}" alt="">
            <p class="card_title">Праздники</p>
            <p class="card_genre">комедия</p>
            <div class="card_container">
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">15:35</p>
                        <p class="card_info_price">2D 1233₸</p>
                    </div>
                    <p class="card_info_hall">Зал 3</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">17:40</p>
                        <p class="card_info_price">2D 3080₸</p>
                    </div>
                    <p class="card_info_hall vip">Зал 6 VIP</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">19:15</p>
                        <p class="card_info_price">2D 1700₸</p>
                    </div>
                    <p class="card_info_hall">Зал 4</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">21:05</p>
                        <p class="card_info_price">2D 1700₸</p>
                    </div>
                    <p class="card_info_hall">Зал 3</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">21:40</p>
                        <p class="card_info_price">2D 4030₸</p>
                    </div>
                    <p class="card_info_hall vip">Зал 6 VIP</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">22:45</p>
                        <p class="card_info_price">2D 1700₸</p>
                    </div>
                    <p class="card_info_hall">Зал 3</p>
                </div>
            </div>
        </div>

        <div class="card2">
            <img src="{{asset('public/images/card2.svg')}}" alt="">
            <p class="card_title">Мег 2: Бездна</p>
            <p class="card_genre">экшен</p>
            <p class="card_genre">триллер</p>
            <div class="card_container">
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">15:35</p>
                        <p class="card_info_price">2D 4030 ₸</p>
                    </div>
                    <p class="card_info_hall vip">Зал 6 VIP</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">17:40</p>
                        <p class="card_info_price">2D 3080 ₸</p>
                    </div>
                    <p class="card_info_hall auro">Зал 2 Auro</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">19:15</p>
                        <p class="card_info_price">2D 1700 ₸</p>
                    </div>
                    <p class="card_info_hall">Зал 4</p>
                </div>
            </div>
        </div>

        <div class="card3">
            <img src="{{asset('public/images/card3.svg')}}" alt="">
            <p class="card_title">Заложники</p>
            <p class="card_genre">экшен</p>
            <p class="card_genre">триллер</p>
            <div class="card_container">
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">16:10</p>
                        <p class="card_info_price">2D 4030 ₸</p>
                    </div>
                    <p class="card_info_hall">Зал 1</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">21:30</p>
                        <p class="card_info_price">2D 3080 ₸</p>
                    </div>
                    <p class="card_info_hall">Зал 1</p>
                </div>
            </div>
        </div>

        <div class="card4">
            <img src="{{asset('public/images/card4.svg')}}" alt="">
            <p class="card_title">Леди Баг и Супер-Кот: <br>
                Пробуждение силы</p>
            <p class="card_genre">фентези</p>
            <p class="card_genre">боевик</p>
            <p class="card_genre">мелодрама</p>
            <p class="card_genre">мультфильм</p>
            <p class="card_genre">комедия</p>
            <div class="card_container">
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">16:10</p>
                        <p class="card_info_price">2D 4030 ₸</p>
                    </div>
                    <p class="card_info_hall">Зал 1</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">21:30</p>
                        <p class="card_info_price">2D 3080 ₸</p>
                    </div>
                    <p class="card_info_hall">Зал 1</p>
                </div>
            </div>
        </div>

        <div class="card5">
            <img src="{{asset('public/images/card5.svg')}}" alt="">
            <p class="card_title">Когда не загрузилась <br>
                афиша</p>
            <p class="card_genre">комедия</p>
            <div class="card_container">
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">15:35</p>
                        <p class="card_info_price">2D 1233 ₸</p>
                    </div>
                    <p class="card_info_hall">Зал 3</p>
                </div>
                <div class="card_info">
                    <div class="card_info_block">
                        <p class="card_info_data">17:40</p>
                        <p class="card_info_price">2D 3080 ₸</p>
                    </div>
                    <p class="card_info_hall vip">Зал 6 VIP</p>
                </div>
            </div>
        </div>

        <div class="card6">
            <img src="{{asset('public/images/card6.svg')}}" alt="">
            <p class="card_title">Руслан и Людмила. <br>
                Больше, чем сказка</p>
            <p class="card_genre">анимационое приключение</p>
            <button class="card_button">Сеансы на Завтра</button>
        </div>

    </main>

    <footer>
        <div class="footer_info">
            <div class="footer_info_container">
                <img src="{{asset('public/images/logo.svg')}}" class="footer_info_image" alt="">
                <p class="footer_info_email">admin@example.com <br>ticket@example.com <br><span class="footer_info_text">улица Тестовая 1</span></p>
                <p class="footer_info_phone">+7 (775) 000 00 01 <br> <span class="footer_info_text">Касса</span></p>
                <p class="footer_info_chart">08:00 - 22:00 с пн.-пт. <br><span class="footer_info_text">График работы</span></p>
            </div>
        </div>
        <div class="footer_container" style="background-color: #0C3542">
            <div class="footer_main">
                <div class="footer_main_blog">
                    <div class="footer_main_menu">
                        <p class="footer_main_title">Меню</p>
                        <p><span class="footer_main_text">Афиша</span></p>
                        <p><span class="footer_main_text">Сеансы</span></p>
                        <p><span class="footer_main_text">Пушкинская карта</span></p>
                        <p><span class="footer_main_text">Кинотеатр</span></p>
                        <p><span class="footer_main_text">Контакты</span></p>
                    </div>
                    <div class="footer_main_transfer">
                        <p>Способ оплаты:</p>
                        <div class="footer_main_transfer_image">
                            <img class="footer_main_transfer_image_first" src="{{asset('public/images/mastercard.svg')}}" alt="">
                            <img src="{{asset('public/images/visa.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="footer_main_info">
                        <p>Все сеансы начинаются с рекламно-информационного блока. <br>
                            Точную продолжительность сеансов можно уточнить в кинотеатре.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer_icons">
                <img class="footer_icons_image" src="{{asset('public/images/social.svg')}}" alt="">
                <p class="footer_icons_text">© 2025 Все права защищены</p>
            </div>
        </div>
    </footer>
</div>

</body>
</html>
