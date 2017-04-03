<p align="justify">

<p style="text-align: justify;">A Sra. Bastos &eacute; uma elaboradora de passatempos matem&aacute;ticos e pediu para que voc&ecirc; criasse um programa que conseguisse jogar de forma e&#64257;ciente a sua mais nova cria&ccedil;&atilde;o.</p>

<p style="text-align: justify;">O jogo consiste em um tabuleiro formado por casas dispostas em N linhas por N colunas. Cada casa cont&eacute;m um inteiro n&atilde;o-negativo. No come&ccedil;o do jogo, uma pe&ccedil;a &eacute; colocada na casa localizada no canto superior esquerdo, ou seja, na posi&ccedil;&atilde;o (1,1). O objetivo do jogo &eacute; mover a pe&ccedil;a at&eacute; a casa localizada no canto inferior direito (posi&ccedil;&atilde;o (N,N)) somente movendo um &uacute;nico quadrado para baixo ou para a direita em cada passo. Al&eacute;m disso, a pe&ccedil;a n&atilde;o pode ser colocada em nenhum quadrado que contenha o n&uacute;mero zero.</p>

<p style="text-align: justify;">O custo do caminho utilizado para percorrer o tabuleiro corresponde ao produto de todos os n&uacute;meros das casas percorridos no caminho. A penalidade &eacute; de&#64257;nida utilizando a representa&ccedil;&atilde;o decimal do custo, sendo representada pelo n&uacute;mero de d&iacute;gitos zeros, contados da direita para a esquerda, antes do primeiro d&iacute;gito diferente de zero. Por exemplo, um custo igual a 501000 tem penalidade 3, e um custo igual a 501 tem penalidade zero.</p>

<p style="text-align: justify;">O objetivo do jogo &eacute; conseguir chegar &agrave; casa (N,N) atrav&eacute;s de um caminho &ldquo;otimizado&rdquo;. Dizemos que o caminho foi otimizado se a penalidade for m&iacute;nima.</p>

<h3>Tarefa</h3>

<p>Escreva um programa que, dado um tabuleiro, determine a penalidade do custo otimizado.</p>

<h3>Entrada</h3>

<p style="text-align: justify;">A entrada cont&eacute;m um &uacute;nico conjunto de testes, que deve ser lido do dispositivo de entrada padr&atilde;o (normalmente o teclado). A primeira linha da entrada cont&eacute;m um inteiro N que indica o n&uacute;mero de linhas e colunas do tabuleiro (1 &le; N &le; 1000). As N linhas seguintes cont&ecirc;m N inteiros I cada (1 &le; I &le; 1000000), que representam o valor da casa do tabuleiro naquela posi&ccedil;&atilde;o. Existe pelo menos uma solu&ccedil;&atilde;o poss&iacute;vel para todos os casos de teste.</p>

<h3>Sa&iacute;da</h3>

<p style="text-align: justify;">Seu programa deve imprimir, na sa&iacute;da padr&atilde;o, uma &uacute;nica linha, contendo a penalidade do custo &ldquo;otimizado&rdquo;.</p>

<h3>Exemplos</h3>

<pre><strong>Entrada:</strong>

3

1 2 3

4 5 6

7 8 9



<strong>Sa&iacute;da:</strong>

0

</pre>

<pre><strong>Entrada:</strong>

3

5 7 6

4 0 1

3 2 5



<strong>Sa&iacute;da:</strong>

1

</pre>

<pre><strong>Entrada:</strong>

4

1 3 0 0

0 8 2 25

6 5 0 3

0 15 7 4



<strong>Sa&iacute;da:</strong>

2

</pre>


</p>
