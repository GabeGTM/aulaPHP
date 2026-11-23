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
    <title>Calculadora de Descontos</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Calculadora de descontos</h1>
    <form method="POST">
        <label>Valor da compra (R$): </label>
        <input type="number" step="0.01" min="0" id="valor" name="valor" required><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
        if (isset($_POST['valor'])) {
            $resultado = $funcoes->calcularDescontoCompra($_POST['valor']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>