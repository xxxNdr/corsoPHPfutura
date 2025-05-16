<?php

    $persone = array(
        0 => array(
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'età' => 30,
            'sesso' => 'M',
            'città' => 'Roma'
        ),
        1 => array(
            'nome' => 'Luigi',
            'cognome' => 'Verdi',
            'età' => 25,
            'sesso' => 'M',
            'città' => 'Milano'
        ),
        2 => array(
            'nome' => 'Giulia',
            'cognome' => 'Bianchi',
            'età' => 28,
            'sesso' => 'F',
            'città' => 'Torino'
        ),
    );

    $persona = $persone[ $_GET['id'] ];
    echo '<html>';
    echo '<head>';
    echo '<title>Persone</title>';
    echo '</head>';
    echo '<body>';
    echo '<h1>' .$persona['nome'].' '.$persona['cognome']. '</h1>';
    echo '<h2>' .$_SERVER['QUERY_STRING']. '</h2>';
    echo '<p>Età: ' .$persona['età']. '</p>';
    echo '<p>Città: ' .$persone[ $_GET['id'] ]['città']. '</p>';
    echo '</body>';
    echo '</html>';
