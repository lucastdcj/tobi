<p align="justify">

<p>A Costa do Mosquito é um país pequeno mas paradisíaco. Todos os

habitantes t&#234;m boas moradias, bons empregos, o clima é agradável, e os

governantes s&#227;o justos e incorruptíveis. O sistema de transporte

público da Costa do Mosquito é composto de uma rede de linhas de

trem. O sistema foi projetado de forma peculiar: existe um único

percurso ligando duas quaisquer vilas (esse percurso possivelmente

passa por outras vilas). Por exemplo, na figura abaixo, que mostra um

trecho do mapa da Costa do Mosquito, há apenas um percurso entre as

vilas <code>A</code> e <code>C</code>, passando pelas vilas <code>B</code>, <code>G</code> e <code>D</code>. Uma

tarifa fixa de <code>M$ 1,00</code>

é cobrada por cada viagem entre vilas vizinhas; assim, para uma viagem

de <code>A</code> a <code>C</code> o usuário gasta <code>M$ 4,00</code>.</p>



<p>Devido a um inesperado surto de dengue, o Ministério da Saúde da

Costa do Mosquito resolveu montar um Posto de Vacinaç&#227;o. Para evitar

que habitantes gastem muito dinheiro para se deslocar até a vila onde

ficará o Posto de Vacinaç&#227;o, o Ministério da Saúde decidiu que este

deverá ser instalado em uma vila de forma que o gasto com transporte

até o Posto, para os habitantes que gastarem mais, seja o menor

possível (para o caso da figura abaixo a vila escolhida seria <code>G</code>).</p>



<pre>

              E

              |

              |

  A --- B --- G --- D --- C

              |

              |

              F

<b>Figura: Trecho do mapa da Costa do Mosquito.</b>

</pre>



<h3>Tarefa</h3>



<p>Sua tarefa é escrever um programa que determine uma vila onde deve

ser instalado o Posto de Vacinaç&#227;o. Esta vila deve ser tal que o custo

com transporte, para os habitantes que tiverem maior custo, seja o

menor possível. Note que devido &#224; característica peculiar do sistema

viário, ou haverá uma única vila que satisfaz essa restriç&#227;o, ou

haverá duas vilas que a satisfazem. No caso de existirem duas vilas

apropriadas, qualquer uma delas serve como soluç&#227;o.</p>



<h3>Entrada</h3>



<p>A entrada é composta de vários conjuntos de teste. A primeira linha

de um conjunto de testes contém um número inteiro <code>N</code> que indica a

quantidade de vilas do país. As vilas s&#227;o numeradas de <code>1</code> a <code>N</code>.

As <code>N-1</code>

linhas seguintes cont&#234;m, cada uma, dois inteiros positivos <code>X</code> e

<code>Y</code> que

indicam que a vila <code>X</code> tem um caminho que a liga diretamente com a vila

<code>Y</code>, sem passar por outras vilas. O final da entrada é indicado por

<code>N = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

2

1 2

7

1 2

2 5

7 4

7 2

4 6

3 4

1

0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas na saída. A primeira linha deve conter um identificador do

conjunto de teste, no formato "<code>Teste n</code>", onde n é numerado a partir de

<code>1</code>. A segunda linha deve conter o número da vila na qual deve ser

instalado o Posto de Vacinaç&#227;o. A terceira linha deve ser deixada em

branco. A grafia mostrada no Exemplo de Saída, abaixo, deve ser

seguida rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

1



Teste 2

7



Teste 3

1

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>

<p>0 &#8804; N &#8804; 100 (N = 0 apenas para indicar o final da entrada)</p>



</p>
