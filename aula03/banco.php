<?php

function sacar(array $conta,$valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar, saldo insufuciente!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta,$valorADepositar)
{
    if($valorADepositar>0){
        $conta['saldo'] += $valorADepositar;
        return $conta;
    }

}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

// Declarando as contas
$contasCorrentes = [
    123456 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 123457 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 123458 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]];

//Adicionando uma conta
$contasCorrentes[123459] = [
    'titular' => 'Claúdia',
    'saldo' => 2000
];


//Imprimindo com o foreach
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
// Depositando 500 da conta do vinicius sem usar a função.
$contasCorrentes[123456]['saldo'] -= 500;

// Sacando 250 reais da conta do vinicius usando a função
$contasCorrentes[123456] = sacar($contasCorrentes[123456],250);

// Depositando 125 reais da conta do vinicius
$contasCorrentes[123456] = depositar($contasCorrentes[123456],125);

echo PHP_EOL;
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}