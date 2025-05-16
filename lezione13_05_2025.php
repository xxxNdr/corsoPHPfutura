<?php


    echo '<html>';
    echo '<head>';
    echo '<title>Get</title>';
    echo '</head>';
    echo '<body>';
    echo '<h1>Get ' .$_SERVER['QUERY_STRING']. '</h1>';
    echo '<pre>' .print_r($_GET, true). '</pre>';
    echo '</body>';
    echo '</html>';

    print_r($_GET);                                     // print r = stampa risorsa, non si può fare un echo di tutto un array//


