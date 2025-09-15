<?php

// Crie uma função que retorne um objeto PDO conectado ao banco
function conexaoBanco(): PDO
{
    $dsn = "mysql:dbname=usuarios;host=localhost";
    $usuario = 'root';
    $senha = '';

    $conn = new PDO($dsn, $usuario, $senha);

    return $conn;
}



// Crie uma função que receba nome e email e insira na tabela usuarios.
function inserirDados($nome, $email)
{
    $conn = conexaoBanco();
    $insert = "INSERT INTO tb_usuarios(nome, email) VALUES (:nome_usuario, :email_usuario)";
    $preparar = $conn->prepare($insert)->execute([
        ':nome_usuario' => $nome,
        ':email_usuario' => $email
    ]);
}

if (isset($_POST['input_nome']) && isset($_POST['input_email'])) {
    if (!empty($_POST['input_nome']) && !empty($_POST['input_email'])) {
        $nome = $_POST['input_nome'];
        $email = $_POST['input_email'];
        inserirDados($nome, $email);
    }

    header("location: ./funcoesBanco.php");
}


// Crie uma função que recebe o nome de uma tabela e retorne todos os dados dela
function selectDados($nomeTabela = "tb_usuarios")
{
    $conn = conexaoBanco();

    $nomeTabela = "tb_usuarios";
    $select = "SELECT * FROM $nomeTabela";
    $script = $conn->query($select)->fetchAll();

    return $script;
}


$resultadoSelect = selectDados();

function deletarDados($nomeTabela = "tb_usuarios")
{
    $conn = conexaoBanco();

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $delete = "DELETE FROM $nomeTabela WHERE id = :id";
        $deletePrepare = $conn->prepare($delete)->execute([
            ':id' => $id
        ]);

        header("location: funcoesBanco.php");
    }
}

$resultadoDelete = deletarDados();

function searchDados($tabela = "tb_usuarios")
{
    if (isset($_POST['input_pesquisa']) && !empty($_POST['input_pesquisa'])) {
        $conn = conexaoBanco();
        $tabela = "tb_usuarios";

        $id = $_POST['input_pesquisa'];
        $select = "SELECT * FROM $tabela WHERE id = $id";
        $preparar = $conn->query($select)->fetch();
        return $preparar;
    }else if(!isset($_POST['input_pesquisa'])){
        return "Id Invalido";
    }
}

$resultadoSearch = searchDados();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuários</title>

    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <h2>Cadastro de Usuários</h2>

    <!-- Formulário de cadastro -->
    <form action="funcoesBanco.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="input_nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="input_email" required>

        <button type="submit" value="Cadastrar">Cadastrar</button>
    </form>


    <!-- Tabela de exibição de usuários -->
    <h2>Usuários Cadastrados</h2>
    <form method="POST" action="funcoesBanco.php">
        <input id="input_pesquisa" name="input_pesquisa" placeholder="Pesquisar usuário..." class="search-input">
        <button type="submit" class="search-button">Pesquisar</button>
    </form>
    <div class="container_search">
        <form>
            <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php var_dump($resultadoSearch) ?></h5>
                </div>
        </form>
    </div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Esses dados devem ser preenchidos dinamicamente com o backend -->
                <!-- Exemplo estático abaixo -->
                <?php foreach ($resultadoSelect as $linhas) { ?>
                    <tr>
                        <td><?= $linhas['nome'] ?></td>
                        <td><?= $linhas['email'] ?></td>
                        <td class="espaco_lixeira"><a href="<?= $resultadoDelete ?>?id=<?= $linhas['id'] ?>"><i class="bi bi-trash lixeira"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

</body>

</html>