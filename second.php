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
    <script>
        function layer(a) {
            l = getElementsByClass('layer', null, 'div');
            for (var i = 0; i < l.length; i++)l[i].style.display = (i == a ? 'block' : 'none');
            l = getElementsByClass('layer', null, 'span');
            for (var i = 0; i < l.length; i++) {
                l[i].className = (i == a ? 'layer act' : 'layer');
            }
        }


        function getElementsByClass(searchClass, node, tag) {
            var classElements = new Array();
            if (node == null) node = document;
            else if (typeof (node) != "object") node = document.getElementById(node); if (!node) return;
            if (tag == null) tag = '*';
            var els = node.getElementsByTagName(tag);
            var elsLen = els.length;
            var pattern = new RegExp("(^|\\s)" + searchClass + "(\\s|$)");
            for (i = 0, j = 0; i < elsLen; i++) {
                if (pattern.test(els[i].className)) {
                    classElements[j] = els[i];
                    j++;
                }
            }
            return classElements;
        }

        function restoreBgImage(id) {
            changeBgImage('img/5.png', id);
        }

        function changeBgImage(image, id) {
            document.getElementById(id).style.backgroundImage = "url('" + image + "')"
        }
    </script>
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
            <li><b>Рецепты</b></li>
            <li><a href="third.php">Контакты</a></li>
        </ul>
    </div>

    <div class="content">
        <!-- вкладки -->
        <span class="layer act" onClick='layer(0)'>Espresso</span>
        <span class="layer " onClick='layer(1)'>Espresso Macchiato</span>
        <span class="layer" onClick='layer(2)'>Americano</span>
        <span class="layer" onClick='layer(3)'>Cappuccino</span>
        <span class="layer" onClick='layer(4)'>Latte</span>
        <span class="layer" onClick='layer(5)'>Moccacino</span>
        <div class="layer act">
            <img class="png" src="img/espresso.png" alt="espresso">
            <div class="dscr">
                <b>Эспрессо</b> – чёрный кофе, приготовленный в кофемашине или специальной кофеварке, где сквозь спрессованные молотые зёрна пропускают горячую воду под давлением 9 бар. Готовый напиток должен иметь плотную пенку (бариста называют её крема́) однородного золотисто-орехового цвета, толщиной не менее 2 мм. Во вкусе эспрессо гармонично сочетаются сладость, горечь и лёгкая кислинка. Оттенки вкуса зависят от сортов кофейных зёрен, входящих в состав смеси, степени обжарки и навыков баристы.
            </div>
            <div class="prd">
                <b>Продукты</b><br><br>
                Молотый кофе – 7 грамм<br>
                Вода – 30 мл<br>
                Сахар – по вкусу
            </div>
            <div class="reciept">
                <b>Рецепт:</b>
                <ol start="1">
                    <li style="padding: 5px; line-height: 1.1">Включить кофеварку и дождаться срабатывания индикатора готовности.</li>
                    <li style="padding: 5px; line-height: 1.1">Если кофемашина оснащена встроенной кофемолкой, положить в неё столовую ложку зёрен. Для рожковой кофеварки – засыпать в рожок 1 мерную ёмкость или 2 чайных ложки с небольшой горкой молотого кофе.</li>
                    <li style="padding: 5px; line-height: 1.1">Спрессовать темпером кофе в холдере (для рожковой кофеварки).</li>
                    <li style="padding: 5px; line-height: 1.1">Установить холдер в кофеварку.</li>
                    <li style="padding: 5px; line-height: 1.1">Поставить в лоток для сбора капель чистую подогретую чашку. Время приготовления – 25–30 секунд.</li>
                    <li style="padding: 5px; line-height: 1.1">Добавить сахар по вкусу.</li>
                </ol>
                <b>Приятного аппетита!</b>
            </div>
        </div>
        <div class="layer">
            <img class="png" src="img/espresso-macchiato.png" alt="espresso-macchiato">
            <div class="dscr">
                <b>Макиато</b> – это эспрессо с небольшим количеством молочной пены. Объём молока не должен превышать ½, в крайнем случае – 3/5 объёма кофе (на 25–30 мл эспрессо – не более 15 мл молока). Все напитки, в рецептах которых молока столько же или больше, чем кофе, классическим макиато называться не могут.
            </div>
            <div class="prd">
                <b>Продукты</b><br><br>
                25–30 мл эспрессо (из 7 г молотых зёрен)<br>
                10–15 мл молока температурой +4 °C<br>
                Корица, тёртый шоколад, сироп – по вкусу.
            </div>
            <div class="reciept">
                <b>Рецепт:</b>
                <ol start="1">
                    <li style="padding: 5px; line-height: 1.1">Взбивать молоко, пока оно не разогреется до +60 °C.</li>
                    <li style="padding: 5px; line-height: 1.1">Сварить порцию эспрессо (налить его в тёплую керамическую чашку).</li>
                    <li style="padding: 5px; line-height: 1.1">Тонкой струйкой влить молочную пенку в эспрессо. Добавить по вкусу сахар (ванильный или обычный) и карамельный сироп. Посыпать корицей или тертым шоколадом.</li>
                </ol>
                <b>Приятного аппетита!</b>
            </div>
        </div>
        <div class="layer">
            <img class="png" src="img/americano.png" alt="americano">
            <div class="dscr">
                <b>Кофе американо (итал. Caffè Americano)</b> – это эспрессо, разбавленный горячей водой. Наличие пенки (крема́) зависит от того, каким способом смешивают кофе и воду.
            </div>
            <div class="prd">
                <b>Продукты</b><br><br>
                Молотый кофе – 7–11 грамм<br>
                Вода – 30 мл для эспрессо и 30–470 мл<br>
                Сахар - по вкусу<br>
            </div>
            <div class="reciept">
                <b>Рецепт:</b>
                <ol start="1">
                    <li style="padding: 5px; line-height: 1.1">Включить кофемашину и подождать, пока загорится индикатор готовности.</li>
                    <li style="padding: 5px; line-height: 1.1">Если кофемашина оснащена кофемолкой, положить в неё столовую ложку с горкой кофейных зёрен.</li>
                    <li style="padding: 5px; line-height: 1.1">Если кофеварка – рожковая, отмерить 7–11 г молотого кофе (мерной ёмкостью или чайной ложкой, в 1 чайной ложке – 3 г). Темпером утрамбовать кофе в рожке, прилагая усилие не менее 20 кг.</li>
                    <li style="padding: 5px; line-height: 1.1">Установить рожок в кофеварку.</li>
                    <li style="padding: 5px; line-height: 1.1">Подогреть большую толстостенную чашку (к примеру, бокал для латте) для кофе и другую – горячей воды.</li>
                    <li style="padding: 5px; line-height: 1.1">Установить чашку для эспрессо в лоток для сбора капель, время приготовления кофе – 25–30 секунд.</li>
                    <li style="padding: 5px; line-height: 1.1">Во вторую чашку набрать горячей воды (ориентировочная температура – от +90 до +92 °C).</li>
                    <li style="padding: 5px; line-height: 1.1">Смешать ингредиенты. Добавить сахар по вкусу.</li>
                </ol>
                <b>Приятного аппетита!</b>
            </div>
        </div>
        <div class="layer">
            <img class="png" src="img/cappuccino.png" alt="cappuccino">
            <div class="dscr">
                <b>Капучино (Cappuccino)</b> – итальянский кофейный напиток на основе эспрессо. Классический вариант включает в себя двойную порцию черного кофе, горячее молоко и густую молочную пену, но некоторые бариста используют вместо последних двух ингредиентов сливки, еще добавляют в напиток корицу, шоколадную крошку, апельсиновую цедру.
            </div>
            <div class="prd">
                <b>Продукты</b><br><br>
                Кофе (эспрессо) – 60 мл<br>
                Молоко – 60 мл<br>
                Сахар – по вкусу<br>
            </div>
            <div class="reciept">
                <b>Рецепт:</b>
                <ol start="1">
                    <li style="padding: 5px; line-height: 1.1">Двойную порцию эспрессо (60 мл) налить в заранее подогретый паром высокий кофейный бокал или чашку объемом минимум 180 мл.</li>
                    <li style="padding: 5px; line-height: 1.1">Нагреть молоко до 60-70 °C, затем взбивать его капучинатором, венчиком или миксером в мелкую пену, пока объем не удвоится.</li>
                    <li style="padding: 5px; line-height: 1.1">Придерживая пенку ложкой, добавить молоко в эспрессо, по желанию подсластить сахаром и перемешать. Сверху выложить пену.</li>
                </ol>
                <b>Приятного аппетита!</b>
            </div>
        </div>
        <div class="layer">
            <img class="png" src="img/latte.png" alt="latte">
            <div class="dscr">
                <b>Если в итальянском ресторане попросить латте,</b> официант принесёт стакан молока (latte в переводе с итальянского означает «молоко»). Кофе с молоком, который в остальном мире сокращают до просто «ла̀тте» (с обязательным ударением на первом слоге) по-итальянски называют café latte и никак иначе.
            </div>
            <div class="prd">
                <b>Продукты</b><br><br>
                Кофе – 9 зерен<br>
                Вода – 30 мл<br>
                Молоко жирное (3,5%, домашнее) – 150 мл<br>
                Сахар - по вкусу<br>
            </div>
            <div class="reciept">
                <b>Рецепт:</b>
                <ol start="1">
                    <li style="padding: 5px; line-height: 1.1">Перемолоть зерна кофе в кофемолке.</li>
                    <li style="padding: 5px; line-height: 1.1">Всыпать свежемолотый кофе в турку, залить холодной водой.</li>
                    <li style="padding: 5px; line-height: 1.1">Поставить турку на медленный огонь, варить, пока не начнет подниматься пенка.</li>
                    <li style="padding: 5px; line-height: 1.1">Как только пенка начала подниматься, снять кофе с огня.</li>
                    <li style="padding: 5px; line-height: 1.1">Нагреть молоко, но не кипятить! Молоко должно быть прогретым (около 80 градусов).</li>
                    <li style="padding: 5px; line-height: 1.1">Взбить венчиком молоко до состояния воздушной пены.</li>
                    <li style="padding: 5px; line-height: 1.1">Половину молока налить в бокал для латте.</li>
                    <li style="padding: 5px; line-height: 1.1">Через сито процедить кофе в стакан. Тонкой струйкой по стенке бокала влить в него эспрессо.</li>
                    <li style="padding: 5px; line-height: 1.1">Сверху выложить готовую молочную пену. Вложить в бокал с напитком трубочку. Кофе латте по-домашнему готов.</li>
                </ol>
                <b>Приятного аппетита!</b>
            </div>
        </div>
        <div class="layer">
            <img class="png" src="img/moccacino.png" alt="moccacino">
            <div class="dscr">
                <b>Мокко (моккачино)</b> – это кофейно-молочный коктейль, похожий на латте с добавлением шоколада. Стандарта нет, поэтому изобретено немало вариантов мокко. Иногда в напиток добавляют взбитые сливки и маршмеллоу, но постоянных ингредиентов всегда три: кофе, молоко и шоколад. Кофе в мокачино должно быть не более 1/3 от объёма напитка.
            </div>
            <div class="prd">
                <b>Продукты</b><br><br>
                50 мл чёрного кофе<br>
                50 мл молока +1 ст. л.<br>
                60 г шоколада<br>
                15–20 г взбитых сливок<br>
                Сахар - по вкусу<br>
            </div>
            <div class="reciept">
                <b>Рецепт:</b>
                <ol start="1">
                    <li style="padding: 5px; line-height: 1.1">Измельчить на тёрке 10 г шоколада.</li>
                    <li style="padding: 5px; line-height: 1.1">Растопить на водяной бане 50 г шоколада с 1 ст. л. молока.</li>
                    <li style="padding: 5px; line-height: 1.1">Вылить растопленный шоколад в бокал.
                    <li style="padding: 5px; line-height: 1.1">Установить рожок в кофеварку.</li>
                    <li style="padding: 5px; line-height: 1.1">Сварить чёрный кофе (если нужно – подсластить) и перелить его в бокал. Не размешивать.</li>
                    <li style="padding: 5px; line-height: 1.1">Взбить холодное молоко капучинатором (должно нагреться до +65 °C).</li>
                    <li style="padding: 5px; line-height: 1.1">По лезвию ножа вылить молоко поверх кофе.</li>
                    <li style="padding: 5px; line-height: 1.1">Если сливки натуральные – взбить их (с сахаром) в крутую пену.</li>
                    <li style="padding: 5px; line-height: 1.1">Выложить сливки поверх молока.</li>
                    <li style="padding: 5px; line-height: 1.1">Посыпать тёртым шоколадом.</li>
                </ol>
                <b>Приятного аппетита!</b>
            </div>
        </div>
    </div>

    <div class="footer color">
        <p style="padding-top: 50px">© Copyright 2022<br /> Author: Patraman Gheorghi </p>
    </div>
</body>
</html>