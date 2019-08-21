<?php

//declarando um array de arrays com indice numerico
$contasCorrentes =
    [12345 => ['titular' => 'Vinicius',
                     'saldo' => 1000
    ],23456 => ['titular' => 'Maria',
                        'saldo' => 10000
    ], 345678=> ['titular' => 'Alberto',
                       'saldo' => 300]];


//Adicionando um elemento ao array assocaitivo.
$contasCorrentes[456789] =  [
    'titular' => 'Claúdia',
    'saldo' => 1000
];

//Exibindo com o foreach
foreach ($contasCorrentes as $conta) {
    echo PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
    echo $conta['saldo'] . PHP_EOL;

}

//Imprimindo com o foreach pela chave e pelo valor
foreach ($contasCorrentes as $cpf => $conta) {
    echo PHP_EOL;
    echo $cpf . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
    echo $conta['saldo'] . PHP_EOL;

}

