<?php

$matriz = array();
// estrutura de repeticao com rand de 0 a 50 para a matriz 5x5
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(0, 50);
    }
}

require __DIR__ . "/../view/template.php";
