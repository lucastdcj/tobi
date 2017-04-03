<p align="justify">

<p>O matemático húngaro Paul Erdos (1913-1996), um dos mais brilhantes do século XX, é considerado

o mais prolífico matemático da história. Erdos publicou mais de 1500 artigos, em colaboraç&#227;o

com cerca de outros 450 matemáticos. Em homenagem a este g&#234;nio húngaro, os matemáticos

criaram um número, denominado "número de Erdos". Toda pessoa que escreveu um artigo com

Erdos tem o número 1. Todos que n&#227;o possuem número 1, mas escreveram algum artigo juntamente

com alguém que possui número 1, possuem número 2. E assim por diante. Quando

nenhuma ligaç&#227;o pode ser estabelecida entre Erdos e uma pessoa, diz-se que esta possui número

de Erdos infinito. Por exemplo, o número de Erdos de Albert Einstein é 2. E, talvez surpreendentemente,

o número de Erdos de Bill Gates é 4.</p>

<h3>Tarefa</h3>

<p>Sua tarefa é escrever um programa que, a partir de uma lista de autores de artigos, determine o

número de Erdos dos autores.</p>

<h3>Entrada</h3>

<p>A entrada é constituída por vários conjuntos de teste. A primeira linha de um conjunto de teste

contém um número inteiro A (<code>1 <= A <= 100</code>), que indica o número de artigos. Cada uma das A

linhas seguintes contém a lista de autores de um artigo. Cada autor é identificado pela inicial de

seu nome (em maiúscula), seguida de um ponto e de um espaço em branco (indicando que o nome

está abreviado), seguida de seu último sobrenome (<code>&#8216;P. Erdos&#8217;</code>, por exemplo). O sobrenome de

um autor possui, no máximo, 15 letras, e apenas a letra inicial aparece em maiúscula. Os autores

s&#227;o separados por vírgulas, e a lista de autores de um artigo termina com um ponto (veja os exemplos

abaixo). Um único espaço em branco separa a abreviatura do nome do sobrenome, bem como

o nome de um autor do anterior. Espaços em branco n&#227;o s&#227;o usados em outros locais. Um artigo

possui, no máximo, 10 autores, e o total de autores n&#227;o excede 100. O final da entrada é indicado

por <code>A = 0</code>.</p>

<h3>Saída</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir um conjunto de linhas na

saída. A primeira linha deve conter um identificador do conjunto de teste, no formato &#8220;Teste n&#8221;,

onde n é numerado seqüencialmente a partir de 1. A seguir devem aparecer uma linha para cada

autor do conjunto de testes (exceto o próprio P. Erdos). Cada linha deve conter o nome do autor

seguido pelo caractere <code>&#8216;:&#8217;</code>, um espaço em branco e o seu número de Erdos. Caso o número de

Erdos de um determinado autor seja infinito, escreva <code>&#8216;infinito&#8217;</code>. A saída deve ser ordenada alfabeticamente

pelo sobrenome do autor, e, em caso de mesmo sobrenome, o desempate deve ser

feito pela inicial do primeiro nome. Imprima uma linha em branco ao final de cada conjunto de

teste. A grafia mostrada no Exemplo de Saída, abaixo, deve ser seguida rigorosamente.</p>

<h3>Exemplo</h3>

<pre>

<b>Entrada:</b>

5

P. Erdos, A. Selberg.

P. Erdos, J. Silva, M. Souza.

M. Souza, A. Selberg, A. Oliveira.

J. Ninguem, M. Ninguem.

P. Duarte, A. Oliveira.

2

Z. Silva, P. Erdos.

Z. Souza.

0



<b>Saída</b>

Teste 1

P. Duarte: 3

J. Ninguem: infinito

M. Ninguem: infinito

A. Oliveira: 2

A. Selberg: 1

J. Silva: 1

M. Souza: 1



Teste 2

Z. Silva: 1

Z. Souza: infinito

</pre>

<h3>Restriç&#245;es</h3>

<p><code>0 <= A <= 100</code> (número de artigos de um caso de teste; A = 0 apenas para indicar final da entrada)<br>

<code>1 <= tamanho, em número de letras, do sobrenome de um autor <= 15</code><br>

<code>1 <= número de autores de um artigo <= 10</code><br>

<code>1 <= número total de autores em um conjunto de teste <= 100</code>


</p>
