<p align="justify">

<p>Toda criança certamente já brincou de &#8220;vivo ou morto&#8221;. A brincadeira é dirigida por um &#8220;chefe&#8221; (um

adulto), que comanda dois ou mais participantes (crianças). A brincadeira é composta de rodadas.

No início, os participantes s&#227;o organizados pelo chefe em fila única. A cada rodada o chefe grita

&#8220;vivo&#8221; ou &#8220;morto&#8221; e todos os participantes tentam seguir sua ordem, levantando-se ao ouvir a palavra

&#8220;vivo&#8221; ou abaixando-se ao ouvir a palavra &#8220;morto&#8221;. Um participante que n&#227;o segue a ordem do chefe é

eliminado, deixando o seu lugar na fila. Os participantes remanescentes agrupam-se novamente em fila

única, preenchendo as posiç&#245;es dos participantes eliminados, mas mantendo suas posiç&#245;es relativas. O

jogo continua até que uma rodada seja composta por exatamente um participante. Tal participante é

dito o vencedor do jogo.</p>



<p>Por exemplo, considere que a brincadeira inicie com cinco participantes, identificados por números

inteiros de 1 a 5, e que o chefe organize a fila na ordem 3 -> 2 -> 1 -> 4 -> 5. Se na primeira rodada

forem eliminados os participantes 2 e 4, a fila da segunda rodada será formada por 3 -> 1 -> 5; se na

segunda rodada for eliminado o participante 1, a fila da terceira rodada será formada por 3 -> 5. Se

na terceira rodada o participante 3 for eliminado, o vencedor da brincadeira será o participante 5.</p>



<h3>Tarefa</h3>

<p>Sua tarefa é escrever um programa que determine o vencedor de uma partida de &#8220;vivo ou morto&#8221;, a

partir da informaç&#227;o das ordens dadas pelo chefe e das aç&#245;es executadas pelos participantes em cada

rodada.



<h3>Entrada</h3>

<p>A entrada é constituída de vários casos de teste, cada um representando uma partida. A primeira

linha de um caso de teste contém dois números inteiros P e R indicando respectivamente a quantidade

inicial de participantes (2 <= P <= 100) e quantidade de rodadas da partida (1 <= R <= 100). Os

participantes s&#227;o identificados por números de 1 a P. A segunda linha de um caso de teste descreve

a fila organizada pelo chefe, contendo P números inteiros distintos x1, x2, . . . xP , onde x1 representa o

identificador do participante no primeiro lugar na fila, x2 representa o identificador do participante no

segundo lugar na fila, e assim por diante (<code>1 <= xi <= P</code>). Cada uma das R linhas seguintes representa

uma rodada, contendo um número inteiro inteiro N indicando o número de participantes da rodada

(<code>2 <= N <= P</code>), um número inteiro inteiro J representando a ordem dada pelo chefe (<code>0 <= J <= 1</code>)

e N números inteiros Ai representando a aç&#227;o do participante colocado na i-ésima posiç&#227;o na fila

(<code>0 <= Ai <= 1</code>). Ordens e aç&#245;es &#8220;vivo&#8221; s&#227;o representadas pelo valor 1, ordens e aç&#245;es &#8220;morto&#8221; pelo valor

zero. Cada partida tem exatamente um vencedor, determinado somente na última rodada fornecida

no caso de teste correspondente. O final da entrada é indicado por <code>P = R = 0</code>.



<h3>Saída</h3>

<p>Para cada caso de teste seu programa deve produzir tr&#234;s linhas. A primeira identifica o conjunto

de teste no formato &#8220;Teste n&#8221;, onde n é numerado a partir de 1. A segunda linha deve conter

o identificador do vencedor. A terceira linha deve ser deixada em branco. A grafia mostrada no

Exemplo de Saída, abaixo, deve ser seguida rigorosamente.



<h3>Exemplo</h3>



<pre>

<b>Entrada:</b>

2 2

2 1

2 1 1 1

2 1 1 0

5 4

3 2 1 4 5

5 1 1 1 1 1 1

5 0 0 1 0 1 0

3 0 0 1 0

2 1 0 1

0 0



<b>Saída:</b>

Teste 1

2

Teste 2

5

</pre>



<h3>Restriç&#245;es</h3>

<pre>2 <= P <= 100 (P = 0 apenas para indicar o fim da entrada)

<code>1 <= R <= 100</code> (R = 0 apenas para indicar o fim da entrada)

<code>1 <= xi <= P</code>, para <code>1 <= i <= P</code>

<code>2 <= N <= P</code>

<code>0 <= J <= 1</code>

<code>0 <= Ai <= 1</code>, para <code>1 <= i <= N</code>

</pre>


</p>
