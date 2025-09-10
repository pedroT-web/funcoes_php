<?php

// Crie uma função que receba o nome de uma pessoa e retorne a frase:
// "Bem-vindo, [nome]!"
function boasvindas()
{
    echo "<br><strong>Função de boas-vindas</strong><br>";
    $nome = 'Pedro';
    return "Bem-Vindo {$nome}";
}

echo boasvindas();


// Crie uma função que receba uma palavra e retorne ela invertida
function inverter_frase($palavra)
{
    echo "<br><br><strong>Função de inverter string</strong><br>";
    $inversao = strrev($palavra);

    echo "A palavra {$palavra} Invertida se torna {$inversao}";
}

inverter_frase('Paulo gente boa');


// Crie uma função que receba uma string e retorne a quantidade de vogais nela.
function vogais($texto)
{
    echo "<br><br><strong>Função de contar vogais</strong><br>";

    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contadorVogais = 0;
    $texto = strtolower($texto); // tranforma a frase em minusculo
    //  conta quantos bites tem na string
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $contadorVogais++;
        }
    }
    return $contadorVogais;
}

$frase = 'Victor Bunda Mole';
$qtdVogais = vogais($frase);
echo "O número de vogais na frase {$frase} é:  {$qtdVogais}";


// Crie uma função que receba um número (tamanho da senha) e retorne uma 
// senha aleatória usando letras e números.
function geradorSenha($tamanho)
{
    echo "<br><br><strong>Função geradora de senhas</strong><br>";
    $alfabeto = "abcdefghijkulmnopqrstuvwxyz1234567890!@#$%&*";
    return $senha = substr(str_shuffle($alfabeto), 0, $tamanho);
}

$tamanho = 10;
$senhaGerada = geradorSenha($tamanho);

echo "A senha gerada de {$tamanho} Caracteres é: {$senhaGerada}";


// Crie uma função que receba um número de 11 dígitos e retorne no formato:
// 000.000.000-00.
function formatarCpf($cpf)
{
    echo "<br><br><strong>Função de formatar CPF</strong><br>";

   return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cpf);

}

$cpf = 32594762412;
$cpf = formatarCpf($cpf);

echo"Cpf Formatado: {$cpf}";


