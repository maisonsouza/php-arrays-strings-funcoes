<?php

function sacar ($conta, $valorASacar){
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar, saldo Insufuciente!");
    }else{
         $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem ($mensagem){
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    98225723287 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 887160742220 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 65232589512 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]];

$contasCorrentes[123456789] =  [
    'titular' => 'Claúdia',
    'saldo' => 1000
];


$contasCorrentes[98225723287]['saldo'] -= 500;

//Imprimindo com o foreach
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}