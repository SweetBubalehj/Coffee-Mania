<style>
    div .msg {
        margin: 20px auto;
        padding: 10px;
        width: 800px;
        border-radius: 5px;
        background-color: #ffe4bb;
        font-family: Arial, Helvetica, sans-serif;
        text-align: left;
        font-size: 20px;
        filter: drop-shadow(1px 1px 1px black);
    }

    div h3{
        font-size: 35px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
    }
</style>
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
            <li><a href="first.php">Главная</a></li>
            <li><a href="second.php">Рецепты</a></li>
            <li><b>Контакты</b></li>
        </ul>
    </div>

    <div class="cont">
        <div class="row">
            <div class="column">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4286.795808988663!2d28.824881266223226!3d47.019015175326196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c2d03e2c6b1%3A0xd8e8b74ac8c3ef7b!2sMoldova%20State%20University!5e0!3m2!1sen!2s!4v1620564558418!5m2!1sen!2s" class="iframe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="column">
                <form action="" method ="post">
                    <label for="fname">Имя</label>
                    <input type="text" id="fname" name="firstname" placeholder="Имя">
                    <label for="lname">Фамилия</label>
                    <input type="text" id="lname" name="lastname" placeholder="Фамилия">
                    <label for="country">Страна</label>
                    <select id="country" name="country">
                        <option value="md">Молдова</option>
                        <option value="ro">Румыния</option>
                        <option value="rus">Россия</option>
                        <option value="can">Канада</option>
                        <option value="usa">США</option>
                    </select>
                    <label for="subject">Объект</label>
                    <textarea id="subject" name="subject" placeholder="Ваше сообщение..." style="height:170px"></textarea>
                    <input type="submit" value="Отправить" name="submit">
                    <?php
                    include "output.php";
                    form();
                    ?>
                </form>
            </div>
        </div>
    </div>
    <div>
        <?php
        output();
        ?>
    </div>
    <div class="footer color">
        <p style="padding-top: 50px">© Copyright 2022<br /> Author: Patraman Gheorghi </p>
    </div>
</body>
</html>


