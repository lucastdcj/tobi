<p align="justify">

<p>Larissa acaba de entrar para o Orkut, um site na internet que

permite que as pessoas se reúnam em comunidades e grupos de

amigos. Como ela acabou de se registrar, ela ainda n&#227;o possui muitos

amigos na sua lista de contatos. Após fazer uma pesquisa, ela

descobriu que os seus antigos amigos de escola (que adoravam mexer com

computadores) também fazem parte do Orkut. Larissa ent&#227;o decidiu

chamá-los para serem seus amigos virtuais. Porém, eles resolveram

brincar com a Larissa, e cada um deles só vai aceitar o pedido de

Larissa quando ela já for amiga virtual de alguns dos outros amigos do

grupo. Assim, para conseguir ter todos os seus antigos amigos de

escola na sua lista de amigos do Orkut, ela deve cumprir as exig&#234;ncias

de cada um deles.</p>



<h3>Tarefa</h3>



<p>Larissa acha que pode encontrar uma seqü&#234;ncia de nomes dos amigos,

de modo que se ela pedir a cada um deles para ser sua amiga no Orkut,

obedecendo a seqü&#234;ncia, todas as exig&#234;ncias ser&#227;o cumpridas e todos

eles ir&#227;o aceitar o seu pedido. Larissa precisa da sua ajuda para

resolver esse problema de forma rápida. A sua tarefa é escrever um

programa para encontrar uma seqü&#234;ncia de nomes que resolva o problema,

ou dizer que n&#227;o é possível encontrar tal seqü&#234;ncia.</p>



<h3>Entrada</h3>



<p>A entrada é composta de vários conjuntos de teste. A primeira linha

de um conjunto de teste contém um inteiro N que indica o número de

antigos amigos da Larissa (<code>1 <= N <= 30</code>). A linha seguinte irá conter

N nomes de amigos, separados por espaço em branco. Cada nome n&#227;o terá

mais de 15 letras, e ser&#227;o todos distintos. Nas próximas N linhas

ser&#227;o indicadas as exig&#234;ncias que a Larissa deve cumprir. Cada linha

descreve a exig&#234;ncia de um amigo e começará com o nome desse amigo,

seguido de um número M (<code>0 <= M <= N - 1</code>), que indica o número de

pessoas que aquele amigo quer que a Larissa seja amiga antes, e

seguido pelos M nomes de amigos (cada item na linha separado por

espaço em branco). O final da entrada é indicado por <code>N = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

5

Joao Maria Tadeu Jose Ricardo

Joao 2 Maria Ricardo

Maria 1 Tadeu

Jose 1 Joao

Tadeu 0

Ricardo 0

3

Joao Maria Renata

Maria 1 Joao

Joao 1 Renata

Renata 1 Maria

0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste seu programa deve produzir tr&#234;s linhas

na saída. A primeira linha deverá conter um identificador do conjunto

de teste, no formato "Teste n", onde n é numerado seqüencialmente a

partir de 1. A segunda linha deve conter a seqü&#234;ncia de nomes de

amigos (cada nome seguido de um espaço em branco) que resolve o

problema da Larissa, ou a palavra "impossivel", quando n&#227;o houver uma

seqü&#234;ncia possível (note a aus&#234;ncia de acentuaç&#227;o). Se existir mais de

uma seqü&#234;ncia de amigos que resolve o problema, imprima qualquer uma

delas (mas apenas uma). A terceira linha deverá ser deixada em

branco. A grafia mostrada no Exemplo de Saída abaixo deverá ser

seguida rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

Ricardo Tadeu Maria Joao Jose



Teste 2

impossivel

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>



<p><code>0 <= N <= 30</code> (N = 0 apenas para indicar o fim da entrada)<br/>

<code>0 <= M <= N - 1</code><br/>

Cada nome de amigo terá no máximo 15 letras</p>



</p>
