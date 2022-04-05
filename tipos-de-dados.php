<?php
//nao precisa declarar o tipo de dado
$idade = 23;
echo gettype($idade); //integer

$salario = 1000.30;
echo gettype($salario); //double

$divisao = 10 /3;
echo gettype($divisao); //double

$texto = "Ola Mundo";
echo gettype($texto); //string

$verdadeiro = true;
$falso = false;
echo gettype($verdadeiro); //boolean
echo gettype($falso); //boolean