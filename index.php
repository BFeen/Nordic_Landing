<?php 
    $title = "Главная страница";
    $style = 'href="/MyMoscow/styles/style.css?v=1.1";';
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/functions.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/head.php");
?>
<body>
    <div class="wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/header.php"); ?>
    </div>
    <main>
        <div class="slider">
            <div class="slider__flex">
                <div class="slider__item">3</div>
                <div class="slider__item img-top"></div>
                <div class="slider__item">2</div>
                <div class="slider__item">3</div>
                <div class="slider__item img-top"></div>
            </div>
        </div>
        <section class="hello">
                <div class="arrows">
                    <div class="arrow left">&lt;</div>
                    <div class="arrow right">&gt;</div>
                </div>
            <div class="pic-center">
                <h1>Необычная Москва</h1>
                <p>MyMoscow - агенство интересных маршрутов</p>
            </div>
            <button class="btn-blue">Подробнее о нас</button>
        </section>
        <div class="wrapper">
            <section>
                <div class="section__title">   
                    <h2>Что мы предлагаем?</h2>
                    <p>Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</p>
                </div>
                <div class="offers">
                    <div class="offers__item">
                        <div class="offers__icon map"></div>
                        <div>
                            <h3 class="offers__title">Необычные маршруты</h3>
                            <p class="offers__text">
                                Мы обязательно порадуем необычными маршрутами Москвы,
                                которые прокладывают наши опытные гиды. Ты увидишь и узнаешь о Москве то,
                                что никогда не знал! 
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon souvenir"></div>
                        <div>
                            <h3 class="offers__title">Классные сувениры</h3>
                            <p class="offers__text">
                                Отличная новость! У нас появился магазин сувениров! И самое примечательное,
                                что все эти сувениры мы делаем сами! Заходи к нам в гости!
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon compass"></div>
                        <div>
                            <h3 class="offers__title">Интересные экскурсии</h3>
                            <p class="offers__text">
                                За время экскурский, которых у нас больше 20, ты узнаешь и увидишь все основные
                                достопримечательности: Кремль, Храм Христа Спасителя, так и пройдешься по пешеходным
                                улицам Москвы, узнаешь их историю и сделаешь самые классные фотографии.
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon picture"></div>
                        <div>
                            <h3 class="offers__title">Фотосессии в Москве</h3>
                            <p class="offers__text">
                                Команда MyMoscow рада провести креативные фотосессии в любом уголке Москвы.
                                Не важно, свадьба у Вас или просто захотелось добавить в альбом или инстаграм красивых фоток.
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon discussion"></div>
                        <div>
                            <h3 class="offers__title">Новые знакомства</h3>
                            <p class="offers__text">
                                MyMoscow - это целый клуб, где после московских прогулок ты можешь продолжить общение
                                с теми, кому интересна Москва, знакомиться с новыми людьми и делиться впечатлениями.
                            </p>
                        </div>
                    </div>
                    <div class="offers__item">
                        <div class="offers__icon sun"></div>
                        <div>
                            <h3 class="offers__title">Яркие впечатления</h3>
                            <p class="offers__text">
                                Самое важное - это яркие эмоции, которые останутся с тобой на долгое время!
                                Поэтому в нашей команде мы ждем именно тебя!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="about">
            <div class="about__photo about-1"></div>
            <div class="about__block">
                <h2 class="about__title">КТО МЫ ТАКИЕ</h2>
                <p class="about__text">Мы - команда тех, кто любит Москву.</p>
                <p class="about__text">
                    Москва - это не только место по "заколачиванию денег" и "взращиванию карьеры",
                    а еще и бесконечно красивые памятники природы, заказники, парки, заповедники.
                    Активный отдых в Москве и Подмосковье - это отличная возможность вырваться из душного
                    мегаполиса куда-нибудь в "дебри", навстречу приключениям. К счастью, не все Подмосковье
                    еще "облагорожено" асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются
                    места, настолько глухие и далекие, что, очутившись там, кажется, что ты - первый человек,
                    ступивший на эту землю. 
                </p>
                <p class="about__text">
                    Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя
                    все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
                </p>
                <button class="btn-yellow">Подробнее о нас</button>
            </div>
        </section>
        <section>
            <div class="section__title wrapper">
                <h2 class="line">Москва в фотографиях</h2>
                <p>
                    Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчеты и 
                    присылайте нам свои фотографии.
                </p>
            </div>
            <div class="gallery">
                <a href="" class="gallery__item photo1"></a>
                <a href="" class="gallery__item photo2"></a>
                <a href="" class="gallery__item photo3"></a>
                <a href="" class="gallery__item photo4"></a>
                <a href="" class="gallery__item photo5"></a>
                <a href="" class="gallery__item photo6"></a>
                <a href="" class="gallery__item photo7"></a>
                <a href="" class="gallery__item photo8"></a>
            </div>
        </section>
        <section class="wrapper">
            <div class="section__title">
                <h2 class="line">Отзывы</h2>
            </div>
            <div class="review">
                <div class="review__item">
                    <blockquote class="review__text">
                        Были с дочкой и подругой на ночной экскурсии. Все-таки как много зависит от экскурсовода!
                        Мы все четыре часа ходили за Станиславом Симоновым, как кролики. Боялись пропустить хоть
                        одно слово. При этом моей дочке - которая побывала во многих местах и с детства искушенная
                        на интересные события - была сильно увлечена.
                    </blockquote>
                    <div class="flex">
                        <div class="review__icon ava2"></div>
                        <span class="review__title">Екатерина Васильева</span>
                    </div>
                </div>
                <div class="review__item">
                    <blockquote class="review__text">
                        Ездили на экскурсию с семиклассниками и родителями. Всем очень понравилось!
                        Экскурсовод Михаил Борисович очень интересно, необычно и с юмором рассказывал о Москве 16 века.
                        Гибко подстраивал экскурсию под интересы и потребности слушателей, ловко управлял "подачей"
                        автобуса, не давая нам замёрзнуть.) Огромное спасибо!
                    </blockquote>
                    <div class="flex">
                        <div class="review__icon ava1"></div>
                        <span class="review__title">Анна Крушевская</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="write-us">
            <div>
                <h2 class="line">Напишите нам</h2>
            </div>
            <div class="wrapper">
                <form id="main-form" method="POST" action="handlers/form.php">
                    <div class="form-inputs">
                        <div class="write-us__item">
                            <input type="text" name="fio" class="write-us__input">
                            <span class="write-us__text">ФИО</span>
                        </div>
                        <div class="write-us__item">
                            <input type="text" name="email" class="write-us__input">
                            <span class="write-us__text">E-mail</span>
                        </div>
                        <div class="write-us__item">
                            <input type="text" name="tel" class="write-us__input">
                            <span class="write-us__text">Телефон</span>
                        </div>
                    </div>
                    <div class="form-inputs">
                        <textarea name="message" class="write-us__input" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
                    </div>
                    <div class="form-inputs form-questions">
                        <div class="form-questions__text">Когда с Вами можно связаться?</div>
                        <label>
                            <input type="checkbox" name="connect-time[]" value="9-11">9-11
                            <div class="checkbox"></div>
                        </label>
                        <label>
                            <input type="checkbox" name="connect-time[]" value="11-14">11-14
                            <div class="checkbox"></div>
                        </label>
                        <label>
                            <input type="checkbox" name="connect-time[]" value="14-18">14-18
                            <div class="checkbox"></div>
                        </label>
                        <label>
                            <input type="checkbox" name="connect-time[]" value="18-22">18-22
                            <div class="checkbox"></div>
                        </label>
                        <label>
                            <input type="checkbox" name="connect-time[]" value="в любое время">В любое время
                            <div class="checkbox"></div>
                        </label>
                    </div>
                    <div class="form-inputs form-questions">
                        <div class="form-questions__text">Как с Вами связаться?</div>
                        <label class="">
                            <div>По E-mail:</div>
                            <input type="radio" name="connect" value="email">
                            <div class="radio"></div>
                        </label>
                        <label class="">
                            <div>По телефону:</div>
                            <input type="radio" name="connect" value="phone">
                            <div class="radio"></div>
                        </label>
                    </div>
                    <input type="submit" class="write-us__input write-us__btn" value="Отправить вопрос">
                </form>
            </div>
        </section>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/footer.php"); ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>