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
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Cadastro de produtos</h1>
    <form method="POST">
        <label>Digite os preços dos produtos separados por vírgula: </label><br>
        <input type="text" id="precos" name="precos" placeholder="Ex: 19.90, 45.00, 12.50" required><br><br>
        <button type="submit">Calcular Resumo</button>
    </form>

    <?php
        if (isset($_POST['precos'])) {
            $lista = array_filter(array_map('trim', explode(',', $_POST['precos'])), fn($v) => $v !== '');
            $resultado = $funcoes->resumoProdutos(array_values($lista));
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>