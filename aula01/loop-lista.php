<?php

//Declaração do array
$idadeList = [21, 23, 19, 25, 30, 41, 18];

//Estrutura for para exibir todos os itens do array
//A função count retorna a quantidade de elementos do array que é 7
echo count($idadeList);
echo PHP_EOL;
// A contagem do count começa em 1, diferente da do array que começa com 0, logo enquanto o indice for menor que o count.
// Se o tamanho da lista for alterado eu não preciso alterar minha cndição do for.
for ($i = 0; $i < count($idadeList); $i++){
    //Exibindo cada item do array e pulando uma linha.
    echo $idadeList[$i] . PHP_EOL;
}
