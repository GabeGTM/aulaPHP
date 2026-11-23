<?php
    namespace Projeto\Exercicios\telas;
    session_start();

    require_once("../funcoesPhp/funcoes.php");
    use Projeto\Exercicios\funcoesPhp\Funcoes;

    $funcoes = new Funcoes();

    if (!isset($_SESSION['soma_ex14'])) {
        $_SESSION['soma_ex14'] = 0;
    }

    $mensagem = "";
    $alertaLimite = false;

    if (isset($_POST['numero'])) {
        $mensagem = $funcoes->acumularValorWhile($_POST['numero'], $_SESSION['soma_ex14'], 200);
        if ($_SESSION['soma_ex14'] >= 200) {
            $alertaLimite = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acumulador de Valores</title>
</head>
<body>
    <h1>Acumulador de valores</h1>

    <form method="POST">
        <label>Digite um número inteiro: </label><br>
        <input type="number" id="numero" name="numero" required><br><br>
        <button type="submit">Acumular</button>
    </form>

    <?php
        if ($mensagem !== "") {
            echo "<br>O resultado é: " . $mensagem;
        } else {
            echo "<br>Preencha os campos!";
        }

        if ($alertaLimite) {
            echo "<script>alert('Atenção! A soma chegou ou ultrapassou 200 (Total: " . $_SESSION['soma_ex14'] . ").');</script>";
        }
    ?>
</body>
</html>