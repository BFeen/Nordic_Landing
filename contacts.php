<?php 
    $title = "Контакты";
    include("modules/head.php"); 
?>
<body>
    <div class="wrapper">
    <?php include("modules/header.php"); ?>
    </div>
    <main>
        <div class="slider">
            <div class="slider__flex">
                <div class="slider__item">3</div>
                <div class="slider__item img-contacts"></div>
                <div class="slider__item">2</div>
                <div class="slider__item">3</div>
                <div class="slider__item img-contacts"></div>
            </div>
        </div>
        <section class="hello">
            <div class="pic-center">
                <div class="arrow left">&lt;</div>
                <div class="arrow right">&gt;</div>
                <h1>MyMoscow</h1>
                <p>агенство интересных маршрутов</p>
                <p>- Контакты -</p>
            </div>
        </section>
        <section class="contacts wrapper">
            <h2 class="section__title">Контакты</h2>
            <p class="contacts__text">Мы - команда тех, кто любит историю и любит Москву.</p>
            <p class="contacts__text">
                Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры»,
                а еще и бесконечно красивые памятники природы, заказники, парки, заповедники.
                Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из
                душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью,
                не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными
                заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там,
                кажется, что ты – первый человек, ступивший на эту землю.
            </p>
            <p class="contacts__text">
                Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для
                себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
            </p>
            <div class="card">
                <div class="card__item">
                    <div class="card__img ava3"></div>
                    <div class="card__info">
                        <div>
                            <h3>Александр Рыбаков</h3>
                            <p>директор</p>
                        </div>
                        <div>
                            <p>По всем вопросам пишите на почту:</p>
                            <span>rybakov@mymoscow.ru</span>
                        </div>
                    </div>
                </div>
                <div class="card__item">
                    <div class="card__img ava4"></div>
                    <div class="card__info">
                        <div>
                            <h3>Елена Белкина</h3>
                            <p>руководитель корпоративного отдела</p>
                        </div>
                        <div>
                            <p>По всем вопросам корпоративных экскурсий:</p>
                            <span>belkina@mymoscow.ru</span>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="contacts__bottom">
                <div class="contacts__item">
                    <div class="address">
                        <div class="icon placeholder"></div>
                        <div>
                            <p>Москва,</p>
                            <p>Большая Спасская 12</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="icon mail"></div>
                        <div>
                            <p>E-mail:</p>
                            <p>moscow@imoscow.ru</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="icon telephone"></div>
                        <div>
                            <p>Телефон:</p>
                            <p>8 (495) 626-46-00</p>
                        </div>
                    </div>
                </div>
                <div class="contacts__item">
                    <p>Напишите нам</p>
                    <form action="" method="GET">
                        <input type="text" class="contacts__input" name="fio" placeholder="ФИО">
                        <input type="text" class="contacts__input" name="email" placeholder="E-mail">
                        <textarea name="" id="" cols="30" rows="5" class="contacts__input" placeholder="Ваше сообщение"></textarea>
                        <input type="submit" class="contacts__input contacts__button">
                    </form>
                </div>
            </div>
        </section>
        <iframe src="https://yandex.ru/map-widget/v1/-/CBF3USbXKD" width="560" height="400" frameborder="1" allowfullscreen="true"></iframe>
    </main>
    <?php include("modules/footer.php"); ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>