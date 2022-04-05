<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Tauany', //chave
        'saldo' => 1000
    ],

    '123.456.778-91' => [
        'titular' => 'Maria', //chave
        'saldo' => 10000
    ],

    '123.456.745.08' => [
        'titular' => 'Alberto', //chave
        'saldo' => 300
    ],
];

//adicionando dados - arrays associativos voce precisa passar a chave
$contasCorrentes['254.698.745.25'] = [
    'titular' => 'Claudia',
    'saldo' => 10000,
];


//$conta1 = ['titular']; //acessa um item atraves do nome da chave


/*//para cada uma das contas correntes como conta
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}*/

//para cada uma das contas correntes pegar o indice que e o cpf de cada
foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

