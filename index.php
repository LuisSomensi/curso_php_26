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


// Calcular o volume de uma esfera com raio 5cm


//Dica :Elevar ao cubo -> 2 ** 3 = 8

echo "Volume da esfera com um raio de 5cm <br>";
$raio = 5;
$raioCubo = 5 ** 3;
CONST PI = 3.14;
$fracao = 4/3;
$volume = round( $fracao * PI * $raioCubo, 2);
echo "<br> O volume é: $volume<br>";

echo "<br>";
echo "<br>";


// Calcular a Área de um triângulo que tenha uma base de 8cm


// E sua altura de 6cm

echo "A área de um triângulo que tem uma base de 8 cm e uma altura de 6cm";
$altura = 8;
$base = 6;
$area = ($base * $altura) / 2;
echo "<BR> A área do triângulo é: $area";


// Calcular IMC de uma Pessoa de Peso 80 kg


//Altura de 1.8m
echo "<br>";
echo "<br>";
echo "O IMC de uma pessoa de 80kg e 1.8 metros de altura<br>";
$peso = 80;
$altura = 1.8 ** 2;
$IMC = round($peso / $altura, 2);
echo "<br> o IMC dessa pessoa é de: $IMC<br>.";

echo "<br>";
echo "<br>";


// Calcular quantos segundos tem em 2h e 30min

echo "Calcular quantos segundos tem o tempo de 2h e 30min";
$horapseg = 2 * 3600;
$minpseg = 30 * 60;
$segundos = $horapseg + $minpseg;
echo "<br> 2h e 30min em segundos têm: $segundos<br>";


// Converter  graus Celcius para Fahrenheit. 35ºC -> ?ºF

$grausCelcius = 35;
$Fahrenheit = ($grausCelcius * 1.8) + 32;
echo "<br> 35º C convertidos para Fahreniheit é: $Fahrenheit";
echo "<br>";
echo "<br>";


// Aplicar a formula de Bhaskara para a seguinte equação do segundo grau:

    // $a = 1 ; b = -3; $c = -4;
echo "<br> Calcule a fórmula de Baskhara dado a= 1; b= -3; c= -4";
$a = 1;
$b = -3;
$c = -4;

$delta= $b **2 - 4 * $a * $c;
$baskharax1 = (-$b + sqrt($delta)) / 2 * $a;
$baskharax2 = (-$b - sqrt($delta)) / 2 * $a;
echo "<br>  As raizes do caluculo de Baskhara é: $baskharax1 e $baskharax2 ";
echo"<br>";
echo"<br>";


// Converter  Fahrenheit para Celsius. 90º -> ?
$Fahrenheit;
$grausCelcius = ($Fahrenheit - 32) / 1.8;
echo "<br> 90º Fahrenheit convertidos para Celsius é: $grausCelcius";

echo"<br>";


// Converter  graus Kelvin para Celsius. 95º -> ?

$grausk = 95;
$grausCelsius = $grausk - 273;
echo "<br> 95º Kelvin convertidos para Celsius é: $grausCelsius";
echo"<br>";


// Converter  graus Celsius para Kelvin. 35º -> ?
$grausCelcius = 35;
$grausk = $grausCelcius + 273;
echo "<br> 35º Celsius convertidos para Kelvin é: $grausk";
echo "<br>";


// Converter  graus Celsius para Kelvin. x -> 35º
$grausCelcius = 35;
$grausCelcius = $grausk - 273;
echo "<br> 35º Celsius convertidos para Kelvin é: $grausk";

echo "<br>";
echo "<br>";



$tehodinheiro = true;
$tenhovontadedetomarcafe= false;

if ($tehodinheiro && $tenhovontadedetomarcafe)
{
    $xyz =20;
    echo "vou tomar café<br>";
}
else if ($tehodinheiro && !$tenhovontadedetomarcafe) {
    echo "vou comprar chocolate<br>";
}

else {
    echo "não tenho vontade de nada<br>";
}

$soma = 10 + 10;

/*simular o funcionamento de uma calculadora
utilizar if, else if else.
Operadores + - * /
dica: $operador.
*/

