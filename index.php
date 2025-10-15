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