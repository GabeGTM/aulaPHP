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
    <title>Senha de Acesso</title>
</head>
<body>
    <h1>Senha de acesso</h1>
    <form method="POST">
        <label>Digite a senha (dica: 1234): </label>
        <input type="password" id="senha" name="senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>

    <?php
        if (isset($_POST['senha'])) {
            $resultado = $funcoes->validarSenha($_POST['senha']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>