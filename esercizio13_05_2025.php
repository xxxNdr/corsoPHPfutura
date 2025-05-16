<?php

    $gM = array("pop", "rock", "dance", "tecno", "folk", "rap", "Non ascolto quasi più niente, eccetto in rari casi");

    $p = array(
        "nome" => "Andrea",
        "cognome" => "Sartori",
        "età" => 38,
        "città" => "Bologna",
    );

    echo '<body style="background-color: #000; font-family: Arial, sans-serif; color: #fff;">' . PHP_EOL;
    echo '<h1 style="font-size: 50px;">' . $p["nome"] . ' ' . $p["cognome"] . '</h1>' . PHP_EOL;
    echo '<p>' . $p["nome"] . ' ha ' . $p["età"] . ' anni e vive a ' . $p["città"] . '.</p>' . PHP_EOL;
    echo '<p>Ad ' . $p["nome"] . ' non piace ascoltare musica ' . $gM[5] . ' e recentemente ha affermato: "' . $gM[6] . '".</p>' . PHP_EOL;