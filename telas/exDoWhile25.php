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
    <title>Calculadora de Média</title>
</head>
<body>
    <h1>Calculadora de média</h1>
    <form method="POST">
        <label>Digite as notas do aluno separadas por vírgula: </label><br>
        <input type="text" id="notas" name="notas" placeholder="Ex: 8, 7.5, 9" required><br><br>
        <button type="submit">Calcular Média</button>
    </form>

    <?php
        if (isset($_POST['notas'])) {
            $lista = array_filter(array_map('trim', explode(',', $_POST['notas'])), fn($v) => $v !== '');
            $resultado = $funcoes->calcularMediaSimples(array_values($lista));
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>