<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gulp Project</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/main.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="overlay_form"></div>
<section class="modal-form" id="popup1">
    <div class="smart-form">
        <div class="form-header">
            <h4><i class="fa fa-comments"></i>Связаться</h4>
        </div>
        <form method="post" action="#" id="contact">
            <div class="form-body">
                <div class="form-section">
                    <label for="names" class="field-label">Введите ваше имя</label>
                    <div class="prepend-icon">
                        <span class="field-icon"><i class="fa fa-user"></i></span>
                        <input type="text" name="names" id="names" placeholder="имя">
                    </div>
                </div>
                <div class="form-section">
                    <label for="email" class="field-label">Введите ваш Email</label>
                    <div class="prepend-icon">
                        <span class="field-icon"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" id="email" placeholder="example@domain.com">
                    </div>
                </div>
                <div class="form-section">
                    <label for="tel" class="field-label">Введите ваш телефон</label>
                    <div class="prepend-icon">
                        <span class="field-icon"><i class="fa fa-phone-square"></i></span>
                        <input type="tel" name="tel" id="tel" placeholder="номер телефона">
                    </div>

                </div>
                <div class="form-section">
                    <label for="comment" class="field-label">Задать вопрос</label>
                    <div class="prepend-icon">
                        <span class="field-icon"><i class="fa fa-comments"></i></span>
                        <textarea class="comment" id="comment" name="comment"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-footer">
                <input type="submit" name="modal_submit" value="Связаться" class="button-form">
            </div>
        </form>
    </div>
</section>
<header>
    <nav class="menu">
        <div class="logo">
            <img src="img/logo3.png" alt="логотип">
        </div>
        <div class="menu__icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="menu__links">
            <a class="menu__links-item menu__links-item-active" href="#">Главная</a>
            <a class="menu__links-item" href="gk.html">Гибкий камень</a>
            <a class="menu__links-item" href="tp.html">Термопанели</a>
            <a class="menu__links-item" href="gallery.html">Фотогалерея</a>
            <a class="menu__links-item" href="#contact_footer">Контакты</a>
        </div>
    </nav>
    <section class="fullscreen-bg">
        <div class="overlay">
            <div class="container">
                <h1>Гибкий камень и термопанели</h1>
                <p>Готовое решение для дизайна интерьера</p>
                <p>и внешней отделки фасадов</p>
                <p class="text">Прокрутить вниз</p>
                <div class="arrow_top">
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                    <div class="chevron"></div>
                </div>

            </div>
        </div>
        <video loop muted autoplay poster="media/backvideo.jpg" class="fullscreen-bg__video">
            <source src="media/backvideo.mp4" type="video/mp4">
            <source src="media/backvideo.webm" type="video/webm">
            <source src="media/backvideo.avi" type="video/avi">
        </video>
    </section>


