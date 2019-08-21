<?php
/**
 * Created by PhpStorm.
 * User: Maison
 * Date: 21/08/2019
 * Time: 11:00
 */

//Declaração do array
$nomes = array("João","Maria","Pedro","Ana");
//Estrutura de repetição
for($indice=0; $indice<count($nomes) ;$indice++){
    //Imprimir cada nome pelo índice e pular uma linha
    echo $nomes[$indice].PHP_EOL;
}