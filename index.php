<?php

$nome_titular = "Paulo Henrique";
$saldo_conta = 1000;
$sair = false;

while ($sair == false) {
    echo "
    **********
    Nome: $nome_titular
    Saldo: R$ $saldo_conta
    **********
    1. Consultar saldo atual
    2. Sacar valor
    3. Depositar valor
    4. Sair
    
    Digite a opcao desejada: ";

    $opcao_digitada = fgets(STDIN);

    if ($opcao_digitada == 1) {
        echo "Seu saldo é: R$ $saldo_conta\n";
    } elseif ($opcao_digitada == 2) {
        echo "Quanto voce desejar sacar: R$ ";
        $valor_saque = fgets(STDIN);

        if ($valor_saque > $saldo_conta) {
            echo "Saldo insuficiente.\n";
        } else {
            $saldo_conta = $saldo_conta - $valor_saque;
            echo "Saque concluido. Seu novo saldo é de R$ $saldo_conta" . PHP_EOL;
        };
    } elseif ($opcao_digitada == 3) {
        echo "Digite o valor de deposito: R$ ";
        $valor_deposito = fgets(STDIN);

        $saldo_conta = $saldo_conta + $valor_deposito;

        echo "Valor depositado com sucesso! Seu novo saldo é de: R$ $saldo_conta" . PHP_EOL;
    } elseif ($opcao_digitada == 4){
        $sair = true;
    }
}
