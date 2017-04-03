<p align="justify">

<p>Muitas crianças gostam de decidir todas as disputas através do famoso jogo de Par ou Ímpar.  Nesse jogo, um dos participantes escolhe Par e

o outro Ímpar. Após a escolha, os dois jogadores mostram,

simultaneamente, uma certa quantidade de dedos de uma das m&#227;os. Se a

soma dos dedos das m&#227;os dos dois jogadores for par, vence o jogador

que escolheu Par inicialmente, caso contrário vence o que escolheu

Ímpar.</p>



<h3>Tarefa</h3>



<p>Dada uma seqü&#234;ncia de informaç&#245;es sobre partidas de Par ou Ímpar

(nomes dos jogadores e números que os jogadores escolheram), voc&#234; deve

escrever um programa para indicar o vencedor de cada uma das partidas.</p>



<h3>Entrada</h3>



<p>A entrada é composta de vários conjuntos de testes. A primeira linha

de um conjunto de testes contém um inteiro N, que indica o número de

partidas de Par ou Ímpar que aconteceram. As duas linhas seguintes

cont&#234;m cada uma um nome de jogador. Um nome de jogador é uma cadeia de

no mínimo um e no máximo dez letras (maiúsculas e minúsculas), sem

espaços em branco. As N linhas seguintes cont&#234;m cada uma dois inteiros

A e B que representam o número de dedos que cada jogador mostrou em

cada partida (<code>0 <= A <= 5</code> e <code>0 <= B <= 5</code>). Em todas as partidas, o primeiro

jogador sempre escolhe Par. O final da entrada é indicado por <code>N = 0</code>.</p>



<pre>



<b>Exemplo de entrada</b>

3

Pedro

Paulo

2 4

3 5

1 0

2

Claudio

Carlos

1 5

2 3

0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste da entrada, seu programa deve produzir a

saída da seguinte forma. A primeira linha deve conter um identificador

do conjunto de teste, no formato "Teste n", onde n é numerado

seqüencialmente a partir de 1. As próximas N linhas devem indicar o

nome do vencedor de cada partida. A próxima linha deve ser deixada em

branco. A grafia mostrada no Exemplo de 3 Saída, abaixo, deve ser

seguida rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

Pedro

Pedro

Paulo



Teste 2

Claudio

Carlos

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>



<p><code>0 <= N <= 1000</code> (N = 0 apenas para indicar o fim da entrada)<br/>

<code>0 <= A <= 5</code><br/>

<code>0 <= B <= 5</code><br/>

<code>1 <= comprimento do nome de jogador <= 10</code></p>


</p>
