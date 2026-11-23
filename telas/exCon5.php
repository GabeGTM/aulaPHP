<?php
    namespace Projeto\Exercicios\telas;
    require_once("../funcoesPhp/funcoes.php"); // Acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; // Acessando a classe

    $funcoes = new Funcoes(); // Criando um vínculo com a classe Funcoes
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="POST">
        <label>Peso (kg): </label>
        <input type="number" step="0.01" id="peso" name="peso"><br><br>

        <label>Altura (m): </label>
        <input type="number" step="0.01" id="altura" name="altura"><br><br>

        <button type="submit">Calcular</button>
    </form>
    
    <?php
        if(isset($_POST['peso']) && isset($_POST['altura'])){
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            
            // Utilizando o método da classe Funcoes
            $resultado = $funcoes->calculaImc($peso, $altura);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>