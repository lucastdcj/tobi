<p align="justify">

<p>Um amigo seu está muito empolgado com um novo joguinho que baixou em seu celular. O jogo consiste em
uma espécie de labirinto que pode ser representado por um quadriculado de células quadradas com <i>N</i> linhas e
<i>M</i> colunas. Cada célula do labirinto contém uma plataforma que está a uma determinada altura do chão, que
pode ser representada por um inteiro a que varia de 0 (a mais baixa) a 9 (a mais alta). Você inicia na célula
(1, 1) (canto superior esquerdo) e o objetivo é chegar na saída do labirinto que fica na célula (<i>N</i>, <i>M</i>) (canto
inferior direito).</p>
<p>Para sair do labirinto, você deve fazer movimentos entre células adjacentes. O problema é que seu bonequinho
não consegue pular muito alto, então se a célula destino estiver duas ou mais unidades acima da sua altura
atual, você não consegue movê-lo. Mais especificamente, a cada turno você pode mover para uma das 4 células
adjacentes (cima, baixo, direita, esquerda) <i>caso a altura da célula destino seja menor ou igual à altura da sua
célula atual mais uma unidade</i>. Ou seja, se a altura da sua célula for <i>A</i>, você só pode mover a uma célula
adjacente caso a altura dela seja menor ou igual a <i>A</i> + 1.</p>
<p>Para complicar um pouco mais o jogo, a cada turno, <i>após o jogador realizar sua ação</i>, cada célula aumenta
em uma unidade sua altura, até o valor máximo de 9. Caso a altura de uma determinada célula seja 9, ela passa
a ser 0.</p>
<p>Note que, em um dado turno, o jogador não é obrigado a se mover, ele pode simplesmente esperar as
plataformas subirem ou descerem. Além disso, repare que nem todas as células têm 4 vizinhos, uma vez que
não é permitido ao jogador se mover para fora dos limites do labirinto.</p>
<p>Você, como bom programador que é, resolve escrever um programa que calcule a menor quantidade de turnos
possível para chegar à saída de um dado labirinto.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dado um labirinto, retorne a menor quantidade de turnos necessária para chegar à
saída, de acordo com as restrições dadas.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém dois inteiros <i>N</i> e <i>M</i> (2 &le; <i>N</i>, <i>M</i> &le; 50) separados por um espaço
em branco, que representam, respectivamente, a quantidade de linhas e colunas do labirinto. As <i>N</i> linhas
seguintes contêm, cada uma, <i>M</i> inteiros que representam a altura inicial (no turno 0) da respectiva plataforma.
As alturas estão sempre entre 0 e 9 (inclusive).</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo a menor quantidade de turnos possível
para sair do labirinto.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 3
0 0 0
0 0 0
0 0 0
0 0 0
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
5
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
3 3
1 2 3
4 5 6
7 8 9
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
12
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
3 5
1 3 1 1 1
1 3 1 3 1
1 1 1 3 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
10
      </pre>
    </td>
  </tr>
</table>

</p>
