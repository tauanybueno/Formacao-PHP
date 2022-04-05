<?php

$idade = 17;
//$nome = 'Tauany';
$numeroDePessoas = 1;

echo "Voce so pode entrar se for maior de 18 anos ou ";
echo "a partir dos 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos. Voce pode entrar sozinho";
} else if ($idade >= 16 && $numeroDePessoas >= 1) {
    echo "Voce tem $idade anos, esta acompanhado (a), entao pode entrar.";
} else {
    echo "Voce so tem $idade anos. Voce nao pode entrar";
}

/*idade >= 18 && nome == Tauany
if ($idade >= 18 && $nome == 'Tauany'){
    echo "Voce tem $idade anos e seu nome e $nome" . PHP_EOL;
    echo 'Pode entrar';
}*/

/*if ($idade >= 18){
    echo "Voce tem $idade anos." . PHP_EOL;
    echo 'Pode entrar';
}else{
    echo "Voce so tem $idade... nao pode entrar" . PHP_EOL;
}*/

