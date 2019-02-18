<?php 
    // d - debug - отладка, проверить какие-то данные
    function d($arr) {
        echo '<pre>';
        print_r($arr); // print_r - функция для вывода массивов
        echo '</pre>';
    }

    // Преобразование даты 
    function parse_date($date) {
        $date_array = explode('-', $date);
        $months = [
            'января','февраля','марта','апреля','мая','июня', 
            'июля','августа','сентября','октября','ноября','декабря'
        ];
        $month = $months[$date_array[1] - 1];
        $date_result = $date_array[2] . ' ' . $month . ' ' . $date_array[0] . ' года';
        return $date_result;
    }
?>