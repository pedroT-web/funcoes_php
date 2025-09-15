<?php

// Crie uma função que receba dois números como parâmetros e retorne a soma 
// deles.

function somaSimples($num1, $num2)
{
    echo "<br><strong>Função de soma simples</strong><br>";
    $soma = $num1 + $num2;

    echo "{$num1} + {$num2} = {$soma}";
}

somaSimples(10, 20);

// Crie uma função que receba um número e retorne se ele é par ou ímpar.
function par_impar($numero)
{
    echo "<br><br><strong>Função de par ou ímpar</strong>";
    if ($numero % 2 == 0) {
        echo "<br>O Número {$numero} é um Número Par";
    } else {
        echo "<br>O Número {$numero} é um Número Impar";
    }
}

par_impar(9);


// Crie uma função que receba 3 números e retorne qual deles é o maior.
function maior_numero($numero1, $numero2, $numero3)
{
    echo "<br><br><strong>Função de maior número</strong><br>";

    if ($numero1 > $numero2 && $numero1 > $numero3) {
        echo "O Número {$numero1} é o Maior entre eles";
    } else if ($numero2 > $numero1 && $numero2 > $numero3) {
        echo "O Número {$numero2} é o Maior entre eles";
    } else if ($numero3 > $numero1 && $numero3 > $numero2) {
        echo "O Número {$numero3} é o Maior entre eles";
    } else {
        echo "Os Números São Iguais";
    }
}

maior_numero(6, 18, 12);

// Crie uma função que receba um array de números e retorne a média.
function media($numeros)
{
    echo "<br><br><strong>Função de média</strong><br>";

    $soma = array_sum($numeros);
    $qtd_numero = count($numeros);

    $media = $soma / $qtd_numero;

    echo "A média Final é: {$media}";
}

media($numero = [3, 7, 8, 9, 10]);

// Crie uma função que receba um número e retorne a tabuada dele (de 1 a 10).
function tabuada($numeroTabuada)
{
    echo "<br><br><strong>Função de tabuada</strong><br>";
    echo "Tabuada do número {$numeroTabuada}<br>";

    for ($i = 1; $i <= 10; $i++) {
        $calculo = $numeroTabuada * $i;


        echo "{$i} X {$numeroTabuada} = {$calculo}<br>";
        $calculo = 0;
    }
}

tabuada(20);

// Crie uma função que receba um valor em real (R$) e faça a conversão para 
// dólar (US$), usando um parâmetro para a cotação.
function conversao($valor)
{
    echo "<br><br><strong>Função de conversão</strong><br>";
    $valorDolar = 5.42;

    $converter = $valor * $valorDolar;
    $formatarResultado = number_format($converter, 2, ',',);

    echo "A conversão de R$ {$valor} para dolar é: US$ {$formatarResultado}";
}

conversao(10.6);

// Escreva uma função que receba, o nome de um funcionario e o valor de seu salario e aplique um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento, entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.

function salario($nome = "funcionario 1", $salario = 0)
{
    if ($salario < 1000) {
        $aumento = ($salario * 0.20) + $salario;
    } else if ($salario >= 1000 || $salario <= 2000) {
        $aumento = ($salario * 0.15) + $salario;
    } else {
        $aumento = ($salario * 0.10) + $salario;
    }

    echo "O salário do funcionário {$nome} teve um aumento para: R$ {$aumento}";
}

echo "<br><br><strong>Função de Salário</strong><br>";
salario("Paulo", 7500);

// Crie uma função que verifique se uma letra é vogal ou consoante.
function vogal($letra = "")
{
    $letraMinuscula = strtolower($letra);

    if ($letraMinuscula == "a" || $letraMinuscula == "e" || $letraMinuscula == "i" || $letraMinuscula == "o" || $letraMinuscula == "u") {
        $texto = "A letra escolhida é uma vogal";
    } else {
        $texto = "A letra escolhida é uma consoante";
    }

    echo $texto;
}

echo "<br><br><strong>Função de Vogal</strong><br>";
vogal("a");


// Crie uma função que receba um array de números e retorne um novo array contendo apenas os números pares.
function arrayNumeros($numeros = [])
{

    $arrayPar = [];
    foreach ($numeros as $linhas) {
        if ($linhas % 2 == 0) {
            $arrayPar[] = $linhas;
        }
    }

    var_dump($arrayPar);
}

echo "<br><br><strong>Função de Array</strong><br>";
arrayNumeros([2, 5, 10, 8, 7, 13]);


// Crie uma função que receba um array de números e retorne o segundo maior número do array.
function arraySegundoMaior($numeroMaior = []){
    sort($numeroMaior); // Ordena o array em ordem crescente
    $penultimo = $numeroMaior[count($numeroMaior) - 2];
    echo $penultimo;
}

echo "<br><br><strong>Função de Segundo Maior Número</strong><br>";
arraySegundoMaior([1, 4, 69, 9, 12, 18, 8]);

//  Crie uma função que receba um array de strings e retorne um novo array contendo apenas as strings que começam com uma vogal.
function arrayStrings($textos = [])
{
    $novoArray = [];

    foreach ($textos as $palavra) {
        $letraMinucula = strtolower($palavra);
        if (str_starts_with($letraMinucula, 'a') || str_starts_with($letraMinucula, 'e') || str_starts_with($letraMinucula, 'i') || str_starts_with($letraMinucula, 'o') || str_starts_with($letraMinucula, 'u')) {
            $novoArray[] = $letraMinucula;
        }
    }
    var_dump($novoArray);
}

echo "<br><br><strong>Função de Vogais em um Array</strong><br>";
arrayStrings(["aurelio", "victor", "Urelio", "Elio", "thais"]);

// Faça uma função que retorne o cubo de um número.
function numeroCubo($numero = 0){
    $numeroAoCubo = $numero**3;

    echo $numeroAoCubo;
}
echo "<br><br><strong>Função de Maior Número</strong><br>";
numeroCubo(10);

// Faça uma função que retorne a raiz quadrada de um número.
function raizQuadrada($numeroRaiz = 0){
    $raiz = sqrt($numeroRaiz);
    echo $raiz;
}
echo "<br><br><strong>Função de Raiz De Um número</strong><br>";
raizQuadrada(16);