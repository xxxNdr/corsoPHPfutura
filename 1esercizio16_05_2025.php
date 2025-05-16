<?php
    
    $capitali = array(

        'Roma' => array(
            'nazione' => 'Italia',
            'capitale' => 'Roma',
        ),
        'Londra' => array(
            'nazione' => 'Regno Unito',
            'capitale' => 'Londra',
        ),
        'Gerusalemme' => array(                //Ramallah de facto / Gerusalemme Est de iure
            'nazione' => 'Palestina',
            'capitale' => 'Gerusalemme',
        ),
        'Sana\'a' => array(            
            'nazione' => 'Yemen',
            'capitale' => 'Sana\'a',
        ),
        'Lima' => array(
            'nazione' => 'Perù',
            'capitale' => 'Lima',
        ),
        'Tripoli' => array(
            'nazione' => 'Libia',
            'capitale' => 'Tripoli',
        ),
        'Teheran' => array(
            'nazione' => 'Iran',
            'capitale' => 'Teheran',
        ),
        'Beirut' => array(
            'nazione' => 'Libano',
            'capitale' => 'Beirut',
        ),
        'Islamabad' => array(
            'nazione' => 'Pakistan',
            'capitale' => 'Islamabad',
        ),
        'Damasco' => array(
            'nazione' => 'Siria',
            'capitale' => 'Damasco',
        ),
        
    );


    echo '<!DOCTYPE html>' . PHP_EOL;
    echo '<html>' . PHP_EOL;
    echo '<head>'. PHP_EOL;
    echo "<meta charset='UTF-8'>" . PHP_EOL;
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>" . PHP_EOL;
    echo '<title>Capitali e Stati</title>'. PHP_EOL;
    echo '<style>' . PHP_EOL;
    echo 'body{background-color: #000; color: #fff; font-size: 20px; text-align: center; padding: 50px}' . PHP_EOL;
    echo 'h1{font-size: 100px; text-align: center;}' . PHP_EOL;
    echo 'pre{text-align: initial}'. PHP_EOL;
    echo 'a{color: #fff; text-decoration: none; font-size: 25px}'. PHP_EOL;
    echo 'div{text-align: right}' . PHP_EOL;
    echo '</style>'. PHP_EOL;
    echo '</head>'. PHP_EOL;
    echo '<body>'. PHP_EOL;
    echo '<p>'.$capitali[ $_GET['id']]['capitale']. ' è la capitale di: </p>'. PHP_EOL;
    echo '<h1>'.$capitali[ $_GET['id']]['nazione'].'</h1>' .PHP_EOL;
    echo '<p style="text-align: left">Vedi elenco città qui sotto:</p><br><br>'. PHP_EOL;
    echo '<pre>'.print_r($capitali, true).'</pre>' . PHP_EOL;
    echo '<div><a href="2esercizio16_05_2025.php">>>&nbsp;&nbsp;&nbsp; Esercizio 2</a></div>'. PHP_EOL;
    echo '</body>'. PHP_EOL;
    echo '</html>'. PHP_EOL;