<?php

$cateto1 = $_GET['a'];
$cateto2 = $_GET['b'];
$sommaCateti = pow($cateto1, 2) + pow($cateto2, 2);
$ipotenusa = sqrt($sommaCateti);
$areaT = ($cateto1 * $cateto2) / 2;

echo "<!DOCTYPE html>" . PHP_EOL;
echo "<html>" . PHP_EOL;
echo "<head>" . PHP_EOL;
echo "<meta charset='UTF-8'>" . PHP_EOL;
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>" . PHP_EOL;
echo "<title>Area del triangolo rettangolo</title>" . PHP_EOL;
echo "<style>" . PHP_EOL;
echo "body{background-color: #000; color: #fff; font-size: 20px; padding: 40px}" . PHP_EOL;
echo "section{display: flex; flex-direction: column; align-items: center}" . PHP_EOL;
echo "h1{font-size: 50px}" . PHP_EOL;
echo "div{display: flex; align-items: center}" . PHP_EOL;
echo "span{font-style: initial; font-size: 15px}" . PHP_EOL;
echo ".big{font-size: 40px}" . PHP_EOL;
echo ".link{display: flex; justify-content: right}" . PHP_EOL;
echo "a{color: #fff; text-decoration: none}" . PHP_EOL;
echo "</style>" . PHP_EOL;
echo "<body>" . PHP_EOL;
echo "<section>" . PHP_EOL;
echo "<h1>Area del triangolo rettangolo</h1>" . PHP_EOL;
echo "<p>Dato che il primo cateto misura " . print_r($cateto1, true) . " e il secondo cateto misura " . print_r($cateto2, true) . "...</p>" . PHP_EOL;
echo "<p>l'ipotenusa è " . print_r($ipotenusa, true) . " e</p>" . PHP_EOL;
echo "<p>l'area del triangolo è $areaT</p>" . PHP_EOL;
echo "</section>" . PHP_EOL;
echo "<p>Ripassino:</p><br><br>" . PHP_EOL;
echo "<div>" . PHP_EOL;
echo "<i>A =&nbsp;</i>" . PHP_EOL;
echo "<table border='0' cellspacing='0' width='50'>" . PHP_EOL;
echo "<tr><td>" . PHP_EOL;
echo "<i>C<sub>1</sub><span>&nbsp;&nbsp;x&nbsp;&nbsp;</span>C<sub>2</sub></i> <hr align='center'> <i>&nbsp;&nbsp;&nbsp;&nbsp;2</i>" . PHP_EOL;
echo "</td></tr>" . PHP_EOL;
echo "</table>" . PHP_EOL;
echo "</div><br><br>" . PHP_EOL;
echo "<i>I = <span class='big'>&radic;</span> C<sub>1</sub><sup>2</sup> + C<sub>2</sub><sup>2</sup></i><br><br>" . PHP_EOL;
echo "<div class='link'>" . PHP_EOL;
echo "<a href='1esercizio16_05_2025.php?id=Roma'><<&nbsp;&nbsp;&nbsp; Esercizio1</a>" . PHP_EOL;
echo "</div>" . PHP_EOL;
echo "</body>" . PHP_EOL;
echo "</html>" . PHP_EOL;


