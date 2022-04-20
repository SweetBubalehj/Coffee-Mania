<?php
$rec_exist = false;


function form()
{
    global $rec_exist;
    if (isset($_POST['submit'])) {
        if (!empty($_POST['firstname']) and !empty($_POST['lastname']) and !empty($_POST['country']) and !empty($_POST['subject'])) {
            $date = fopen("date.txt", "a") or die("Ошибка открытия файла");
            $rec = $_POST["firstname"] . " " . $_POST["lastname"] . " " . $_POST["country"] . " - " . $_POST["subject"] . "\n";
            fwrite($date, $rec);
            $rec_exist = true;
            fclose($date);
        } else echo "Не все поля заполнены!";
    }
}


function output()
{
    global $rec_exist;
    $date = fopen("date.txt", "a");
    fclose($date);
    $date = fopen("date.txt", "r") or die ("Ошибка открытия файла");
    ?>
    <h3>Мнения клиентов:</h3>
    <?php
    while (!feof($date)) {
        $rec = trim(fgets($date));
        if ($rec == true) {
            ?>
            <span>
                <?php
                echo "<div class='msg'>$rec</div>";
                ?>
                </span>
            <?php
        }

    }
}


?>
