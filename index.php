<?php
/**
 *  string 'texto qualquer' || 'A' || "A"
 * char|| character 'A'
 * inst|| integer 23
 * float 23.8
 * double 23.8
 * decimal 23.8
 */

$aviao = "Boeing747";

echo "A conta 10+15 ";
$valor1 = 10;
$valor2 = 15;
$soma = $valor1 + $valor2; // 10 + 15 -> 25
// mesma coisa
//$soma = $soma+3; // 28
$soma +=3; // 28


echo "a soma é:". $soma;

echo "<br>";
echo "<br>";

$valor3 = 10;
$valor4 = 2;
$divisao = $valor3 / $valor4; // 10 / 2 -> 5
echo "A conta $valor3 / $valor4 a divisão é: $divisao ";
echo "<br>";
echo "<br>";

$valor5 = 10;
$valor6 = 2;
$restoDivisao = $valor5 % $valor6;
echo "O resto da divisão de $valor5 por $valor6 é:" . $restoDivisao;
echo "<br>";

/**
 * Exercício 1:
 * Fazer a tabuada do 5, 6.
 * 
 * Exercício 2:
 * calcular as médias: Artmetica, Ponderada e Harmonica
 */

echo "<br>";

echo "TABUADA DO 5";
// Tabuada 5
$numero = 5;
echo "<br>";
echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";

echo "<br>";
echo "TABUADA DO 6";
// Tabuada 6
echo "<br>";
$numero = 6;
echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";

//Aritmetica
echo "<br> Aritmetica<br>";
$valor1 = 10; 
$valor2 = 20;
$valor3 = 30;

$mediaAritmetica = ($valor1 + $valor2 + $valor3) / 3;
echo "<br> Média Artmética: $mediaAritmetica<br>";

//Ponderada
echo "<br>Calcular a Média Ponderada.<br>";
$prova1 = 10; //3
$prova2 = 5; //1.5
$prova3 = 7; //3.2


$peso1 = 3;
$peso2 = 3;
$peso3 = 4;

$mpNumerador = ($prova1 * $peso1) + ($prova2 * $peso2) + ($prova3 * $peso3);
$mpDenominador = $peso1 + $peso2 +$peso3;

$mediaPonderada = $mpNumerador / $mpDenominador;
echo "<br> A média é: $mediaPonderada<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//Harmonica
echo "<br>Calcular a Média Harmonica.<br>";
$prova1 = 2;
$prova2 = 5;
$prova3 = 5;

$quantidadeProvas = 3; //n;
$mhDenominador = (1/ $prova1) + (1 / $prova2) + (1 / $prova3);
$mediaHarmonica = round($quantidadeProvas / $mhDenominador, 2);
echo "A média Harmonica é: $mediaHarmonica<br>";
echo "<br> ";
