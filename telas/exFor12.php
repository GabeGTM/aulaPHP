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
    <title>Divisibilidade por 3</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Divisibilidade por 3 (30 números)</h1>
    <form method="POST">
        <label>Digite 30 números inteiros separados por vírgula: </label><br>
        <input type="text" id="numeros" name="numeros" placeholder="Ex: 3, 6, 9, 10, 12, ..." required><br><br>
        <button type="submit">Verificar</button>
    </form>

    <?php
        if (isset($_POST['numeros'])) {
            $lista = array_slice(array_map('trim', explode(',', $_POST['numeros'])), 0, 30);
            $resultado = $funcoes->divisiveisPorTres($lista);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>