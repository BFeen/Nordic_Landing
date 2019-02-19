<?php 
    $title = 'Обработчик форм';
    $style = 'href="/MyMoscow/styles/style.css?v=1.1"';
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/functions.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/head.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/header.php");
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
            <p>- Обработчик формы -</p>
        </div>
    </section>';
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/db.php");

    echo "<section class='handler wrapper'>";

        $get_user = mysqli_query($db, "SELECT `email` FROM `users` WHERE `email` = '{$_POST['email']}'");
        if (mysqli_num_rows($get_user) == 0) { // Проверка на уникальность пользователя
            $result = mysqli_query($db, 
                "INSERT INTO `users` (`name`, `email`, `phone`) 
                VALUES ('{$_POST['fio']}', '{$_POST['email']}', '{$_POST['tel']}')"
            );
            if (!$result) {
                echo 'Произошла ошибка при отправке в БД<br>';
            } else {
                echo 'Данные отправлены в базу данных<br>';
            }
        } else {
            echo "Пользователь с таким E-mail уже существует!<br>";
        }

        // if (isset($_POST['connect-time'])) $connect_time = implode($_POST['connect-time']);
        $connect_time = isset($_POST['connect-time']) ? implode(',', $_POST['connect-time']) : 'Не указано'; // тернарный оператор
        $result_leads = mysqli_query($db, 
            "INSERT INTO `leads` (`user_email`, `message`, `connect`, `connect-time`) 
            VALUES ('{$_POST['email']}', '{$_POST['message']}', '{$_POST['connect']}', '{$connect_time}')"
        );


        echo 'Супер! Вот данные, которые ты отправил:<br>';
        d($_POST);

        if (empty($_POST['message'])) {
            echo $_POST['fio'] . ', все-таки напишите нам какое-нибудь сообщение!';
        }
    echo "</section>";        

    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/footer.php");
?>