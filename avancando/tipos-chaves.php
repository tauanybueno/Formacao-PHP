<?php

//chaves com tipos numericos inteiros ou strings
$array = [
    //1 => 'a',
    //'1' => 'b', string pode ser valor numerico e converte para inteiro e sobrescreve
    //1.5 => 'c', converteu para inteiro e sobrescreve o 1
    true => 'd', //valor boolean true e convertido para 1/ falso e convertido para 0
];

foreach ($array as $item) {
    echo $item .PHP_EOL;
}
