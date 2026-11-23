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
    <title>Média de 8 Notas</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Média de 8 notas</h1>
    <form method="POST">
        <label>Digite 8 notas separadas por vírgula: </label><br>
        <input type="text" id="notas" name="notas" placeholder="Ex: 7, 8, 6.5, 9, 7.5, 8, 6, 7" required><br><br>
        <button type="submit">Calcular Média</button>
    </form>

    <?php
        if (isset($_POST['notas'])) {
            $lista = array_slice(array_map('trim', explode(',', $_POST['notas'])), 0, 8);
            $resultado = $funcoes->mediaOitoNotas($lista);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>