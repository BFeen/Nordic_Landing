<?php 
    $title = 'Обработчик форм';
    $style = 'href="/styles/style.css?v=1.1"';
    include($_SERVER['DOCUMENT_ROOT'] . "/modules/functions.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/modules/head.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/modules/header.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/modules/slider.php");
    echo "
    <section class='hello'>
        <div class='pic-center'>
            <h1>MyMoscow</h1>
            <p>- $title -</p>
        </div>
    </section>";

    include($_SERVER['DOCUMENT_ROOT'] . "/modules/db.php");

    echo "<section class='handler wrapper'>";
        $get_user = mysqli_query($db, "SELECT `email` FROM `users` WHERE `email` = '{$_POST['email']}'");
// Проверка на уникальность пользователя, посредством проверки количества строк в ответе от базы
        if (mysqli_num_rows($get_user) == 0) { 
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
            echo "Пользователь с таким Именем или Электронным адресом уже существует!<br>";
        }
// Определение $connect-time посредством тернарного оператора
        $connect_time = isset($_POST['connect-time']) ? implode(',', $_POST['connect-time']) : 'Не указано';
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

    include($_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php");
?>