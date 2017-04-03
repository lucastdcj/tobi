<p align="justify">

<p>Uma cadeia de caracteres é chamada de palíndrome se seqü&#234;ncia de

caracteres da esquerda para a direita é igual &#224; seqü&#234;ncia de

caracteres da direita para a esquerda (uma outra definiç&#227;o é que o

primeiro caractere da cadeia deve ser igual ao último caractere, o

segundo caractere seja igual ao penúltimo caractere, o terceiro

caractere seja igual ao antepenúltimo caractere, e assim por

diante). Por exemplo, as cadeias de caracteres 'mim', 'axxa' e

'ananaganana' s&#227;o exemplos de palíndromes.</p>



<p>Se uma cadeia n&#227;o é palíndrome, ela pode ser dividida em cadeias

menores que s&#227;o palíndromes.  Por exemplo, a cadeia 'aaxyx' pode ser

dividida de quatro maneiras distintas, todas elas contendo apenas

cadeias palíndromes: {'aa', 'xyx'}, {'aa', 'x', 'y', 'x'}, {'a', 'a',

'xyx'} e {'a', 'a', 'x', 'y', 'x'}.</p>



<h3>Tarefa</h3>



<p>Escreva um programa que determine qual o menor número de partes em

que uma cadeia deve ser dividida de forma que todas as partes sejam

palíndromes.</p>



<h3>Entrada</h3>



<p>A entrada é constituída de vários conjuntos de teste. A primeira

linha de um conjunto de testes contém um inteiro N que indica o número

de caracteres da cadeia (1 <= N <= 2000). A segunda linha contém a

cadeia de caracteres, composta por letras minúsculas (de 'a' a 'z'),

sem espaços em branco. O final da entrada é indicado por <code>N = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

3

axa

6

xyzyyx

10

bbabcbbaab

0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas na saída. A primeira linha deve conter um identificador do

conjunto de teste, no formato "Teste n", onde n é numerado a partir de

1. A segunda linha deve conter um inteiro indicando o menor número de

partes que a cadeia de entrada deve ser dividida de forma que todas as

partes sejam palíndromes. A terceira linha deve ser deixada em

branco. O formato mostrado no exemplo de saída abaixo deve ser seguido

rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

1



Teste 2

4



Teste 3

4

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>

<p><code>0 <= N <= 2000</code> (N = 0 apenas para indicar o fim da entrada)</p>






</p>
