<?php

$peso = 60;
$altura = 1.58;
$imc = $peso / ($altura ** 2);

echo "Seu IMC e de $imc. Seu IMC esta: ";

if ($imc < 18.5){
    echo "Abaixo do ideal";
} else if ($imc > 18.5 && $imc < 24.9){
    echo "Normal;";
} else if ($imc > 24.9 && $imc < 30){
    echo "Sobrepeso";
}else {
    echo "Obesidade";
}
