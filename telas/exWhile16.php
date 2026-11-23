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
    <title>Contagem de Positivos</title>
</head>
<body>
    <h1>Contagem de números positivos</h1>
    <form method="POST">
        <label>Digite números separados por vírgula (encerra ao encontrar negativo): </label><br>
        <input type="text" id="numeros" name="numeros" placeholder="Ex: 10, 4, 7, -1" required><br><br>
        <button type="submit">Contar</button>
    </form>

    <?php
        if (isset($_POST['numeros'])) {
            $lista = array_map('trim', explode(',', $_POST['numeros']));
            $resultado = $funcoes->contarPositivosAteNegativo($lista);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>