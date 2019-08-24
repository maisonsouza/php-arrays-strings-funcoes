# Curso de Avançando com PHP: Arrays, Strings, Função e Web
![](https://www.alura.com.br/assets/api/share/curso-php-arrays-strings-funcoes.png)
## [Link do Curso](https://cursos.alura.com.br/course/php-arrays-strings-funcoes)

### Trabalhando com arrays
* $idadeList = array(21, 23, 26, 29) ou $idadeList = [21, 23, 26, 29]	
* Acessar uma posicao do array $idadeList[3] **29**	
* Percorrer um array com for	
* `count`($idadeList) função para contar o número de posições do array.

### Arrays associativos
* São arrays com índices.
* ´indice' => 'valor'
* indíces podem ser númericos, mas geralmente são string
* Para iterar o array associativo precisamos de um for para iterar no índice.
* Com o foreach podemos pegar inclusive as chaves, e não precisamos de um indice.
* $variavel [] adiciona na proxima posição somente para índices númericos.
* Chaves de arrays associativos só podem ser inteiros ou string.


### Criando funções
* Subrotinas para isolar código que será recorrente na rotina do código
* Palavra chave function.
* Subrotinas executam e não devolvem valor
* Funções retornam valor.


### Interpolação e Require
* para acessar um valor de um array associativo dentro de string devemos omitir as aspas da chave, por exemplo " conta[titular] "
* alternativamente podemos usar chaves em volta do array, por exemplo: " {conta['titular']} "
* include não dá erro (apenas avisa) se o arquivo não existe, require dá erro.
* require_once garante que o arquivo será incluído apenas uma vez.
* E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução.
* E_ERROR, PHP dá erro e para a execução do programa.

### Referências e mais listas
* Passagem do parâmetro por valor ou por referência.
* O padrão do PHP é passar o parâmetro por valor, isto é fazer uma cópia do parâmetro.
* Quando usamos a passagem por referência temos acesso aos valores da variável original, pois passamos a referência apenas (não é feito nenhuma cópia).
* Para usar a passagem de referência basta colocar o caracter & na frente da variável.
* $idadeList = [21, 23, 19, 25, 30, 41, 18];
* list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
* Podemos remover um elemento usando a função unset(..).

### Introdução do PHP na Web

