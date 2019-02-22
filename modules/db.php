<?php 
    if ($db = mysqli_connect('localhost', 'root', '', '02112018_Arkhipov')) {
        mysqli_set_charset($db, 'utf8');
    } else {
        echo '<div style="text-align: center; color: red;">Ошибка подключения к базе данных</div>';
    }
?>