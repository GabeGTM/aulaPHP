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
    <title>Soma dos Ímpares</title>
</head>
<body>
    <h1>Soma dos números ímpares entre 1 e N</h1>
    <form method="POST">
        <label>Número N: </label>
        <input type="number" min="1" id="numero" name="numero" required><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if (isset($_POST['numero'])) {
            $resultado = $funcoes->somaImparesAteN((int)$_POST['numero']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>