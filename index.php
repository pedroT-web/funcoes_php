<?php
require './config.php';
echo '<h1>Funções Com PHP</h1>';

function calculaNumeros($num1, $num2)
{

    $resultado = $num1 + $num2;

    echo "A Soma de {$num1} + {$num2} = " . $resultado;
}

function consultarTabelas($tabela = "tb_turma", $conn2) : string
{
    conexao();
    if (empty($conn2) or $conn2 == '') {
        echo 'IRMÃO PASSA A CONEXÃO DO BANCO AI<br>';
        return false;
    }

    $script = "SELECT * FROM " . $tabela;
    $res = $conn2->query($script)->fetch();

    echo '<pre>';
    var_dump($res);
    return 'Banco Consultado Com Sucesso !';
}

function conexao()
{
    $dsn = "mysql:dbname=db_gerenciador_sala;host=localhost";
    $usuario = "root";
    $senha = "";

    return new PDO($dsn, $usuario, $senha);
}

$novaConexao = conexao();

consultarTabelas('tb_docente', $novaConexao);
consultarTabelas('tb_reserva_sala', $novaConexao);
consultarTabelas('tb_sala', $novaConexao);


calculaNumeros(22, 12);
