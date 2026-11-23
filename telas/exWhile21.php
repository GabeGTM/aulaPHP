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
    <title>Adivinhe o Número</title>
</head>
<body>
    <h1>Adivinhe o número secreto</h1>
    <form method="POST">
        <label>Seu palpite: </label>
        <input type="number" id="palpite" name="palpite" required><br><br>
        <button type="submit">Tentar</button>
    </form>

    <?php
        if (isset($_POST['palpite'])) {
            $resultado = $funcoes->adivinharNumero((int)$_POST['palpite']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>