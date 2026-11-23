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
    <title>Contagem de Números Pares</title>
</head>
<body>
    <h1>Contagem de números pares (20 números)</h1>
    <form method="POST">
        <label>Digite 20 números inteiros separados por vírgula: </label><br>
        <input type="text" id="numeros" name="numeros" placeholder="Ex: 1, 2, 3, 4, ..." required><br><br>
        <button type="submit">Contar Pares</button>
    </form>

    <?php
        if (isset($_POST['numeros'])) {
            $lista = array_slice(array_map('trim', explode(',', $_POST['numeros'])), 0, 20);
            $resultado = $funcoes->contarPares($lista);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>