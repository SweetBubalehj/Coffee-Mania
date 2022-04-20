<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Coffee Mania</title>
    <meta name="description" content="Рецеты кофе" />
    <meta name="keywords" content="Coffee, Americano, Latte, Espresso, Cappuccino" />
    <meta name="Author" content="Patraman Gheorghi" />
    <link rel="shortcut icon" href="img/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <script src="js/index.js"></script>
</head>
<body>
    <div class="rel header color">
        <img src="img/header.png" alt="1" class="logo" />
    </div>
    <div class="exit">
		<a href="delogare.php">Выход</a>
	</div>
    <div class="meniu">
        <ul>
            <li><b>Главная</b></li>
            <li><a href="second.php">Рецепты</a></li>
            <li><a href="third.php">Контакты</a></li>
        </ul>
    </div>
    <div class="anim" id="move">
        <div class="table">
            <div class="row">
                <div class="cell" onmouseover="changeBgImage('img/1.png','move');" onmouseout="restoreBgImage('move');"></div>
                <div class="cell" onmouseover="changeBgImage('img/2.png','move');" onmouseout="restoreBgImage('move');"></div>
            </div>
            <div class="row">
                <div class="cell" onmouseover="changeBgImage('img/3.png','move');" onmouseout="restoreBgImage('move');"></div>
                <div class="cell" onmouseover="changeBgImage('img/4.png','move');" onmouseout="restoreBgImage('move');"></div>
            </div>
        </div>
    </div>
    <div class="footer color">
        <p style="padding-top: 50px">© Copyright 2022<br /> Author: Patraman Gheorghi </p>
    </div>
</body>
</html>