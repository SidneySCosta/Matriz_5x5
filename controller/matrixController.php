<?php

$matrix = array();

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matrix[$i][$j] = rand(0, 50);
    }
}

require __DIR__ . "/../view/template.php";
