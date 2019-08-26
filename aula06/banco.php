<?php

// Mostra um erro caso o arquivo esteja com algum problema.
require_once "../aula06/funcoes.php";

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



unset($contasCorrentes[123459]);

// Depositando 500 da conta do vinicius sem usar a função.
$contasCorrentes[123456]['saldo'] -= 500;

// Sacando 250 reais da conta do vinicius usando a função
$contasCorrentes[123456] = sacar($contasCorrentes[123456],250);

// Depositando 125 reais da conta do vinicius
$contasCorrentes[123456] = depositar($contasCorrentes[123456],125);

//Pular uma linha para ajudar na legibilidade
echo PHP_EOL;



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Contas correntes</h1>
<dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
    <?php } ?>
</dl>
</body>
</html>
