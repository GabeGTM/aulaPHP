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
    <title>Validação de Idade</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Validação de idade</h1>
    <form method="POST">
        <label>Idade (0 a 120): </label>
        <input type="number" id="idade" name="idade" required><br><br>
        <button type="submit">Validar</button>
    </form>

    <?php
        if (isset($_POST['idade'])) {
            $resultado = $funcoes->validarIdade((int)$_POST['idade']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>