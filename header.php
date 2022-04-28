<?php
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter);
?>
<header class="header">
 <?php
        echo "<p style='text-align: center'>Сторінку було оновлено ".$counter." разів.<p>";
    ?> 
</div>
        <div class="nav-1">
            <div class="nav-toggle">
                <div class="container">
                    <a href="info.html" width="10%" onclick>
                        <img src="img/Group 65.svg" class="menu">
                    </a>
                    <div class="logo"><a href="index.html">COMFORT</a></div>
                    <div class="row">
                        <div class="col">
                            <a href="#" style="margin-right: 2.5%;"><img src="img/Group 56.svg"></a>
                        </div>
                        <div class="col">
                            <a href="#"><img src="img/Group 55.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="border-1">
                <input type="text" size="19" placeholder="Пошук меблів">
                <a href="#" class="search-1"><img src="img/image 22 (1).svg"></a>
            </div>
        </div>

        <section class="nav">
            <a href="header.php?page=lend" class="logo">COMFORT</a>
            <a href="header.php?page=info">Про нас</a>
            <a href="#">Доставка</a>
            <a href="#">Підтримка</a>
            <a href="header.php?page=catalog">Каталог</a>
            <div class="border">
                <input type="text" size="19" placeholder="Пошук меблів" style="margin-bottom: 6px;">
                <a href="" class="search"><img src="img/image 22 (1).svg"></a>
            </div>
            <div class="shops">
                <a href="" style="margin-right: 5px;"><img src="img/image 57.svg"></a>
                <a href="">Магазини</a>
            </div>
            <div class="icons">
                <a href=""><img src="img/Group 55.svg"></a>
                <a href=""><img src="img/Group 56.svg"></a>
                <a href=""><img src="img/user.svg"></a>
            </div>
        </section>
    </header>

    <?php

    $page = isset($_GET['page']) ? strip_tags($_GET['page']) : 'lend';
    $page_file = $page.'.php';

    if (file_exists($page_file)) {
        require $page_file;
    }
 
?>
