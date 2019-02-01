<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/functions.php");

    echo 'Супер! Вот данные, которые ты отправил:<br>';
    d($_POST);

    if (empty($_POST['message'])) {
        echo $_POST['fio'] . ', все-таки напишите нам какое-нибудь сообщение!';
    }
?>