echo "<br>";
echo "<br>";

$operador = "-";
$valor1 = 2;
$valor2 = 6;

if ($valor1 < $valor2){
    $temporario = $valor1;
    $valor1 = $valor2;
    $valor2 = $temporario;
}

// if valor1 < valor2 inferte
if($operador == "+"){
    $soma = $valor1 + $valor2; 
    echo "A soma de $valor1 $operador $valor2 = $soma";
    echo "<br>";
}else if ($operador == "-"){
    $subtração = $valor1 - $valor2; 
    echo "A subtranção de $valor1 $operador $valor2= $subtração";
    echo "<br>";
}else if($operador == "*"){
    $multiplicação = $valor1 * $valor2; 
    echo "A muliplicação de $valor1 $operador $valor2= $multiplicação";
    echo "<br>";
}else if($operador == "/"){
    $divisao = round($valor1 / $valor2 ,2); 
    echo "A divisão de $valor1 $operador $valor2 = $divisao ";
    echo "<br>";
}   

echo "<br>";

//Página 15 exercício 8

echo "<br>Calcular a Média Ponderada com base nas notas do aluno a seguir: 10, 5 e 4.<br>";
$prova1 = 10; 
$prova2 = 5; 
$prova3 = 4; 


$peso1 = 3;
$peso2 = 3;
$peso3 = 4;

$mpNumerador = ($prova1 * $peso1) + ($prova2 * $peso2) + ($prova3 * $peso3);
$mpDenominador = $peso1 + $peso2 +$peso3;

$media = $mpNumerador/$mpDenominador;
if ($media >= 6){
    echo "O aluno foi aprovado com a média de: $media";
}
else{
    echo "O aluno foi reprovado, pois ficou com a média de: $media";
}

echo "<br>";
echo "<br>";

$nome = "Luís";
$idade = 15;

if($idade >=18){
    echo "$nome é de maior";

}
else{
    echo "$nome é de menor";
}

echo "<br>";
echo "<br>";

$numero = 2;
if ($numero %2 == 0){
    echo "par";

}else{
    echo "impar";
}

echo "<br>";
echo "<br>";

for ($a = 0; $a < 10; $a++){
    echo "<br>";
    echo "O número é $a";
}

echo "<br>";
echo "<br>";

for ($a = 1; $a <= 10; $a++){
    echo "<br>";
    echo "O número é $a";
}

echo "<br>";
echo "<br>";
$numero = 5;
echo "tabuada do $numero";

echo "<br>";
echo "<br>";


for ($contar = 0; $contar <= 10; $contar++){
    $restoDivisao = $contar % 2;
    $ehDivisaoExata = $restoDivisao == 0;

    echo "<br>";

    // echo "$numero X $contar = " . $numero * $contar;

    if ($restoDivisao) {
        echo "$contar é par";
    
    } else {
        echo "$contar é impar";
    }


        
    }


   echo "<br>";
   echo "<br>";

for ($contar = 0; $contar <= 10; $contar++){
    if ($contar == 5){
        continue;
    }

    echo "<br>";
}

//exibir os numeros pares ate 50

//exibir os numeros em ordem decrescnte de 10 - 0

//Calcular o ftorial de um numero, ex de 5 = 120
$contPares = 0;

for ($contar = 0; $contar <= 50; $contar++){
    $restoDivisao = $contar % 2;
    $ehDivisaoExata = $restoDivisao == 0;

   if ($restoDivisao == 0) {
        echo "$contar é par";
        $contPares++;
            echo "<br>";
    }

    if ($contPares == 50){
        break;
    }
        
} 
echo "<br>";
echo "<br>";

//2

for ($contar = 10; $contar >= 0; $contar--){
    echo "<br>";
    echo "em ordem decrescente de 0 a 10 os números são $contar"; echo "<br>";
}

echo "<br>";
echo "<br>";


echo "calcular fatoria do 5";

echo "<br>";

$numero = 5;

for ($fatorial = $numero-1; $fatorial >= 1; $fatorial--){
    $numero *= $fatorial;
}
echo "o fatorial de 5 tem valor de $numero";