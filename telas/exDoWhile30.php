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
    <title>Conversor de Moedas</title>
</head>
<body>
    <h1>Conversor de moedas (Real para Dólar)</h1>
    <form method="POST">
        <label>Valor em Reais (R$): </label>
        <input type="number" step="0.01" min="0" id="reais" name="reais" required><br><br>

        <label>Cotação do Dólar (R$): </label>
        <input type="number" step="0.01" min="0.01" id="cotacao" name="cotacao" required><br><br>

        <button type="submit">Converter</button>
    </form>

    <?php
        if (isset($_POST['reais']) && isset($_POST['cotacao'])) {
            $resultado = $funcoes->converterRealParaDolar($_POST['reais'], $_POST['cotacao']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>