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
    <title>Caixa Eletrônico</title>
</head>
<body>
    <h1>Caixa eletrônico</h1>
    <p>Saldo inicial de referência: R$ 1.500,00</p>
    <form method="POST">
        <label>Operação: </label>
        <select id="acao" name="acao" required>
            <option value="saldo">Consultar saldo</option>
            <option value="saque">Realizar saque</option>
            <option value="deposito">Realizar depósito</option>
            <option value="sair">Sair</option>
        </select><br><br>

        <label>Valor (R$): </label>
        <input type="number" step="0.01" min="0" id="valor" name="valor" value="0"><br><br>

        <button type="submit">Confirmar</button>
    </form>

    <?php
        if (isset($_POST['acao'])) {
            $valor = isset($_POST['valor']) ? (float)$_POST['valor'] : 0;
            $resultado = $funcoes->caixaEletronico($_POST['acao'], $valor);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "<br>Preencha os campos!";
        }
    ?>
</body>
</html>