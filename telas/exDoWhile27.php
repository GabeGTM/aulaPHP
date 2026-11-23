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
    <title>Pesquisa de Satisfação</title>
</head>
<body>
    <h1>Pesquisa de satisfação (notas de 1 a 5)</h1>
    <form method="POST">
        <label>Digite as notas (1 a 5) separadas por vírgula: </label><br>
        <input type="text" id="avaliacoes" name="avaliacoes" placeholder="Ex: 5, 4, 5, 3, 5" required><br><br>
        <button type="submit">Calcular Satisfação</button>
    </form>

    <?php
        if (isset($_POST['avaliacoes'])) {
            $lista = array_filter(array_map('trim', explode(',', $_POST['avaliacoes'])), fn($v) => $v !== '');
            $resultado = $funcoes->pesquisaSatisfacao(array_values($lista));
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>