</header>
<main>
    <section class="profit">
        <div class="container">
            <div class="items">
                <h2>Почему выбирают именно нас</h2>
                <div class="item">
                    <img src="img/ico_pochemu_1.png" alt="">
                    <p>Мы - производители с большим стажем</p>
                </div>
                <div class="item">
                    <img src="img/ico_pochemu_2.png" alt="">
                    <p>Более 1000 реализованных объектов</p>
                </div>
                <div class="item">
                    <img src="img/ico_pochemu_3.png" alt="">
                    <p>Нам доверяют постоянные клиенты</p>
                </div>
                <div class="item">
                    <img src="img/ico_pochemu_4.png" alt="">
                    <p>Мы выпускаем продукцию высшего качества</p>
                </div>
            </div>
        </div>
    </section>
    <section class="slider">
        <h3>Наша продукция</h3>
        <div class="slider_container">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="img/productslide1.jpg"/>
                        <p class="flex-caption">Гибкий кирпич</p>
                    </li>
                    <li>
                        <img src="img/productslide2.jpg"/>
                        <p class="flex-caption">Гибкие обои</p>
                    </li>
                    <li>
                        <img src="img/productslide3.jpg"/>
                        <p class="flex-caption">Гибкий камень: Плитка</p>
                    </li>
                    <li>
                        <img src="img/productslide4.jpg"/>
                        <p class="flex-caption">Гибкий камень: Текстурированный</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="advantage">
        <div class="container">
            <h3>Преимущества перед другими материалами</h3>
            <div class="items">
                <div class="item img_item1">
                    <img src="img/ogon_w.png" alt="icon" class="img_but1">
                    <div class="item_header">
                        <p>Не горит, устойчив к перепаду t</p>
                        <button class="read_more but1">Подробнее</button>
                    </div>
                    <div class="item_text text1">
                        <h5>Огнестойкость гибкого камня и термопанелей</h5>
                        <p>Экологически чистый материал не горит , не плавится и не поддерживает горение.
                            Результатом воздействия высоких температур на гибкий камень является его размягчение.
                            Температурный диапазон эксплуатации этого материала от -40˚C до +650˚C.
                            Материал с такими характеристиками легко можно использовать как для внутренней, так и для
                            внешней отделки.
                            Защитное покрытие термопанелей на основе мраморной крошки так же не горит , не плавится и не
                            поддерживает горение!
                        </p>
                    </div>
                </div>
                <div class="item img_item2">
                    <img src="img/graz_w.png" alt="icon" class="img_but2">
                    <div class="item_header">
                        <p>Легко моется, не впитывает влагу</p>
                        <button class="read_more but2">Подробнее</button>
                    </div>
                    <div class="item_text text2">
                        <h5>Легко моется и не впитывает влагу.</h5>
                        <p>Покрытие гибкого камня и термопанелей на основе мраморной крошки и специального эластичного
                            материала отталкивает влагу, в порах поверхности не откладывается придорожная пыль и грязь.
                            Если
                            Вы все же решите помыть этот материал, то это можно сделать даже автомобильной мойкой
                            высокого
                            давления.
                            При направленной струе высокого давления в одну точку материала на расстоянии 10-15 см от
                            него в
                            течение 5-7 минут не нанесут ему никаких повреждений.</p>
                    </div>
                </div>
                <div class="item img_item3">
                    <img src="img/solnz_w.png" alt="icon" class="img_but3">
                    <div class="item_header">
                        <p>Устойчив к выцветанию</p>
                        <button class="read_more but3">Подробнее</button>
                    </div>
                    <div class="item_text text3">
                        <h5>Устойчив к выцветанию и воздействию прямых солнечных лучей.</h5>
                        <p>Цвет гибкого камня и термопанелей образуется путем окрашивание самой мраморной крошки, а не
                            нанесение красящего материала сверху или смешивания с колерами на водной основе.
                            Окрашивание материала осуществляется специальными пигментами устойчивыми к выцветанию.
                            Например
                            TiO2.</p>
                    </div>
                </div>
                <div class="item img_item4">
                    <img src="img/tresh_w.png" alt="icon" class="img_but4">
                    <div class="item_header">
                        <p>Не трескается, высокопрочный</p>
                        <button class="read_more but4">Подробнее</button>
                    </div>
                    <div class="item_text text4">
                        <h5>Не трескается, устойчив к механическому воздействию.</h5>
                        <p>При монтаже материала швы заделываются эластичной смесью на основе акриловой смолы. Сам
                            декоративный слой состоит из эластичной акриловой смолы наполненной натуральной,
                            обеспыленной
                            мраморной крошкой и комплексом модифицированных добавок. Все это позволяет материалу
                            принимать
                            различную форму и под воздействием усадки фундамента не образуются трещины.
                        </p>
                    </div>
                </div>
                <div class="item img_item5">
                    <img src="img/prohee_w.png" alt="icon" class="img_but5">
                    <div class="item_header">
                        <p>Перечень других преимуществ</p>
                        <button class="read_more but5">Подробнее</button>
                    </div>
                    <div class="item_text text5">
                        <h5>Основные преимущества гибкого камня и термопанелей</h5>
                        <p>
                            - Долговечность. Материал устойчив к воздействиям внешней среды. </br>
                            - Пластичность. Материал, при желании, может принять любую необходимую форму, прикрепиться к
                            - любой поверхности. Простор для творчества и фантазии.</br>
                            - Непревзойденный внешний вид, с текстурой среза натурального песчаника.</br>
                            - Широкая сфера применения: отделка фасада, стен, пола, бассейна, сауны, облицовка каминов и
                            лестниц, создание ландшафтного дизайна и многое другое.</br>
                            - Легкий вес изделия. Для транспортировки можно использовать даже легковой автомобиль.</br>
                            - Натуральный материал, совершенно не опасен для здоровья человека, а также не представляет
                            угрозу для окружающей среды.</br>
                            - Материал можно использовать для нанесения фрески.</br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62012.60396116427!2d76.44290987574828!3d60.94101270400136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x436d3ea933d05687%3A0xd611216bd7fa542d!2z0J3QuNC20L3QtdCy0LDRgNGC0L7QstGB0LosINCl0LDQvdGC0Yst0JzQsNC90YHQuNC50YHQutC40Lkg0LDQstGC0L7QvdC-0LzQvdGL0Lkg0L7QutGA0YPQsywg0KDQvtGB0YHQuNGP!5e0!3m2!1sru!2sby!4v1518263924692" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
</main>
<footer id="contact_footer">
    <div class="cooperation">
        Напишите нам!</br>
        Приглашаем к сотрудничеству!</br>
        Оставьте свой телефон и мы обязательно с вами свяжемся!</br>
    </div>
    <div class="cont_email">
        <div class="email">eco_dom_nv@mail.ru</div>
    </div>
    <div class="telefon">
        <p>+7 (950) 526-83-52</p>
        <div class="line"></div>
        <p>+7 (982) 577-39-83</p>
        <p class="adress">г.Нижневартовск пос. Беловежский д.21</p>
    </div>
</footer>
<a href="#" id="popup__toggle" rel="popup1">
    <div class="circlephone" style="transform-origin: center;"></div>
    <div class="circle-fill" style="transform-origin: center;"></div>
    <div class="img-circle" style="transform-origin: center;">
        <div class="img-circleblock" style="transform-origin: center;"></div>
    </div>

</a>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/main.js"></script>
</body>

</html>
