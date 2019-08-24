<?php
/**
 * Created by PhpStorm.
 * User: Maison
 * Date: 23/08/2019
 * Time: 08:46
 */

//Função saca um valor da conta.
function sacar(array $conta,$valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar, saldo insufuciente!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

//Deposita um valor na conta
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

function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}
