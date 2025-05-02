<?php

echo "
Bem vindo ao meu projeto
";

//Para criar variáveis, use "$X = Y" (atribui Y a variável X)

//Variável do tipo string
$nome = "
Matheus Arantes Ferreira
";

//Variável do tipo inteiro
$idade = 21;

//Variável do tipo double ou float
$altura = 1.73;

//Variável do tipo boolean
$cartaMotorista = true;


/*
Operadores de comparação

Igual a: ==
Idêntico a: ===
Diferente de: != 
Diferente de: <>
Não idêntico a: !==
Maior: >
Maior ou igual: >=
Menor: <
Menor ou igual: <=

Operadores lógicos

OR: ||
true x true = true
true x false = true
false x true = true
false x false = false

AND: &&
true x true = true
true x false = false
false x true = false
false x false = false

NOT: !
true x true = true
true x false = false
false x true = false
false x false = true

*/
$habilitadoDirigir = $cartaMotorista && $idade > 18;

/*

Operadores de incremento:
Adição: ++
Subtração: --

OBS: usado antes tem o valor incrementado, usado depois tem o valor antes do incremento

*/
$cinco = 5;
echo $cinco;

$seis = ++$cinco;
echo $seis;

$seis2 = $cinco++;
echo $seis2;

$sete = $cinco;
echo $sete;

/*
Operadores

Adição: +
Subtração: -
Multiplicação: *
Divisão: /
Potência: **
Resto de divisão: %

*/
$testeOperadores = (((5 + 0.5 + 4.5) / 10) * 10) - 9;

/*
Operadores de atribuição

Atribuir adição: +=
Atribuir subtração: -=
Atribuir multiplicação: *=
Atribuir divisão: /=
Atribuir valor: =

*/

$testeOperadores -= 40;
$testeOperadores += 20;
$testeOperadores *= 2;
$testeOperadores /= 10;

echo $testeOperadores;

