<?php
//Declarando um array associativo de conta com o indice titular e saldo.
$conta1 = [
    'titular'=> 'Vinicius',
    'saldo'=>1000
];
//Exibindo o array conta1 atraves do indice titular e saldo e pulando linha
echo $conta1['titular'].$conta1['saldo'].PHP_EOL;

//Declarando um array associativo de conta com o indice titular e saldo.
$conta2 = [
    'titular'=> 'Maria',
    'saldo'=>10000
];
//Exibindo o array conta1 atraves do indice titular e saldo e pulando linha
echo $conta2['titular'].$conta1['saldo'].PHP_EOL;

//Declarando um array associativo de conta com o indice titular e saldo.
$conta3 = [
    'titular'=> 'Alberto',
    'saldo'=>300
];
//Exibindo o array conta1 atraves do indice titular e saldo e pulando linha
echo $conta3['titular'].$conta1['saldo'].PHP_EOL;

//Declarando um array associativo de contas sem indice definido nesse caso o PHP atribuira indices numericos.
$contasCorrentes = [$conta1, $conta2, $conta3];

//Percorrendo e exibindo cada posição do array de arrays contasCorrentes
for ($i = 0; $i < count($contasCorrentes); $i++) {
    //Exibindo o titular e o saldo de cada indice do array
    echo $contasCorrentes[$i]['titular'];
    echo $contasCorrentes[$i]['saldo']. PHP_EOL;

}