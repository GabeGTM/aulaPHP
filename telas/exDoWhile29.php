<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes = new Funcoes();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Acesso</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Controle de acesso</h1>
    <form method="POST">
        <label>Usuário (dica: admin): </label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label>Senha (dica: 1234): </label>
        <input type="password" id="senha" name="senha" required><br><br>

        <button type="submit">Verificar Acesso</button>
    </form>

    <?php
        if (isset($_POST['usuario']) && isset($_POST['senha'])) {
            $resultado = $funcoes->controleAcesso($_POST['usuario'], $_POST['senha']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>