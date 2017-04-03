<p align="justify">

<p>A rede de supermercados BemBom, da cidade de Planalto, decidiu reformular o armazenamento

de seus estoques. No sistema atual, cada uma das lojas da rede possui espaço para armazenar um

pequeno estoque, sendo freqüentemente necessário transportar mercadorias de uma loja para

outra. Para racionalizar o transporte e aumentar a capacidade de estoque, a direç&#227;o da rede Bem-Bom decidiu instalar um depósito central. De forma a diminuir os custos com transporte, &#64257;cou

de&#64257;nido que o novo depósito deve ser localizado em um quarteir&#227;o que minimize a soma das distâncias dele até todas as lojas da rede.</p>

<p>Por ser uma cidade planejada, Planalto possui uma característica muito peculiar. Todas as suas

ruas s&#227;o orientadas na direç&#227;o leste-oeste ou norte-sul, e todos os quarteir&#245;es s&#227;o do mesmo tamanho. Veja uma parte do mapa de Planalto na &#64257;gura abaixo. Os quarteir&#245;es em Planalto s&#227;o identi&#64257;cados pelo número de quadras, em cada direç&#227;o, que os separam da localizaç&#227;o da prefeitura

(0,0). Localizaç&#245;es a leste e a norte da prefeitura s&#227;o identi&#64257;cadas por coordenadas positivas, e

localizaç&#245;es a oeste e a sul por coordenadas negativas.</p>



<p><img src="https://www.spoj.pl/content/wanderley:SUPERMER.jpg"/></p>

<p align="center">Parte do mapa de Planalto</p>



<h3>Tarefa</h3>

<p>A sua tarefa é, dadas as coordenadas dos quarteir&#245;es onde est&#227;o localizados todos os supermercados da rede, determinar o quarteir&#227;o onde deve ser instalado o novo depósito. A localizaç&#227;o deste

depósito deve ser tal que a soma das distâncias entre o depósito e as lojas, em número de quarteir&#245;es em ambas as direç&#245;es, seja a menor possível. A distância entre dois quarteir&#245;es é dada pela

distância entre eles na direç&#227;o leste-oeste mais a distância na direç&#227;o norte-sul. Por exemplo, a

distância entre os quarteir&#245;es (2,-1) e (4, 3) é <code>2 + 4 = 6</code>.</p>

<h3>Entrada</h3>

<p>A entrada é composta de vários conjuntos de teste. A primeira linha de cada conjunto de teste contém um número inteiro S que é o número de supermercados da rede. A seguir, s&#227;o dadas S linhas,

cada uma contendo dois números inteiros X e Y, representando as coordenadas do quarteir&#227;o onde

se situa um dos supermercados. X representa a coordenada na direç&#227;o leste-oeste e Y represetna a

coordenada na direç&#227;o norte-sul. O &#64257;nal da entrada é dado por um conjunto de teste com <code>S = 0</code>.</p>

<h3>Saída</h3>

<p>Para cada conjunto de teste, o seu programa deve escrever tr&#234;s linhas na saída. A primeira linha

deve conter um identi&#64257;cador do conjunto de teste, no formato &#8220;Teste n&#8221;, onde n é numerado

seqüencialmente a partir de 1. A segunda linha deve conter as coordenadas X e Y do quarteir&#227;o

onde deve ser instalado o novo depósito, separadas por um espaço em branco. Se mais de um

quarteir&#227;o puder ser escolhido como localizaç&#227;o do depósito, seu programa pode imprimir qualquer um deles. A terceira linha deve ser deixada em branco. O formato do exemplo de saída

abaixo deve ser seguido rigorosamente.</p>

<h3>Exemplo</h3>

<pre>

<b>Entrada:</b>

4

1 2

-3 -3

4 -1

-5 0

5

1 3

7 13

25 13

15 14

25 1

0



<b>Saída:</b>

Teste 1

-2 0



Teste 2

15 13



</pre>



<h3>Restriç&#245;es</h3>

<p><code>0 <= S <= 1000</code> (S = 0 apenas para indicar o &#64257;nal da entrada)<br>

<code>-1000 <= X <= 1000</code> <br>

<code>-1000 <= Y <= 1000</code></p>



</p>
