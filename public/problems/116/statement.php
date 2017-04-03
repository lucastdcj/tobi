<p align="justify">

<p>O quebra-cabeças Torres de Hanoi é muito antigo e conhecido, sendo constituído de um conjunto

de N discos de tamanhos diferentes e tr&#234;s pinos verticais, nos quais os discos podem ser encaixados.</p>

<p><img src="https://www.spoj.pl/content/wanderley:OBIHANOI.png"/>

<p>Cada pino pode conter uma pilha com qualquer número de discos, desde que cada disco n&#227;o seja

colocado acima de outro disco de menor tamanho. A configuraç&#227;o inicial consiste de todos os discos

no pino 1. O objetivo do quebra-cabeças é mover todos os discos para um dos outros pinos,

sempre obedecendo &#224; restriç&#227;o de n&#227;o colocar um disco sobre outro menor.</p>

<p>Um algoritmo para resolver este problema é o seguinte.</p>

<pre>

<b>procedimento</b> Hanoi(N, Orig, Dest, Temp)

   <b>se</b> N = 1 <b>ent&#227;o</b>

      mover o menor disco do pino Orig para o pino Dest;

   <b>sen&#227;o</b>

      Hanoi(N-1, Orig, Temp, Dest);

      mover o N-ésimo menor disco do pino Orig para o pino Dest;

      Hanoi(N-1, Temp, Dest, Orig);

   <b>fim-se</b>

<b>fim</b>

</pre>

<h3>Tarefa</h3>

<p>Sua tarefa é escrever um programa que determine quantos movimentos de trocar um disco de um

pino para outro ser&#227;o executados pelo algoritmo acima para resolver o quebra-cabeça.</p>

<h3>Entrada</h3>

<p>A entrada possui vários conjuntos de teste. Cada conjunto de teste é composto por uma única

linha, que contém um único número inteiro N (<code>0 <= N <= 30</code>), indicando o número de discos. O final

da entrada é indicado por <code>N = 0</code>.</p>

<h3>Saída</h3>

<p>Para cada conjunto de teste, o seu programa deve escrever tr&#234;s linhas na saída. A primeira linha

deve conter um identificador do conjunto de teste, no formato &#8220;Teste n&#8221;, onde n é numerado

seqüencialmente a partir de 1. A segunda linha deve conter o número de movimentos que s&#227;o executados

pelo algoritmo dado para resolver o problema das Torres de Hanói com N discos. A terceira

linha deve ser deixada em branco. A grafia mostrada no Exemplo de Saída, abaixo, deve ser

seguida rigorosamente.</p>

<h3>Exemplo</h3>

<pre>

<b>Entrada:</b>

1

2

0



<b>Saída</b>

Teste 1

1



Teste 2

3

</pre>

<h3>Restriç&#245;es</h3>

<p><code>0 <= N <= 30</code> (N = 0 apenas para indicar o final da entrada)</p>

</p>
