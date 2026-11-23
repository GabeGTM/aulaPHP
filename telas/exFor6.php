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
    <title>Tabuada Personalizada</title>
</head>
<body>
    <h1>Tabuada personalizada</h1>
    <form method="POST">
        <label>Número inteiro: </label>
        <input type="number" id="numero" name="numero" required><br><br>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <?php
        if (isset($_POST['numero'])) {
            $resultado = $funcoes->tabuada((int)$_POST['numero']);
            echo "<br>O resultado é:<br>" . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>