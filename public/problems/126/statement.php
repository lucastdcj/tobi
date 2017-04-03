<p align="justify">

<p>Todos conhecem o jogo de dominós, em que peças com dois valores

devem ser colocadas na mesa em seqü&#234;ncia, de tal forma que os valores

de peças imediatamente vizinhas sejam iguais. O objetivo desta tarefa

é determinar se é possível colocar todas as peças de um conjunto dado

em uma formaç&#227;o válida.</p>



<!-- Conjunto de seis peças (a) e uma formaç&#227;o utilizando todas as seis peças (b) -->



<h3>Tarefa</h3>



<p>É dado um conjuto de peças de dominó. Cada peça tem dois valores

<code>X</code>

e <code>Y</code>, com <code>X</code> e <code>Y</code> variando de <code>0</code> a <code>6</code> (<code>X</code> pode ser

igual a <code>Y</code>). Sua tarefa é

escrever um programa que determine se é possível organizar todas as

peças recebidas em seqü&#234;ncia, obedecendo as regras do jogo de

dominó.</p>



<h3>Entrada</h3>



<p>A entrada é composta de vários conjuntos de teste. A primeira linha

de um conjunto de testes contém um número inteiro <code>N</code> que indica a

quantidade de peças do conjunto. As <code>N</code> linhas seguintes cont&#234;m, cada

uma, a descriç&#227;o de uma peça. Uma peça é descrita por dois inteiros

<code>X</code>

e <code>Y</code> <code>(0 &#8804; X &#8804; 6 e 0 &#8804; Y &#8804; 6)</code> que representam os valores de cada lado da

peça. O final da entrada é indicado por <code>N = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

3

0 1

2 1

2 1

2

1 1

0 0

6

3 0

0 0

1 6

4 1

0 6

2 3

0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste da entrada seu programa deve produzir tr&#234;s linhas na saída. A primeira

linha deve conter um identificador do conjunto de teste, no formato

"<code>Teste n</code>", onde <code>n</code> é numerado

a partir de <code>1</code>. A segunda linha deve conter a express&#227;o "<code>sim</code>" se for possível organizar todas as

peças em uma formaç&#227;o válida ou a express&#227;o "<code>nao</code>" (note a aus&#234;ncia de acento) caso contrário. A

terceira linha deve ser deixada em branco. A grafia mostrada no Exemplo de Saída, abaixo, deve

ser seguida rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

sim



Teste 2

nao



Teste 3

sim

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>

<p>0 &#8804; N &#8804; 100 (N = 0 apenas para indicar o final da entrada)</p>



</p>
