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
    <title>Localização do Número 50</title>
</head>
<body>
    <h1>Localização de um número (50)</h1>
    <form method="POST">
        <label>Digite números inteiros separados por vírgula: </label><br>
        <input type="text" id="numeros" name="numeros" placeholder="Ex: 12, 34, 50, 8" required><br><br>
        <button type="submit">Localizar</button>
    </form>

    <?php
        if (isset($_POST['numeros'])) {
            $lista = array_map('trim', explode(',', $_POST['numeros']));
            $resultado = $funcoes->buscarNumero50($lista);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>