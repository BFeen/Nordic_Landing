<?php 
    $title = 'Поиск';
    $style = 'href="/MyMoscow/styles/style.css?v=1.1";';
    include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/head.php"); 
    $clients = '';
?>

<body>
    <div class="wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/header.php"); ?>
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
            <form action="" method="get">
                <input type="text" name="search" placeholder="Введите имя клиента">
                <input type="submit" value="Найти">
            </form>
            <?php 
                include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/db.php");

                if ( !empty($_GET) ) {
                    if ( !empty($_GET['search']) ) {
                        $search = $_GET['search'];
                        $user_data = mysqli_query($db, 'SELECT * FROM `users`');
                        if ( mysqli_num_rows($user_data ) != 0) {
                            $counter = 1;
                            $clients = 
                            '<div class="table">';
                            while ( $row = mysqli_fetch_assoc($user_data) ) {
                                $clients .=
                                '<div class="table__row">
                                    <div class="table__cell">' . $counter . '</div>
                                    <div class="table__cell">' . $row['name'] . '</div>
                                    <div class="table__cell">' . $row['email'] . '</div>
                                    <div class="table__cell">' . $row['phone'] . '</div>
                                </div>';
                                $counter++;
                            }
                            $clients .=
                            '</div>';
                        } else {
                            $clients = 'Ничего не найдено';
                        }
                    } else {
                        $clients = 'В строку поиска ничего не вписали';
                    }
                }
            ?>
            <div class="section__title">
                <h2>Результаты поиска</h2>
            </div>
            
            <?=$clients?>
        </section>
    </main>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/MyMoscow/modules/footer.php"); ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
</body>
</html>