<p align="justify">

<p>Pedro e Paulo gostam muito de jogar batalha naval; apesar de serem grandes amigos, Pedro desconfia que Paulo
não esteja jogando honestamente. Para tirar essa dúvida, Pedro decidiu usar um programa de computador para
verificar o resultado do jogo, mas Pedro não sabe programar e por isso pediu a sua ajuda.</p>

<p>O jogo de batalha naval é jogado em um tabuleiro retangular com <i>N</i> linhas e <i>M</i> colunas. Cada posição deste
tabuleiro é um quadrado que pode conter água ou uma parte de um navio. Dizemos que dois quadrados são
vizinhos se estes possuem um lado em comum. Se duas partes de navio estão em posições vizinhas, então essas
duas partes pertencem ao mesmo navio. A regra do jogo proíbe que os quadrados de duas partes de navios
distintos tenham um canto em comum (em outras palavras, que quadrados de duas partes de navios distintos
compartilhem um vértice).</p>

<p>Cada disparo que um jogador faz deve ser feito em um dos quadrados do tabuleiro do outro jogador. Um jogador
informa ao outro a coluna e a linha do quadrado alvo do disparo. Para que um navio seja destruído, o jogador
deve acertar todas as partes deste navio. O jogador não pode atirar no mesmo lugar mais de uma vez.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dadas a configuração do tabuleiro e uma sequência de disparos feitos por um jogador,
determina o número de navios do outro jogador que foram destruídos.</p>

<h3>Entrada</h3>
<p>A primeira linha da entrada contém números dois inteiros <i>N</i> e <i>M</i> (1 &le; <i>N</i> &le; 100 e <i>M</i> &le; 100) representando
respectivamente o número de linhas e de colunas do tabuleiro. As <i>N</i> seguintes linhas correspondem ao tabuleiro
do jogo. Cada uma dessas linhas contém <i>M</i> caracteres. Cada caractere indica o conteúdo da posição correspondente
no tabuleiro. Se esse caractere for '.', essa posição contém água; se for '#', essa posição contém uma
parte de um navio. A próxima linha contém um número K que é o número de disparos feitos pelo jogador
(1 &le; K &le; <i>N</i> × <i>M</i>). As próximas K linhas indicam os disparos feitos pelo jogador. Cada linha contém dois
inteiros <i>L</i> e <i>C</i>, indicando a linha e a coluna do disparo feito pelo outro jogador (1 &le; <i>L</i> &le; <i>N</i> e 1 &le; <i>C</i> &le; <i>M</i>).</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma única linha contendo um único número inteiro, o número de navios destruídos.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, os navios são todos compostos por exatamente
uma parte (ou seja, um quadrado).</li>
  <li>Em um conjunto de casos de teste que totaliza 50 pontos, cada navio está contido em exatamente uma
linha.</li> 
</ul>


<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 5
..#.#
#....
...#.
#....
...#.
5
1 3
1 4
1 5
2 1
3 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
4
      </pre>
    </td>
  </tr>
</table>

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 5
..###
.....
#####
.....
#.##.
5
5 1
5 2
1 3
1 4
1 5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2
      </pre>
    </td>
  </tr>
</table>

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
7 7
.#....#
###..##
.#....#
....#.#
.#..#.#
.####.#
.......
8
1 1
1 2
2 1
2 2
2 3
3 2
5 2
6 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
      </pre>
    </td>
  </tr>
</table>

</p>
