<?php
namespace projeto\Exercicios\funcoesPhp;


class Funcoes {
    private float $num1;
    private float $num2;
    private float $resultado;

    public function __construct() {
        $this->num1 = 0;
        $this->num2 = 0;
        $this->resultado = 0;
    }

    // Métodos de acesso e modificadores
    public function __get(string $dado): mixed {
        return $this->$dado;
    }

    public function __set(string $variavel, string $novoDado): void {
        $this->$variavel = $novoDado;
    }

    public function somarDoisNumeros(float $num1, float $num2) {
        $this->resultado = $num1 + $num2;
        return $this->resultado;
    }

    public function subtrairDoisNumeros(float $num1, float $num2) {
        $this->resultado = $num1 - $num2;
        return $this->resultado;
    }

    public function multiplicarDoisNumeros(float $num1, float $num2) {
        $this->resultado = $num1 * $num2;
        return $this->resultado;
    }

    public function dividirDoisNumeros(float $num1, float $num2) {
        if ($num2 == 0) {
            return "Impossível dividir por zero";
        } else {
            $this->resultado = $num1 / $num2;
            return $this->resultado;
        }
    }//fim do metodo divir

     public function delta(int $a, int $b, int $c) {
        $delta = pow($b, 2) - 4 * $a * $c;
        return $delta;
    }

