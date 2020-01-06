<?php
header('Content-Type: text/html; charset=utf-8');
if (isset($_POST['fio'])) {$fio = $_POST['fio'];}
if (isset($_POST['pass'])) {$pass = $_POST['pass'];}
if (isset($_POST['disc'])) {$disc = $_POST['disc'];}
if (isset($_POST['photoshop'])) {$photoshop = $_POST['photoshop'];}
if (isset($_POST['dreamweaver'])) {$dreamweaver = $_POST['dreamweaver'];}
if (isset($_POST['php'])) {$php = $_POST['php'];}
if (isset($_POST['dostavka'])) {$dostavka = $_POST['dostavka'];}
if (isset($_POST['adress'])) {$adress = $_POST['adress'];}




if (!isset($photoshop)) {$photoshop="НЕТ";}
if (!isset($dreamweaver)) {$dreamweaver="НЕТ";}
if (!isset($php)) {$php="НЕТ";}




echo "<h2>Сведения о заказе клиента :</h2>";
echo "<strong>Ф.И.О заказчика</strong> - $fio<br> <strong>Пароль :</strong> $pass <br>";
echo  "<strong>Тип диска</strong> - $disc<br><br>";
echo "<strong>Хочет чтоб на диске были следующие курсы:</strong><br>";
echo "<strong>Курсы по Фотошопу</strong> - $photoshop<br><strong>Курсы по Adobe Dreameaver</strong>-$dreamweaver<br><strong>Курсы по PHP </strong> - $php<br><br>";
echo "<strong>Выбрал способ доставки</strong> - $dostavka<br>";
echo "<strong>В качестве домашнего адреса указал:</strong> $adress";


 ?>


