<?php

    $x = array(
        0 => array(
            'a' => 1,
            'b' => 2,
            'c' => 3,
        ),
        1 => array(
            'a' => array(
                'd' => 4,
                'e' => 5,
            ),
            'b' => 5,
            'c' => 6,
        ),
        2 => array(
            'a' => 7,
            'b' => 8,
            'c' => 9,
        ),
    );

    // echo $x[1]['a'];

    // echo PHP_EOL;

    // print_r($x[1]);

    // echo PHP_EOL;

    // echo $x[1]['a']['d'];
    print_r($x[1]['a']['e']);