    // Calculando X1 e X2
    public function calcularX1X2(int $a, int $b, int $c) {

        if ($a == 0) {
            return "O valor de A não pode ser zero!";
        }

        $delta = $this->delta($a, $b, $c);

        if ($delta < 0) {
            return "Impossível calcular X1 e X2, delta negativo!";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);

            return "X1 = $x1 <br><br> X2 = $x2";
        }
    }

    public function dobroNum(float $num1){
        $this->resultado = 2 * $num1;
        return $this->resultado;
    }//fim do metodo

    public function calcularMediaTresNumeros(float $num1, float $num2, float $num3){
        $somar = $num1 + $num2 + $num3;
        $resultado = $somar/3;
        return $resultado;
    }//fim do metodo media ex3


    public function calcularRaizQuadrada(float $num1){
        $resultado = sqrt($num1);
        return $resultado;
    }//fim do metodo raiz quadrada ex4


    public function converterMetrosParaCentimetros(float $num1){
        $converter = $num1 * 100;
        $resultado = $converter;
        return $resultado;

    }//fim metodo converter m para cm ex5


    public function areaCirculo(float $num1){
        $area = pow($num1, 2) * 3.14 * 2;
        return $area;

    }//fim metodo area do circulo ex6

    
    public function celsiusFahrenheit(float $num1){
        $f = ($num1 * 1.8) + 32;
        return $f;

    }//fim metodo conversão de temperatura ex7


    public function descontoProduto(float $num1){
        $desconto = $num1 / 10;
        $valor = $num1 - $desconto;
        return $valor;

    }//fim metodo desconto de produto ex8



    public function idadeMeses(float $num1){
        $idade = $num1 * 12;
        return $idade;

    }//fim metodo idade ex9



    public function numerosParImpar(float $num1){
   
    if($num1 % 2 == 0){
        return "par";
    }else{
        return "impar";
    }

    }//fim metodo par ou impar ex10


    public function areaTriangulo(float $base, float $altura){
        $areaT = ($base * $altura) / 2;
        return $areaT;

    }//fim metodo area do triangulo ex11



    public function volumeCaixaRentagular(float $comprimento, float $largura, float $altura){
        $areaCaixa = $comprimento * $largura * $altura;
        return $areaCaixa;

    }//fim metodo volume caixa retangular ex12


    public function raizCubicaQuadrada(float $num1){
        $quadrada = sqrt($num1);
        $cubica = pow ($num1, 1/3);
        return "<br><br> quadrada: $quadrada <br><br> cubica: $cubica";
    }//fim metodo calcular raiz cubica e quadrada ex13



    public function calcularImposto(float $num1){
        $imposto = $num1 * 0.18;
        $valor = $num1 + $imposto;
        return $valor;

    }//fim calcular imposto ex14


    public function velocidadeMedia(float $distancia, float $tempo){
        $velocidadeM = $distancia / $tempo;
        return $velocidadeM;

    }//fim calcular velocidade media ex15


    public function calcularMediaAririmetica(float $num1, float $num2){
        $somar = $num1 + $num2;
        $resultado = $somar/2;
        return $resultado;
    }//fim do metodo media aritimetica ex16


    public function salarioMensal(float $valorHora, float $horaTrabalhada){
        $salario = $valorHora * $horaTrabalhada;
        return $salario;
    }//fim do metodo salario mensal ex17


    public function idadeDias(float $num1){
        $idade = $num1 * 365.25;
        return $idade;

    }//fim metodo idade dias ex18

    public function tempoRestante(float $num1){
        $tempoVida = 100 - $num1;
        return $tempoVida;

    }//fim metodo tempo restante de vida até 100 anos ex19


    public function somaMedia(float $num1, float $num2, float $num3){
        $somar = $num1 + $num2 + $num3;
        $media = $somar/3;
        return "<br><br> resultado da soma é: $somar <br><br> resultado da média: $media";
    }//fim do metodo media ex20



    public function areaTrapezio(float $num1, float $num2, float $num3) {
        $baseMaior = $num1;
        $baseMenor = $num2;
        $altura = $num3;
        $areaTrapezio = (($baseMaior + $baseMenor) * $altura) / 2;

        return "<br><br> A área do trapézio é: " . $areaTrapezio;
    }//fim do metodo area trapezio ex21


    public function diasParaSegundos(float $num1) {
        $dia = $num1;
        $segundos = $dia * 86400;;

        return "<br><br> total de segundos: " . $segundos;
    }//fim do metodo dias para segundos ex22


    public function somaDigitos(float $num1) {
        // Transforma o número em texto e separa cada dígito
        $digitos = str_split((string)$num1);
        
        // Soma todos os elementos do array
        $soma = array_sum($digitos);

        return "<br><br> Total da soma dos dígitos: " . $soma;
    } //ex23
    

    public function inversoMultiplicativo(float $num1) {
        return "<br><br> inverso é: $num1 * 1/$num1 ";
    }//ex24



    public function hipotenusaEx(float $num1, float $num2) {
        $somaCateto = pow($num1, 2) + pow($num2, 2);    
        $hipotenusa = sqrt($somaCateto);

        return "<br><br> A hipotenusa é: " . $hipotenusa;
    } //ex25

    

    public function convertBinario(float $num1) {
        $binario = decbin($num1);
        return "<br><br> em binario: " . $binario;
    } //ex26


    public function convertHexadecimal(float $num1) {
        $hexadecimal = dechex($num1);
        return "<br><br> em binario: " . $hexadecimal;
    } //ex27


    public function raizCubica(float $num1) {
        $raizCubica = pow($num1, 1/3);
        return "<br><br> em binario: " .$raizCubica;
    } //ex28


    public function montanteJurosSimples(float $num1, float $num2, float $num3) {
        $jurosSimples = ($num1 * ($num2/100) * $num3);
        $montante = $num1 + $jurosSimples;

        return "<br><br> Resultado: " .$montante;
    } //ex29


    public function montanteJurosComposto(float $num1, float $num2, float $num3) {
        $juros = pow((1 +($num2/100)), $num3);
        $montante = $num1 * $juros;

        return "<br><br> Resultado: " .$montante;
    } //ex30



    public function grausRadianos(float $num1) {
        $radianos = $num1 * 3.14/180;

        return "<br><br> Resultado: " .$radianos;
    } //ex31


    public function converterPorcentagem(float $num1) {
        $porcentagem = $num1 * 100;

        return "<br><br> Resultado:  .$porcentagem%";
    } //ex32



    public function mediaPonderada(float $n1, float $p1, float $n2, float $p2, float $n3, float $p3) {
        $media = (($n1 * $p1) + ($n2 * $p2) + ($n3 * $p3)) / ($p1 + $p2 + $p3);

        return "<br><br> Resultado: " . $media;
    } //ex33


    public function numInteiroDecimal(float $num1) {
        $inteiro = $num1 / 10;

        return "<br><br> Resultado: .$num1 <br><br>.$inteiro";
    } //ex34



    public function saldoContaBancaria(float $num1) {
       $rendimento = $num1 * 1/2;
       $saldo = $num1 + $rendimento;

        return "<br><br> Resultado com rendimento de 0,5: .$saldo <br><br> saldo normal: $num1";
    } //ex35


    public function gastoEnergia(float $num1, float $num2) {
       $custo = ($num1 * $num2 * 1.20)/1000;
 
        return "<br><br> total a pagar:" .$custo;
    } //ex36

    public function fParaC(float $num1) {
       $celsius = ($num1 - 32) *  5/9;
 
        return "<br><br>temperatura:" .$celsius;
    } //ex37



    public function densidade(float $num1, float $num2) {
       $densidade = $num1 / $num2;
 
        return "<br><br> a Densidade é:" .$densidade;
    } //ex38


    public function multiploDe10(float $num1): string
    {
        $multiploMaisProximo = (int) (round($num1 / 10) * 10);

        return "<br><br>O múltiplo de 10 mais próximo é: " . $multiploMaisProximo;
    } //ex39


    
    public function numOctal(float $num1): int
    {
        $num1 = (int) $num1;
        $octal = 0;

        for ($casa = 1; $num1 > 0; $num1 = intdiv($num1, 8), $casa *= 10) {
            $resto = $num1 % 8;
            $octal += $resto * $casa;
        }

        return $octal;
    } //ex39


    public function numPositivoNegativoZero(float $num1)
    {
        if ($num1 > 0) {
            $resultado = "$num1 é positivo e maior que zero";
        } elseif ($num1 < 0) {
            $resultado = "$num1 é negativo";
        } else {
            $resultado = "$num1 é zero";
        }    

        return "<br><br>" . $resultado;
    } //condicionais 1


    public function maiorNum(float $num1, float $num2)
    {
        if ($num1 > $num2) {
            $resultado = "$num1 é maior do que $num2";
        }else {
            $resultado = "$num2 é maior do que $num1";

        }    

        return "<br><br>" . $resultado;
    } //condicionais 2


    public function maiorTresNum(float $num1, float $num2, float $num3)
    {
        if (($num1 > $num2) && ($num1 > $num3)) {
            $resultado = "$num1 é maior do que $num2 e $num3";
        }elseif(($num2 > $num1) && ($num2 > $num3)) {
            $resultado = "$num2 é maior do que $num1 e $num3";

        }elseif (($num3 > $num1) && ($num3 > $num2)){
            $resultado = "$num3 é maior do que $num1 e $num2";

        } else {
            $resultado = "Não há um único número maior";
        }

        return "<br><br>" . $resultado;
    } //condicionais 3


    public function anoBissexto(float $num1)
    {
        if (($num1 % 4 == 0) && (substr($num1,3,2)/ 400)) {
            $resultado = "$num1 é bissexto";

        } else {
            $resultado = "Não é bissexto.";
        }

        return "<br><br>" . $resultado;
    } //condicionais 4


    public function calculaImc($peso, $altura) {
        if ($altura <= 0) {
            return "Altura inválida.";
        }

        $imc = $peso / ($altura * $altura);
        $classificacao = "";

        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc < 25) {
            $classificacao = "Peso normal";
        } elseif ($imc < 30) {
            $classificacao = "Sobrepeso";
        } elseif ($imc < 35) {
            $classificacao = "Obesidade Grau I";
        } elseif ($imc < 40) {
            $classificacao = "Obesidade Grau II";
        } else {
            $classificacao = "Obesidade Grau III (mórbida)";
        }

        return number_format($imc, 2, ',', '.') . " - " . $classificacao;
    }//condicionais 5
    

    public function verificaVoto($idade) {
        if ($idade < 0) {
            return "Idade inválida.";
        } elseif ($idade < 16) {
            return "Não pode votar.";
        } elseif (($idade >= 16 && $idade < 18) || $idade >= 70) {
            return "Pode votar (voto facultativo).";
        } else {
            return "Pode votar (voto obrigatório).";
        }
    }//condicionais 6

    public function verificaAprovacao($n1, $n2, $n3) {
        $media = ($n1 + $n2 + $n3) / 3;
        $mediaFormatada = number_format($media, 2, ',', '.');

        if ($media >= 7) {
            return "Média: $mediaFormatada - Aprovado!";
        } elseif ($media >= 5) {
            return "Média: $mediaFormatada - Em recuperação.";
        } else {
            return "Média: $mediaFormatada - Reprovado.";
        }
    }//condicionais 7

    public function verificaIntervalo($numero, $minimo, $maximo) {
    
        if ($minimo > $maximo) {
            return "Erro: O valor mínimo não pode ser maior que o máximo.";
        }

        if ($numero >= $minimo && $numero <= $maximo) {
            return "O número $numero está **dentro** do intervalo [$minimo, $maximo].";
        } else {
            return "O número $numero está **fora** do intervalo [$minimo, $maximo].";
        }
    }//condicionais 8

    public function classificaIdade($idade) {
        if ($idade < 0) {
            return "Idade inválida.";
        } elseif ($idade <= 11) {
            return "Criança";
        } elseif ($idade <= 17) {
            return "Jovem";
        } elseif ($idade <= 59) {
            return "Adulto";
        } else {
            return "Idoso";
        }
    }//condicionais 9

    public function verificaTriangulo($l1, $l2, $l3) {
        if ($l1 <= 0 || $l2 <= 0 || $l3 <= 0) {
            return "Os lados devem ser maiores que zero.";
        }

        if (($l1 + $l2 > $l3) && ($l1 + $l3 > $l2) && ($l2 + $l3 > $l1)) {
            if ($l1 == $l2 && $l2 == $l3) {
                return "Triângulo Equilátero (todos os lados iguais)";
            } elseif ($l1 == $l2 || $l2 == $l3 || $l1 == $l3) {
                return "Triângulo Isósceles (dois lados iguais)";
            } else {
                return "Triângulo Escaleno (todos os lados diferentes)";
            }
        } else {
            return "Os valores informados não formam um triângulo válido.";
        }
    }//condicionais 10

    public function mostraDiaSemana($dia) {
        switch ($dia) {
            case 1:
                return "Domingo";
            case 2:
                return "Segunda-feira";
            case 3:
                return "Terça-feira";
            case 4:
                return "Quarta-feira";
            case 5:
                return "Quinta-feira";
            case 6:
                return "Sexta-feira";
            case 7:
                return "Sábado";
            default:
                return "Número inválido! Digite um valor entre 1 e 7.";
        }
    }//condicionais 11

    public function converteConceito($nota) {
        if ($nota < 0 || $nota > 10) {
            return "Nota inválida! Digite um valor entre 0 e 10.";
        }

        if ($nota >= 9.0) {
            return "Nota $nota - Conceito: **A**";
        } elseif ($nota >= 7.5) {
            return "Nota $nota - Conceito: **B**";
        } elseif ($nota >= 6.0) {
            return "Nota $nota - Conceito: **C**";
        } elseif ($nota >= 5.0) {
            return "Nota $nota - Conceito: **D**";
        } else {
            return "Nota $nota - Conceito: **F**";
        }
    }//condicionais 12

    public function classificaTemperatura($temp) {
        if ($temp < 18) {
            return "Temperatura de {$temp}°C: **Frio**";
        } elseif ($temp <= 26) {
            return "Temperatura de {$temp}°C: **Agradável**";
        } else {
            return "Temperatura de {$temp}°C: **Quente**";
        }
    }//condicionais 13

    public function classificaExperiencia($anos) {
    if ($anos < 0) {
        return "Tempo de experiência inválido.";
    }

    if ($anos < 3) {
            return "Nível: **Júnior**";
        } elseif ($anos < 6) {
            return "Nível: **Pleno**";
        } else {
            return "Nível: **Sênior**";
        }
    }//condicionais 14

    public function classificaPacote($peso) {
        if ($peso < 0) {
            return "Peso inválido.";
        }

        if ($peso <= 5) {
            return "Pacote de {$peso}kg - Classificação: **Leve**";
        } elseif ($peso <= 20) {
            return "Pacote de {$peso}kg - Classificação: **Médio**";
        } else {
            return "Pacote de {$peso}kg - Classificação: **Pesado**";
        }
    }//condicionais 15

    public function verificaEntrada($idade) {
        if ($idade < 0) {
            return "Idade inválida.";
        }

        if ($idade >= 16) {
            return "Idade: $idade anos - **Entrada permitida!**";
        } else {
            return "Idade: $idade anos - **Entrada negada (mínimo de 16 anos).**";
        }
    }//condicionais 16

    public function verificaSaldo($saldo) {
        $saldoFormatado = number_format($saldo, 2, ',', '.');

        if ($saldo > 0) {
            return "Saldo de R$ $saldoFormatado: **Positivo**";
        } elseif ($saldo < 0) {
            return "Saldo de R$ $saldoFormatado: **Negativo**";
        } else {
            return "Saldo de R$ $saldoFormatado: **Zerado**";
        }
    }//condicionais 17


    public function contagemCrescente($n) {
        if ($n < 1) return "Informe um número inteiro positivo.";
        $lista = [];
        for ($i = 1; $i <= $n; $i++) {
            $lista[] = $i;
        }
        return implode(", ", $lista);
    }//for 01

    public function contagemRegressiva($n) {
        if ($n < 0) return "Informe um número inteiro positivo.";
        $lista = [];
        for ($i = $n; $i >= 0; $i--) {
            $lista[] = $i;
        }
        return implode(", ", $lista);
    }//for 02

    public function somaAteN($n) {
        if ($n < 1) return "Informe um número inteiro positivo.";
        $soma = 0;
        for ($i = 1; $i <= $n; $i++) {
            $soma += $i;
        }
        return "Soma de 1 até $n: $soma";
    }//for 03

    public function multiplosAte100($num) {
        if ($num == 0) return "Zero não possui múltiplos finitos.";
        $multiplos = [];
        for ($i = 1; $i <= 100; $i++) {
            if ($i % $num == 0) {
                $multiplos[] = $i;
            }
        }
        return empty($multiplos) ? "Nenhum múltiplo entre 1 e 100." : implode(", ", $multiplos);
    }//for 04

    public function contarPares(array $numeros) {
        $pares = 0;
        $total = count($numeros);
        for ($i = 0; $i < $total; $i++) {
            if ((int)$numeros[$i] % 2 == 0) {
                $pares++;
            }
        }
        return "Total de números pares: $pares";
    }//for 05

    public function tabuada($num) {
        $linhas = [];
        for ($i = 1; $i <= 10; $i++) {
            $res = $num * $i;
            $linhas[] = "$num x $i = $res";
        }
        return implode("<br>", $linhas);
    }//for 06

    public function mediaOitoNotas(array $notas) {
        $soma = 0;
        $qtd = count($notas);
        for ($i = 0; $i < $qtd; $i++) {
            $soma += (float)$notas[$i];
        }
        $media = $qtd > 0 ? $soma / $qtd : 0;
        $situacao = $media >= 7 ? "Aprovado" : "Reprovado";
        return "Média: " . number_format($media, 2, ',', '.') . " - $situacao";
    }//for 07

    public function analiseTemperaturas(array $temps) {
        $soma = 0;
        $acima30 = 0;
        $qtd = count($temps);
        for ($i = 0; $i < $qtd; $i++) {
            $t = (float)$temps[$i];
            $soma += $t;
            if ($t > 30) {
                $acima30++;
            }
        }
        $media = $qtd > 0 ? $soma / $qtd : 0;
        return "Média: " . number_format($media, 1, ',', '.') . "°C | Dias acima de 30°C: $acima30";
    }//for 08

    public function somaImparesAteN($n) {
        $soma = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 != 0) {
                $soma += $i;
            }
        }
        return "Soma dos ímpares de 1 até $n: $soma";
    }//for 09

    public function fatorial($n) {
        if ($n < 0) return "Informe um número inteiro não negativo.";
        $fat = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fat *= $i;
        }
        return "$n! = $fat";
    }//for 10

    public function somaQuadrados($n) {
        if ($n < 1) return "Informe um número inteiro positivo.";
        $soma = 0;
        for ($i = 1; $i <= $n; $i++) {
            $soma += ($i * $i);
        }
        return "Soma dos quadrados de 1 até $n: $soma";
    }//for 11

    public function divisiveisPorTres(array $numeros) {
        $divisiveis = 0;
        $naoDivisiveis = 0;
        $qtd = count($numeros);
        for ($i = 0; $i < $qtd; $i++) {
            if ((int)$numeros[$i] % 3 == 0) {
                $divisiveis++;
            } else {
                $naoDivisiveis++;
            }
        }
        return "Divisíveis por 3: $divisiveis | Não divisíveis por 3: $naoDivisiveis";
    }//for 12

    // --- WHILE (13 a 22) ---

    public function validarSenha($senhaDigitada, $senhaCorreta = "1234") {
        $tentativas = 0;
        $acertou = false;
        // Em formulário web, avalia a tentativa atual mantendo o loop lógico
        while (!$acertou) {
            if ($senhaDigitada === $senhaCorreta) {
                $acertou = true;
                return "Acesso liberado! Senha correta.";
            } else {
                $tentativas++;
                return "Senha incorreta. Tente novamente.";
            }
        }
    }//while 13

    public function acumularValorWhile($novoValor, &$somaAtual, $limite = 200) {
    $valor = (int)$novoValor;

    while ($somaAtual < $limite) {
        $somaAtual += $valor;
        break;
    }

    if ($somaAtual >= $limite) {
        return "Limite atingido/ultrapassado! Soma atual: $somaAtual (meta: $limite).";
    }

    return "Soma acumulada: $somaAtual (ainda abaixo de $limite).";
} // while 14

    public function validarIdade($idade) {
        while ($idade < 0 || $idade > 120) {
            return "Idade inválida ($idade). Digite um valor entre 0 e 120.";
        }
        return "Idade válida informada: $idade anos.";
    }//while 15

    public function contarPositivosAteNegativo(array $numeros) {
        $positivos = 0;
        $i = 0;
        $total = count($numeros);
        while ($i < $total && (int)$numeros[$i] >= 0) {
            if ((int)$numeros[$i] > 0) {
                $positivos++;
            }
            $i++;
        }
        return "Quantidade de números positivos digitados: $positivos";
    }//while 16

    public function divisaoSucessiva($num) {
        if ($num < 1) return "Informe um número inteiro positivo.";
        $passos = [];
        $atual = (int)$num;
        while ($atual >= 1) {
            $atual = intdiv($atual, 2);
            $passos[] = $atual;
        }
        return "Sequência (parte inteira): " . implode(" -> ", $passos);
    }//while 17

    public function mesesInvestimento($capitalInicial = 1000, $meta = 2000, $taxaMensal = 0.02) {
        $saldo = $capitalInicial;
        $meses = 0;
        while ($saldo <= $meta) {
            $saldo += $saldo * $taxaMensal;
            $meses++;
        }
        return "Levará $meses meses para ultrapassar R$ " . number_format($meta, 2, ',', '.') .
               " (Saldo final: R$ " . number_format($saldo, 2, ',', '.') . ")";
    }//while 18

    public function buscarNumero50(array $numeros) {
        $contador = 0;
        $i = 0;
        $total = count($numeros);
        $encontrou = false;
        while ($i < $total && !$encontrou) {
            $contador++;
            if ((int)$numeros[$i] == 50) {
                $encontrou = true;
            }
            $i++;
        }
        return $encontrou
            ? "Número 50 encontrado após $contador número(s)."
            : "O número 50 ainda não foi informado ($contador número(s) lido(s)).";
    }//while 19

    public function somarDigitos($num) {
        if ($num < 0) $num = abs((int)$num);
        $soma = 0;
        $atual = (int)$num;
        while ($atual > 0) {
            $soma += $atual % 10;
            $atual = intdiv($atual, 10);
        }
        return "Soma dos algarismos de $num: $soma";
    }//while 20

    public function adivinharNumero($palpite, $secreto = 37) {
        while ((int)$palpite !== $secreto) {
            if ((int)$palpite < $secreto) {
                return "O número secreto é **maior** que $palpite.";
            } else {
                return "O número secreto é **menor** que $palpite.";
            }
        }
        return "Parabéns! Você acertou o número secreto ($secreto)!";
    }//while 21

    public function contagemIntervaloDecrescente($inicio, $fim) {
        $lista = [];
        $atual = (int)$inicio;
        $alvo = (int)$fim;
        while ($atual >= $alvo) {
            $lista[] = $atual;
            $atual--;
        }
        return empty($lista) ? "Valor inicial menor que o final." : implode(", ", $lista);
    }//while 22

    // --- DO WHILE (23 a 30) ---

    public function operacaoMenu($opcao, $n1, $n2) {
        $executou = false;
        do {
            switch ((int)$opcao) {
                case 1:
                    $resultado = "Resultado da soma: " . ($n1 + $n2);
                    break;
                case 2:
                    $resultado = "Resultado da subtração: " . ($n1 - $n2);
                    break;
                case 3:
                    $resultado = "Resultado da multiplicação: " . ($n1 * $n2);
                    break;
                case 4:
                    $resultado = $n2 != 0 ? "Resultado da divisão: " . ($n1 / $n2) : "Erro: divisão por zero.";
                    break;
                case 0:
                    $resultado = "Programa encerrado (opção 0).";
                    break;
                default:
                    $resultado = "Opção inválida.";
            }
            $executou = true;
        } while (!$executou);
        return $resultado;
    }//do while 23

    public function resumoProdutos(array $precos) {
        $qtd = 0;
        $total = 0;
        $i = 0;
        $n = count($precos);
        if ($n === 0) return "Nenhum produto cadastrado.";
        do {
            $total += (float)$precos[$i];
            $qtd++;
            $i++;
        } while ($i < $n);
        return "Produtos cadastrados: $qtd | Valor total: R$ " . number_format($total, 2, ',', '.');
    }//do while 24

    public function calcularMediaSimples(array $notas) {
        $soma = 0;
        $i = 0;
        $qtd = count($notas);
        if ($qtd === 0) return "Informe ao menos uma nota.";
        do {
            $soma += (float)$notas[$i];
            $i++;
        } while ($i < $qtd);
        $media = $soma / $qtd;
        return "Média do aluno: " . number_format($media, 2, ',', '.');
    }//do while 25

    public function caixaEletronico($acao, $valor, &$saldo = 1500.00) {
        $executou = false;
        do {
            switch ($acao) {
                case "saldo":
                    $msg = "Saldo atual: R$ " . number_format($saldo, 2, ',', '.');
                    break;
                case "saque":
                    if ($valor <= 0) {
                        $msg = "Valor de saque inválido.";
                    } elseif ($valor > $saldo) {
                        $msg = "Saldo insuficiente! Disponível: R$ " . number_format($saldo, 2, ',', '.');
                    } else {
                        $saldo -= $valor;
                        $msg = "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado. Novo saldo: R$ " . number_format($saldo, 2, ',', '.');
                    }
                    break;
                case "deposito":
                    if ($valor <= 0) {
                        $msg = "Valor de depósito inválido.";
                    } else {
                        $saldo += $valor;
                        $msg = "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado. Novo saldo: R$ " . number_format($saldo, 2, ',', '.');
                    }
                    break;
                case "sair":
                    $msg = "Atendimento encerrado.";
                    break;
                default:
                    $msg = "Opção inválida.";
            }
            $executou = true;
        } while (!$executou);
        return $msg;
    }//do while 26

    public function pesquisaSatisfacao(array $avaliacoes) {
        $soma = 0;
        $qtd = 0;
        $i = 0;
        $total = count($avaliacoes);
        if ($total === 0) return "Nenhuma avaliação registrada.";
        do {
            $nota = (int)$avaliacoes[$i];
            if ($nota >= 1 && $nota <= 5) {
                $soma += $nota;
                $qtd++;
            }
            $i++;
        } while ($i < $total);
        $media = $qtd > 0 ? $soma / $qtd : 0;
        return "Total de avaliações: $qtd | Média: " . number_format($media, 2, ',', '.');
    }//do while 27

    public function calcularDescontoCompra($valorCompra) {
        $executou = false;
        do {
            $valor = (float)$valorCompra;
            if ($valor > 200) {
                $final = $valor * 0.90;
                $msg = "Desconto de 10% aplicado! Valor final: R$ " . number_format($final, 2, ',', '.');
            } else {
                $msg = "Sem desconto (compra até R$ 200,00). Valor final: R$ " . number_format($valor, 2, ',', '.');
            }
            $executou = true;
        } while (!$executou);
        return $msg;
    }//do while 28

    public function controleAcesso($usuario, $senha, $userCorreto = "admin", $passCorreta = "1234") {
        $verificado = false;
        do {
            $ok = ($usuario === $userCorreto && $senha === $passCorreta);
            $msg = $ok ? "Dados corretos! Acesso permitido." : "Dados incorretos!";
            $verificado = true;
        } while (!$verificado);
        return $msg;
    }//do while 29

    public function converterRealParaDolar($reais, $cotacao) {
        $convertido = false;
        do {
            if ($cotacao <= 0) {
                $msg = "Cotação deve ser maior que zero.";
            } else {
                $dolares = (float)$reais / (float)$cotacao;
                $msg = "R$ " . number_format((float)$reais, 2, ',', '.') . " = US$ " . number_format($dolares, 2, ',', '.');
            }
            $convertido = true;
        } while (!$convertido);
        return $msg;
    }//do while 30


} //fim do metodos   
?> 
