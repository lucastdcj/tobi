<p align="justify">

<p align="justify">
<p>O macaco-prego é um animal irrequieto e barulhento, merecedor

também dos adjetivos desordeiro e despudorado. A sua cabeça, encimada

por uma densa pelagem negra ou marrom-escura, semelhante a um gorro,

torna seu aspecto inconfundível. Apesar de ser o macaco mais comum nas

matas do país, uma de suas sub-espécies encontra-se seriamente

ameaçada de extinç&#227;o: o macacoprego- do-peito-amarelo, que se

distingue das demais pela coloraç&#227;o amarelada do peito e da parte

anterior dos braços.



<p>Um grande esforço foi feito pelos primatologistas para aumentar a

populaç&#227;o dos macacos-pregodo- peito-amarelo. Sabe-se que eles se

alimentam de plantas, das quais consomem preferencialmente frutos e

brotos. Alimentam-se também de muitos animais, preferencialmente

lesmas, lagartas e r&#227;s, e preferem as florestas mais densas. Para

determinar o melhor local do país para criar uma nova reserva

ambiental para os macacos-prego-do-peito-amarelo, o governo fez um

levantamento das regi&#245;es no país onde as condiç&#245;es preferidas desses

animais ocorrem: regi&#245;es de floresta densa, regi&#245;es com frutos,

regi&#245;es com muitos brotos, etc. Ajude a salvar os macacos-pregodo-

peito-amarelo.



<h3>Tarefa</h3>

<p>As regi&#245;es propícias para o macaco-prego-do-peito-amarelo foram

determinadas como retângulos cujos lados s&#227;o todos verticais ou

horizontais. Sua tarefa é encontrar o local ideal para a reserva

ambiental, definida como a interseç&#227;o de todas as regi&#245;es dadas.



<p><img src="https://www.spoj.pl/content/wanderley:macaco.jpg"/>



<p>As regi&#245;es foram divididas de tal forma que uma regi&#227;o n&#227;o

tangencia qualquer outra regi&#227;o.  Assim, a interseç&#227;o entre quaisquer

duas regi&#245;es ou é um retângulo ou é vazia.



<h3>Entrada</h3>

<p>Seu programa deve ler vários conjuntos de teste. A primeira linha

de um conjunto de teste contém um inteiro n&#227;o negativo, <code>N</code>, que indica

o número de regi&#245;es (o valor <code>N = 0</code> indica o final da

entrada). Seguem-se <code>N</code> linhas, cada uma contendo quatro números

inteiros <code>X</code>, <code>Y</code>, <code>U</code> e <code>V</code> que descrevem uma regi&#227;o: o par <code>X</code>, <code>Y</code> representa a

coordenada do canto superior esquerdo e o par <code>U</code>, <code>V</code> representa a

coordenada do canto inferior direito de um retângulo.



<h3>Saída</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas na saída. A primeira linha deve conter um identificador do

conjunto de teste, no formato <code>"Teste n"</code>, onde <code>n</code> é numerado a

partir de <code>1</code>. A segunda linha deve conter as coordenadas do retângulo

de interseç&#227;o encontrado pelo seu programa, no mesmo formato utilizado

na entrada. Caso a interseç&#227;o seja vazia, a segunda linha deve conter

a express&#227;o <code>"nenhum"</code>. A terceira linha deve ser deixada em

branco. A grafia mostrada no Exemplo de Saída, abaixo, deve ser

seguida rigorosamente.



<h3>Exemplo</h3>



<pre>

<b>Entrada:</b>

3

0 6 8 1

1 5 6 3

2 4 9 0

3

0 4 4 0

3 1 7 -3

6 4 10 0

0



<b>Saída:</b>

Teste 1

2 4 6 3



Teste 2

nenhum

</pre>



<h3>Restriç&#245;es</h3>

<p><code>0 &#8804; N &#8804; 10000</code> (<code>N = 0</code> apenas para indicar o fim da entrada)<br>

<code>-10000 &#8804; X &#8804; 10000</code><br>

<code>-10000 &#8804; Y &#8804; 10000</code><br>

<code>-10000 &#8804; U &#8804; 10000</code><br>

<code>-10000 &#8804; V &#8804; 10000</code><br>


</p>
