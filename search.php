<?php 
    $title = 'Поиск';
    $style = 'href="/styles/style.css?v=1.1";';
    include($_SERVER['DOCUMENT_ROOT'] . "/modules/head.php"); 
    $clients = '';
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
            <div class="arrows">
                <div class="arrow left">&lt;</div>
                <div class="arrow right">&gt;</div>
            </div>
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
                <input type="text" class="write-us__input" name="search" placeholder="Введите имя клиента">
                <input type="submit" class="write-us__input write-us__btn" value="Найти">
            </form>
            <?php 
                include($_SERVER['DOCUMENT_ROOT'] . "/modules/db.php");

                if ( !empty($_GET) ) {
                    if ( !empty($_GET['search']) ) {
                        $search = $_GET['search'];
                        $user_data = mysqli_query($db, "SELECT * FROM `users` WHERE `email` = '{$_GET['search']}' OR `name` = '{$_GET['search']}'");
                        if ( mysqli_num_rows($user_data) != 0) {
                            $counter = 1;
                            $clients = 
                            '<div class="table">';
                            while ( $row = mysqli_fetch_assoc($user_data) ) {
                                $clients .=
                                "<div class='table__row'>
                                    <div class='table__cell'>$counter</div>
                                    <div class='table__cell'>{$row['name']}</div>
                                    <div class='table__cell'>{$row['email']}</div>
                                    <div class='table__cell'>{$row['phone']}</div>
                                </div>";
                                $counter++;
                            }
                            $clients .=
                            '</div>';
                        } else {
                            $clients = '<div class="table">Ничего не найдено</div>';
                        }
                    } else {
                        $clients = '<div class="table">В строку поиска ничего не вписали</div>';
                    }
                }
            ?>
            <div class="section__title">
                <h2>Результаты поиска</h2>
            </div>
            
            <?=$clients?>
        </section>
    </main>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/modules/footer.php"); ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
</body>
</html>