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
    <title>Contagem por Intervalo</title>
</head>
<body>
    <h1>Contagem regressiva por intervalo</h1>
    <form method="POST">
        <label>Valor inicial: </label>
        <input type="number" id="inicio" name="inicio" required><br><br>

        <label>Valor final: </label>
        <input type="number" id="fim" name="fim" required><br><br>

        <button type="submit">Gerar Contagem</button>
    </form>

    <?php
        if (isset($_POST['inicio']) && isset($_POST['fim'])) {
            $resultado = $funcoes->contagemIntervaloDecrescente((int)$_POST['inicio'], (int)$_POST['fim']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>