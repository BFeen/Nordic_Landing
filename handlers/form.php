<?php 

    echo '
    <div class="slider">
        <div class="slider__flex">
            <div class="slider__item">3</div>
            <div class="slider__item img-trips"></div>
            <div class="slider__item">2</div>
            <div class="slider__item">3</div>
            <div class="slider__item img-trips"></div>
        </div>
    </div>
    <section class="hello">
        <div class="arrows">
            <div class="arrow left">&lt;</div>
            <div class="arrow right">&gt;</div>
        </div>
        <div class="pic-center">
            <h1>MyMoscow</h1>
            <p>агенство интересных маршрутов</p>
            <p>- Туры -</p>
        </div>
    </section>';

    $title = 'Главная страница';
    $style = 'href="../styles/style.css?v=1.1"';
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/functions.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/head.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/header.php");

    $db = mysqli_connect('localhost', 'root', '', '02112018_Arkhipov');
    mysqli_set_charset($db, 'utf8');
    $result = mysqli_query($db, "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ('{$_POST['fio']}', '{$_POST['email']}', '{$_POST['tel']}')");

    if (!$result) {
        echo 'Произошла ошибка при отправке в БД<br>';
    } else {
        echo 'Данные отправлены в базу данных<br>';
    }

    echo 'Супер! Вот данные, которые ты отправил:<br>';
    d($_POST);

    if (empty($_POST['message'])) {
        echo $_POST['fio'] . ', все-таки напишите нам какое-нибудь сообщение!';
    }

    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/footer.php");
?>