<?php

/*Tipos Primitivos
Int | Integer == 1, 2, 3....
Float | Double == 1.0, 2.0, 3.0....
String | Char-Character == "Oi", 'o'...
*/


//Tipos compostos|coleção de dados: Array | Vetor

$numeros = array(); //array vazio
$numeros = []; //array vazio

$numeros = [10, 11, 12, 20.99, "infoserv"]; // Tam:5
//           0   1   2     3        4

for($i = 0; $i <5; $i++){
    echo $numeros[$i] . "<br>";
}

echo "<br>";

print_r ($numeros);         //só quando der B.O


echo "<br>";
echo "<br>";


var_dump($numeros);         //só quando der B.O

echo "<br>";
echo "<br>";

 echo implode("<br>", $numeros);


echo "<br>";
echo "<br>";


 //fazer com o while e o do while


echo "<br>mesma ativide com o while <br>";
$i = 0;
$numeros = [10, 21, 32, 43, 54, 65];

while ($i <6){                          //em quanto nao chegar em 5adiciona+1
    echo $numeros [$i] . "<br>";
    $i++;
}

"<br>";
"<br>";

$i = 0;

echo "<br>mesma atividde com o do while <br>";

do {                                  //
    echo $numeros [$i] . "<br>";
    $i++;
}while ($i <6);

"<br>";"<br>";

//SALVAR OS NUMEROPRIMOS ENCONTRADOSEMUM ARRAY
//APOS TER ENCONTRADO OS 5 PRIMOS,EM UM FOR EXIBA-OS

"<br>";
"<br>";
"<br>";

echo "Os 5 primeiros numeros primos são:  <br>";

$contadorDeNumPrimos = 0;
$contadorDeDivisores = 0;
$primoOuNao = 5;
$antecessor = $primoOuNao -1;

$contadorDeNumPrimos = 0;
$primosV= [];
for ($primoOuNao = 3; $contadorDeNumPrimos < 5; $primoOuNao++) {

    $antecessor = $primoOuNao -1;
    $ehPrimo = true;

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {

        $restoDaDivisao = $primoOuNao % $divisor;
        $ehDivisaoExata = $restoDaDivisao == 0;

        if ($ehDivisaoExata) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo == true){
        $primosV[] = $primoOuNao;
        $contadorDeNumPrimos++;
    }

}

$i = 0;
"<br>";
while ($i <5){                          //em quanto nao chegar em 4 adiciona +1
    echo $primosV [$i] . "<br>";
    $i++;
}

/**
 * Somar Arrays
 * $arrayInicio = [5, 10, 50]
 * $arrayFim = [10, 90, 30]
 * Resultado: $arraySoma [15, 100, 80]
 */

$arraySoma = [];
$arrayInicio = [5,10, 50];
$arrayFim = [10, 90, 30];

for($i = 0; $i <3; $i++){
    $arraySoma[$i] = $arrayInicio[$i] + $arrayFim[$i];
}

echo "<br>";
echo "<br>";


echo implode(",", $arraySoma );

/**
 * Dada uma palavra informada pelo usuario,
 * verificar se a mesma forma um álíndromo
 * Ex.: ana, subi no onibus, kaiak, natan
 * Dica: Um for dentro do outro
 */


echo"<br>";
echo"<br>";

echo "<br> Palíndromo: <br>";





echo "<br><br>";
$palavra = "neen";
$quantidadeDeLetras = strlen($palavra);
$UmMenos = $quantidadeDeLetras - 1;
$testeIndo = [];
$testeVoltando = [];


for ($i = 0; $i < $quantidadeDeLetras; $i++){

    $testeIndo[] = $palavra[$i];
}

for ($j = $UmMenos; $j >= 0; $j = $j - 1){

    $testeVoltando[] = $palavra[$j];
}

$ehigual = $testeIndo == $testeVoltando;

if ($ehigual){
    echo "É Palindromo a palavra: $palavra";
} else{
    echo "Não é palindromo a palavra: $palavra";
}
echo "<br>";

/**
*Contar quantas vogais existem em uma frase
*
*Ex.: $palavra: "infoserv"
*
*Saída esperada: 3
*Dica: $vogalMinuscula =strlower($palavras[$i]);
*$vogais = [a, e, i, o, u]
*in_array()
*$existeVogl = in_array($vogalMinuscula, $vogais);
*
*Contar quais vogais existem em uma frase totalizando a quantidade de cada um
*/

$vogais = "aeiou";
$palavra = "Luis";
$palavraMin = strtolower($palavra);
$tamanhoDaPalavra = strlen($palavra);
$qtdVogais = 0;

for ($i = 0; $i < $tamanhoDaPalavra; $i++){
    $palavraAvaliada = $palavraMin[$i];

    for ($j = 0; $j < 5; $j++){
        $letraTestada = $vogais[$j];

        if ($letraTestada == $palavraAvaliada){
            $qtdVogais++;
            break;
        } else{
            continue;
        }
    }
}

echo "A palavra $palavra tem $qtdVogais vogais.";


// Contar quais vogais existem em cada palavra, quantos a..., quantos e...

// 1 descobrir quais são vogais

$vogais = "aeiou";
$palavra = "Luis";
$palavraMin = strtolower($palavra);
$tamanhoDaPalavra = strlen($palavra);
$vogaisContadas = [];

for ($i = 0; $i < $tamanhoDaPalavra; $i++){
    $palavraAvaliada = $palavraMin[$i];

    for ($j = 0; $j < 5; $j++){
        $letraTestada = $vogais[$j];

        if ($letraTestada == $palavraAvaliada){
            $vogaisContadas[] = $palavraAvaliada;
            break;
        } else{
            continue;
        }
    }
}

// contar cada uma delas
echo "<br><br> Contagem de vogais: <br><br>";

$tamanhoDasVogais = count($vogaisContadas);

$vogalA = 0;
$vogalE = 0;
$vogalI = 0;
$vogalO = 0;
$vogalU = 0;

for ($i = 0; $i < $tamanhoDasVogais; $i++) {
    $vogalDescoberta = $vogaisContadas[$i];

    if ($vogalDescoberta == "a"){
        $vogalA++;
    }
    if ($vogalDescoberta == "e"){
        $vogalE++;
    }
    if ($vogalDescoberta == "i"){
        $vogalI++;
    }
    if ($vogalDescoberta == "o") {
        $vogalO++;
    }
    if ($vogalDescoberta == "u"){
        $vogalU++;
    }
}

echo "A: $vogalA<br> E: $vogalE<br> I: $vogalI<br> O: $vogalO<br> U: $vogalU<br>";
