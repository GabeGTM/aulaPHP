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
    <title>Menu de Operações</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Menu de operações matemáticas</h1>
    <form method="POST">
        <label>Opção: </label>
        <select id="opcao" name="opcao" required>
            <option value="1">1 - Somar</option>
            <option value="2">2 - Subtrair</option>
            <option value="3">3 - Multiplicar</option>
            <option value="4">4 - Dividir</option>
            <option value="0">0 - Sair</option>
        </select><br><br>

        <label>Número 1: </label>
        <input type="number" step="any" id="n1" name="n1" required><br><br>

        <label>Número 2: </label>
        <input type="number" step="any" id="n2" name="n2" required><br><br>

        <button type="submit">Executar</button>
    </form>

    <?php
        if (isset($_POST['opcao']) && isset($_POST['n1']) && isset($_POST['n2'])) {
            $resultado = $funcoes->operacaoMenu($_POST['opcao'], $_POST['n1'], $_POST['n2']);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>