<?php

$texto = "infoserv";
$nome = "Luis";
$idade = "16";

function imprimeTexto($texto, $nome = "", $idade = 0){               // para deixaar indefinido tem que botar EX.: $nome = ""
    echo $texto;
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $idade;
}


function imprimeTexto2($texto){
    return "$texto";
}

imprimeTexto($texto, $nome, $idade);
$retorno = imprimeTexto2($texto); // não aparece pois esta no return, apnas funciona se der um "echo "$retorno".ou só dar um echo com o imprime"

echo "<br>";
echo "<br>";

echo "Olá $nome, você atual estudante da $texto, e têm $idade anos.";

// Calcular quantos segundos tem em 2h e 30min

//echo "Calcular quantos segundos tem o tempo de 2h e 30min";
//$horapseg = 2 * 3600;
//$minpseg = 30 * 60;
//$segundos = $horapseg + $minpseg;
//echo "<br> 2h e 30min em segundos têm: $segundos<br>";

// Calcular quantos segundos tem em 2h e 30min
$horaPMinuto = 2 * 60;
$minutoH = $horaPMinuto * 60;
$minutoPSegundo = 30 * 60;
$segundos = $minutoPSegundo + $minutoH;

function calcularSegundosEmHoras($horaPMinuto, $minutoPSegundo, $minutoH){
    echo $horaPMinuto;
    echo "<br>";
    echo $minutoPSegundo;
    echo "<br>";
    echo $minutoH;
}

calcularSegundosEmHoras($horaPMinuto, $minutoPSegundo, $minutoH);

echo "<br>";

echo "o resultado será $segundos segundos";



/**
 * Calcular IMC de uma Pessoa de Peso 80 kg
 * Altura de 1.8m
 * echo "<br>";
 * echo "<br>";
 * echo "O IMC de uma pessoa de 80kg e 1.8 metros de altura<br>";
 * $peso = 80;
 * $altura = 1.8 ** 2;
 * $IMC = round($peso / $altura, 2);
 * echo "<br> o IMC dessa pessoa é de: $IMC<br>.";
 * 
 * echo "<br>";
 * echo "<br>";
*/

echo "<br>";
echo "<br>";

$peso = 80;
$altura = 1.8;

function calcularImc($peso, $altura){
    $Imc = round($peso / ($altura** 2), 2);
    echo "O IMC dessa pessoa é de $Imc";
}
 
calcularImc($peso, $altura);

echo "<br>";
echo "<br>";


// Converter  Fahrenheit para Celsius. 90º -> ?
//$Fahrenheit;
//$grausCelcius = ($Fahrenheit - 32) / 1.8;
//echo "<br> 90º Fahrenheit convertidos para Celsius é: $grausCelcius";

$Fahrenheit = 90;
$grausCelcius = "";
function coverterGrausFParaC($grausCelcius, $Fahrenheit){
    $grausCelcius = round($Fahrenheit - 32)/ 1.8;
    echo "90º Farhenhrit para Celsius ficará $grausCelcius °";
}

 coverterGrausFParaC($grausCelcius, $Fahrenheit);


 //echo "<br> Calcule a fórmula de Baskhara dado a= 1; b= -3; c= -4";
//$a = 1;
//$b = -3;
//$c = -4;
//$delta= $b **2 - 4 * $a * $c;
//$baskharax1 = (-$b + sqrt($delta)) / 2 * $a;
//$baskharax2 = (-$b - sqrt($delta)) / 2 * $a;
//echo "<br>  As raizes do caluculo de Baskhara é: $baskharax1 e $baskharax2 ";

function ehDivisaoExata($numero, $divisor){
    $restoDivisao = $numero % $divisor;
    $ehDivisaoExata = $restoDivisao == 0;

    return $ehDivisaoExata;
}

function verificarSeEhPara($numero){
    $ehPar = ehDivisaoExata($numero, 2);

    if ($ehPar){
        echo "O núnero informado $numero é par";
    }else{
        echo "O número informado $numero é impar";
    }
}



