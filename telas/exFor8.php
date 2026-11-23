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
    <title>Análise de Temperaturas</title>
</head>
<body>
    <h1>Análise de temperaturas (7 dias)</h1>
    <form method="POST">
        <label>Digite as temperaturas de 7 dias separadas por vírgula: </label><br>
        <input type="text" id="temps" name="temps" placeholder="Ex: 28, 31, 33.5, 25, 29, 32, 27" required><br><br>
        <button type="submit">Analisar</button>
    </form>

    <?php
        if (isset($_POST['temps'])) {
            $lista = array_slice(array_map('trim', explode(',', $_POST['temps'])), 0, 7);
            $resultado = $funcoes->analiseTemperaturas($lista);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>