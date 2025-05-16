<?php

$hotelRimini = array(
    0 => array(

        1 => 'Marco',
        2 => "nessuno",
        3 => "nessuno",
    ),
    1 => array(
        1 => "nessuno",
        2 => "nessuno",
        3 => "Luigi",
    ),
    2 => array(
        1 => "nessuno",
        2 => "Giannino",
        3 => "nessuno",
    ),

);

$camera = $hotelRimini[$_GET['piano']][$_GET['camera']];

echo "<!DOCTYPE html>" . PHP_EOL;
echo "<html>" . PHP_EOL;
echo "<head>" . PHP_EOL;
echo "<meta charset='UTF-8'>" . PHP_EOL;
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>" . PHP_EOL;
echo "<title>Hotel Rimini</title>" . PHP_EOL;
echo "<style>" . PHP_EOL;
echo "body{color: #fff; background-color: #000; text-align: center; font-size: 20px; padding: 40px 20px}" . PHP_EOL;
echo "h1{font-size: 100px}" . PHP_EOL;
echo "h2{font-size: 40px}" . PHP_EOL;
echo "pre{text-align: initial}" . PHP_EOL;
echo "a{color: #fff; text-decoration: none; font-size: 25px}" . PHP_EOL;
echo "div{text-align: right}" . PHP_EOL;
echo "</style>" . PHP_EOL;
echo "</head>" . PHP_EOL;
echo "<body>" . PHP_EOL;
echo "<h1>Hotel Rimini</h1>" . PHP_EOL;
echo "<h2>Al piano e alla stanza che hai scelto c'è:</h2>" . PHP_EOL;
echo "<h2> $camera </h2><br><br>" . PHP_EOL;
echo "<h3 style='text-align: justify; width:350px;'>Dove sono tutt' e tre?</h3><br><br>" . PHP_EOL;
echo "<pre>" . print_r($hotelRimini, true) . "</pre>" . PHP_EOL;
echo "<div>" . PHP_EOL;
echo "<a href='3esercizio16_05_2025.php'>>>&nbsp; &nbsp; Esercizio 3</a>" . PHP_EOL;
echo "</div>" . PHP_EOL;
echo "</body>" . PHP_EOL;
echo "</html>" . PHP_EOL;