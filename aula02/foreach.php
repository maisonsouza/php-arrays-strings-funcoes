<?php

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

//Imprimindo com o foreach
foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}