<p align="justify">

<p>A disseminaç&#227;o dos computadores se deve principalmente &#224; capacidade

de eles se comportarem como outras máquinas, vindo a substituir muitas

destas. Esta flexibilidade é possível porque podemos alterar a

funcionalidade de um computador, de modo que ele opere da forma que

desejarmos: essa é a base do que chamamos programaç&#227;o.</p>



<h3>Tarefa</h3>



<p>Sua tarefa é escrever um programa que faça com que o computador

opere como uma calculadora simples. O seu programa deve ler express&#245;es

aritméticas e produzir como saída o valor dessas express&#245;es, como uma

calculadora faria. O programa deve implementar apenas um subconjunto

reduzido das operaç&#245;es disponíveis em uma calculadora: somas e

subtraç&#245;es.</p>



<h3>Entrada</h3>



<p>A entrada é composta de vários conjuntos de testes. A primeira

linha de um conjunto de testes contém um número inteiro 

<code>m (1 &#8804; m &#8804; 100)</code>, indicando o número de operandos da express&#227;o a ser avaliada. A

segunda linha de um conjunto de testes contém a express&#227;o aritmética a

ser avaliada, no seguinte formato:</p>



<p><code>X<sub>1</sub> s<sub>1</sub> X<sub>2</sub> s<sub>2</sub> ... X<sub>m-1</sub> s<sub>m-1</sub> X<sub>m</sub></code></p>



<p>onde</p>



<ul>

<li><code>X<sub>i</sub></code>, <code>1 &#8804; i &#8804; m</code>, é um operando <code>(0 &#8804; X<sub>i</sub> &#8804; 100)</code>;</li>

<li><code>s<sub>j</sub></code>, <code>1 &#8804; j &lt;m</code>, é um operador, representado pelos símbolos '<code>+</code>&#8217; ou '<code>-</code>&#8217;;</li>

<li>n&#227;o há espaços em branco entre operandos e operadores.</li>

</ul>



<p>O final da entrada é indicado pelo valor <code>m = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

3

3+7-22

3

5-10-77

10

1+2+3+4+5+6+7+8+9+10

0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de testes da entrada seu programa deve produzir

tr&#234;s linhas. A primeira linha deve conter um identificador da

express&#227;o, no formato "<code>Teste n</code>", onde n é numerado a partir de

<code>1</code>.  Na segunda linha deve aparecer o resultado encontrado pelo seu

programa. A terceira linha deve ser deixada em branco. A grafia

mostrada no Exemplo de Saída, abaixo, deve ser seguida rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

-12



Teste 2

-82



Teste 3

55

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>



<p>1 &#8804; m &#8804; 100<br/>

0 &#8804; X<sub>i</sub> &#8804; 100 para todo 1 &#8804; i &#8804; m</p>


</p>
