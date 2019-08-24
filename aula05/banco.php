<?php

// Mostra um erro caso o arquivo esteja com algum problema.
require_once "../aula05/funcoes.php";

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

titularComLetrasMaiusculas($contasCorrentes['123456']);


//Adicionando uma conta
$contasCorrentes[123459] = [
    'titular' => 'Claúdia',
    'saldo' => 2000
];

//Imprimindo com o foreach
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem ("$cpf  {$conta['titular']}  {$conta['saldo']}");
}

unset($contasCorrentes[123459]);

// Depositando 500 da conta do vinicius sem usar a função.
$contasCorrentes[123456]['saldo'] -= 500;

// Sacando 250 reais da conta do vinicius usando a função
$contasCorrentes[123456] = sacar($contasCorrentes[123456],250);

// Depositando 125 reais da conta do vinicius
$contasCorrentes[123456] = depositar($contasCorrentes[123456],125);

//Pular uma linha para ajudar na legibilidade
echo PHP_EOL;

//Mostrar as contas após movimentações
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
