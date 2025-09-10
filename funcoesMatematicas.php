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
function conversao($valor){
    echo "<br><br><strong>Função de conversão</strong><br>";
    $valorDolar = 5.42;

    $converter = $valor * $valorDolar;
    $formatarResultado = number_format($converter, 2, ',',);

    echo "A conversão de R$ {$valor} para dolar é: US$ {$formatarResultado}";
}

conversao(10.6);
