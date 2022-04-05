<?php

$conta1 = [
    'titular' => 'Tauany', //chave
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria', //chave
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto', //chave
    'saldo' => 300
];

//$conta1 = ['titular']; //acessa um item atraves do nome da chave

$contasCorrentes = [$conta1, $conta2, $conta3];

//exibindo os titulares
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;

}