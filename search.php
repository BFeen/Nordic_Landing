<?php 
    $title = 'Поиск';
    $style = 'href="/styles/style.css?v=1.1";';
    include($_SERVER['DOCUMENT_ROOT'] . "/modules/functions.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/modules/head.php"); 
    include($_SERVER['DOCUMENT_ROOT'] . "/modules/db.php");
    $template = [];
    $data = mysqli_query($db, "SELECT * FROM `contacts`"); // Выгрузка контактов для футера
    while ($row = mysqli_fetch_assoc($data)) {
        $template['footer']['contacts'] = $row;
    }
    $data = mysqli_query($db, "SELECT * FROM `news`"); // Выгрузка новостей для футера
    while ($row = mysqli_fetch_assoc($data)) {
        $template['footer']['news'][] = $row;
    }
    if ( !empty($_GET) ) {
        if ( !empty($_GET['search']) ) {
            $user_data = mysqli_query($db, "SELECT * FROM `users` WHERE `email` LIKE '%{$_GET['search']}%' OR `name` LIKE '%{$_GET['search']}%'");
            while ( $row = mysqli_fetch_assoc($user_data) ) {
                $template['clients'][] = $row;
            }
        }
    }
    // d($template);
?>

<body>
    <div class="wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/modules/header.php"); ?>
    </div>
    <main>
        <?php 
            $img = 'img-contacts';
            include($_SERVER['DOCUMENT_ROOT'] . '/modules/slider.php')
        ?>
        <section class="hello">
            <div class="pic-center">
                <h1>MyMoscow</h1>
                <p>агенство интересных маршрутов</p>
                <p>- Поиск -</p>
            </div>
        </section>
        <section class="contacts wrapper">
            <div class="section__title">
                <h2>Поиск по клиентам</h2>
            </div>
            <form class="search-form" action="" method="get">
                <input type="text" class="write-us__input" name="search" placeholder="Введите имя/email клиента">
                <input type="submit" class="write-us__input write-us__btn" value="Найти">
            </form>
            <?php if( !empty($_GET) && !empty($template['clients']) ):?>
                <div class="section__title">
                    <h2>Результаты поиска</h2>
                </div>
                <div class="table">
                <?php foreach($template['clients'] as $key => $value): ?>
                    <div class='table__row'>
                        <div class='table__cell'><?=$key + 1?></div>
                        <div class='table__cell'><?=$value['name']?></div>
                        <div class='table__cell'><?=$value['email']?></div>
                        <div class='table__cell'><?=$value['phone']?></div>
                    </div>
                <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    </main>
    <footer>
    <div class="footer-top">
        <div class="wrapper">
            <div class="footer-top__item">
                <a href="/index.php" class="logo">
                    <img src="/images/icons/spasskaya-tower.png" alt="logo" class="logo__icon">
                    <span class="logo__text">MyMoscow</span>
                </a>
                <p class="footer-top__text">
                    Мы приглашаем тебя на самые разные экскурсии по Москве. Автобусные и пешеходные,
                    на целый день или на несколько часов, на свежем воздухе или с заходом в здания -
                    у нас в ассортименте более 20 авторских экскурсий по Москве, выбирай и узнавай Москву
                    вместе с нами!
                </p>
            </div>
            <div class="footer-top__item">
                <p class="footer-top__title">Контакты</p>
                <div class="address">
                    <div class="footer-top__icon placeholder"></div>
                    <span><?=$template['footer']['contacts']['address']; ?></span>
                </div>
                <div class="address">
                    <div class="footer-top__icon mail"></div>
                    <span><?=$template['footer']['contacts']['email']; ?></span>
                </div>
                <div class="address">
                    <div class="footer-top__icon telephone"></div>
                    <span><?=$template['footer']['contacts']['phone']; ?></span>
                </div>
            </div>
            <div class="footer-top__item">
                <p class="footer-top__title">Последние новости</p>
                <?php foreach($template['footer']['news'] as $value):?>
                    <div class="news">
                        <p class="footer-top__text"><?=$value['text']; ?></p>
                        <span><?=$value['date']; ?></span>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrapper">
            <p>&copy; 2018 Copyright. Все права защищены</p>
            <p>Designed by Nordic IT School</p>
            <div class="social">
                <a href="https://vk.com" target="_blanc" class="social__item vk"></a>
                <a href="https://facebook.com" target="_blanc" class="social__item fb"></a>
                <a href="https://instagram.com" target="_blanc" class="social__item insta"></a>
            </div>
        </div>
    </div>
</footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
</body>
</html>