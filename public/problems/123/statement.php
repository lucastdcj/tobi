<p align="justify">

<p>Como pr&#234;mio pela primeira colocaç&#227;o na Olimpíada Brasileira de Informática, Juquinha e sua

família ganharam uma viagem de uma semana &#224; Coréia do Sul. Como o país é deslumbrante, com

tradiç&#245;es, cultura, arquitetura e culinária muito diferentes das do Brasil, o pai de Juquinha, o Sr.

Juca, decidiu alugar um carro para conhecer melhor o país. As estradas s&#227;o muito bem cuidadas;

todas s&#227;o de sentido duplo, e duas cidades podem ser ligadas diretamente por mais de uma

estrada. No entanto, em todas as estradas paga-se um pedágio de valor fixo (há um pedágio em

cada direç&#227;o, entre duas cidades). Como o Sr. Juca n&#227;o tem muito dinheiro para gastar, as viagens

com o carro devem ser muito bem planejadas.



<h3>Tarefa</h3>

<p>Escreva um programa que, conhecidas as cidades e estradas existentes no país, e a cidade onde

Juquinha e sua família est&#227;o, encontre cada cidade (que n&#227;o a cidade onde eles est&#227;o) que possa

ser visitada por eles, dada a restriç&#227;o de que o Sr. Juca deseja pagar no máximo P pedágios (considerando

apenas a viagem de ida).



<h3>Entrada</h3>

<p>A entrada é composta de vários conjuntos de teste. A primeira linha de um conjunto de teste contém

quatro números inteiros C, E, L e P. Os valores C e E indicam respectivamente o número de

cidades e o número de estradas existentes. As cidades s&#227;o identificadas por inteiros de 1 a C. os

valores L e P indicam, respectivamente, a cidade onde a família de Juquinha está no momento e o

número máximo de pedágios que o Sr. Juca está disposto a pagar. As E linhas seguintes cont&#234;m

cada uma a informaç&#227;o de uma estrada, representada por um par de números inteiros positivos X e

Y, indicando que há uma estrada (de sentido duplo) da cidade X para a cidade Y. O final da entrada

é indicado por C = E = L = P = 0.



<h3>Saída</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir tr&#234;s linhas na saída. A primeira

linha deve conter um identificador do conjunto de teste, no formato &#8220;Teste n&#8221;, onde n é numerado

a partir de 1. Na segunda linha devem aparecer os identificadores das cidades que podem ser

alcançadas, em ordem crescente, separados por pelo menos um espaço em branco. A terceira linha

deve ser deixada em branco. A grafia mostrada no Exemplo de Saída, abaixo, deve ser seguida

rigorosamente.



<h3>Exemplo</h3>



<pre>

<b>Entrada:</b>

5 4 2 1

1 2

2 3

3 4

4 5

9 12 1 2

2 1

1 5

2 1

3 2

9 3

3 4

4 8

4 7

7 6

5 6

4 5

3 7

0 0 0 0



<b>Output:</b>

Teste 1

1 3



Teste 2

2 3 4 5 6

</pre>



<h3>Restriç&#245;es</h3>

<p>0 <= C <= 50 (C = 0 apenas para indicar o fim da entrada)<br>

0 <= E <= 2500 (E = 0 apenas para indicar o fim da entrada)<br>

0 <= L <= C (L = 0 apenas para indicar o fim da entrada)<br>

0 <= P <= C (P = 0 apenas para indicar o fim da entrada)<br>

1 <= X <= C<br>

1 <= Y <= C<br>


</p>
