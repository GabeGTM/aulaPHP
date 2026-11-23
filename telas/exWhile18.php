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
    <title>Crescimento de Investimento</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Crescimento de investimento</h1>
    <p>Investimento inicial: R$ 1.000,00 | Rendimento: 2% ao mês | Meta: ultrapassar R$ 2.000,00</p>
    <form method="POST">
        <input type="hidden" name="calcular" value="1">
        <button type="submit">Calcular Tempo</button>
    </form>

    <?php
        if (isset($_POST['calcular'])) {
            $resultado = $funcoes->mesesInvestimento();
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Clique no botão para calcular!";
        }
    ?>
</body>
</html>