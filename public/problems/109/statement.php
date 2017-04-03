<p align="justify">

<p>A vovó tem um televisor muito antigo, que ultimamente está exibindo

um defeito incômodo: a imagem aparece 'deslocada&#8217; (para cima ou para

baixo, para o lado direito ou para o lado esquerdo). Quando a imagem

está deslocada para cima, a parte da imagem que deixa de ser vista na

parte superior reaparece na parte de baixo da tela. Da mesma forma,

quando a imagem está deslocada a direita, a parte da imagem que deixa

de ser vista &#224; direita reaparece na tela do lado esquerdo.</p>



<p><img src="https://www.spoj.pl/content/wanderley:tv.jpg"/>



<p>A imagem do televisor pode ser vista como uma matriz de pontos

organizados em linhas e colunas.  Para consertar o televisor da vovó,

voc&#234; pode ajustar a imagem introduzindo uma série de 'comandos de

correç&#227;o&#8217; em um painel de ajuste. Cada comando de correç&#227;o desloca a

imagem de um certo número de linhas (para cima ou para baixo) e um

certo número de colunas (para a direita ou para a esquerda).</p>



<h3>Tarefa</h3>



<p>Dada uma matriz que representa uma imagem defeituosa e uma série de

comandos de correç&#227;o, seu programa deve calcular a matriz que

representa a imagem resultante após todos os comandos terem sido

aplicados sequencialmente.</p>



<h3>Entrada</h3>



<p>A entrada possui vários conjuntos de teste. Cada conjunto de teste

inicia com a descriç&#227;o da matriz que representa a imagem do

televisor. A primeira linha contém dois inteiros M e N representando o

número de linhas e o número de colunas da matriz (<code>1 <= M <= 1000</code> e <code>1

<= N <= 1000</code>). As M linhas seguintes da entrada contém cada uma N

inteiros, descrevendo o valor de cada ponto da imagem. Após a

descriç&#227;o da imagem, segue-se a descriç&#227;o dos comandos de

correç&#227;o. Cada comando de correç&#227;o é descrito em uma linha contendo

dois inteiros X e Y. O valor de X representa o deslocamento na direç&#227;o

horizontal (valor positivo representa deslocamento para a direita,

valor negativo para a esquerda), e o valor de Y representa o

deslocamento da direç&#227;o vertical (valor positivo para cima, valor

negativo para baixo). O final da lista de comandos é indicado por <code>X =

Y = 0</code>, e o final da entrada é indicado por <code>M = N = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

3 3

1 2 3

4 5 6

7 8 9

1 0

1 -1

0 0

3 4

6 7 8 5

10 11 12 9

2 3 4 1

-3 2

0 0

0 0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste, o seu programa deve produzir uma

imagem na saída. A primeira linha da saída deve conter um

identificador do conjunto de teste, no formato "Teste n", onde n

é numerado seqüencialmente a partir de 1. A seguir deve aparecer a

matriz que representa a imagem resultante, no mesmo formato da imagem

de entrada. Ou seja, as N linhas seguintes devem conter cada uma M

inteiros que representam os pixels da imagem. Após a imagem deixe uma

linha em branco. A grafia mostrada no Exemplo de Saída, abaixo, deve

ser seguida rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

8 9 7

2 3 1

5 6 4



Teste 2

1 2 3 4

5 6 7 8

9 10 11 12

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restric&#245;es</h3>



<p><code>0 <= N <= 1000</code> (N = 0 apenas para indicar o final da entrada)<br/>

<code>0 <= M <= 1000</code> (M = 0 apenas para indicar o final da entrada)<br/>

<code>0 <= X <= 1000</code><br/>

<code>0 <= Y <= 1000</code><br/>

<code>0 <= número de comandos de correç&#227;o em cada conjunto de teste <= 1000</code></p>


</p>
