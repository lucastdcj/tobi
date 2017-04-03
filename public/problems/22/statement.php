<p align="justify">
<p>
Leonardo é um garoto fascinado por jogos de tabuleiro. Nas férias de janeiro, ele aprendeu um jogo
chamado Campo minado, que é jogado em um tabuleiro com N células dispostas na horizontal. O objetivo
desse jogo é determinar, para cada célula do tabuleiro, o número de minas explosivas nos arredores da mesma
(que são a própria célula e as células imediatamente vizinhas à direita e à esquerda, caso essas existam). Por
exemplo, a figura abaixo ilustra uma possível configuração de um tabuleiro com 5 células:

<center>
<img src="task_images/2011f1pj_campominado.png">
</center></p>
<p>
A primeira célula não possui nenhuma mina explosiva, mas é vizinha de uma célula que possui uma mina
explosiva. Nos arredores da segunda célula temos duas minas, e o mesmo acontece para a terceira e quarta
células; a quinta célula só tem uma mina explosiva em seus arredores. A próxima figura ilustra a resposta para
esse caso.

<center>
<img src="task_images/2011f1pj_campominado1.png">
</center></p>
<p>
Leonardo sabe que você participa da OBI e resolveu lhe pedir para escrever um programa de computador que,
dado um tabuleiro, imprima o número de minas na vizinhança de cada posição. Assim, ele poderá conferir as
centenas de tabuleiros que resolveu durante as férias.</p>


<h3>Entrada</h3>
<p>
A primeira linha da entrada contém um inteiro N indicando o número de células no tabuleiro. O tabuleiro é
dado nas próximas N linhas. A i-ésima linha seguinte contém 0 se não existe mina na i-ésima célula do tabuleiro
e 1 se existe uma mina na i-ésima célula do tabuleiro.</p>

<h3>Saída</h3>
<p>
A saída é composta por N linhas. A i-ésima linha da saída contém o número de minas explosivas nos arredores
da i-ésima célula do tabuleiro.</p>

<h3>Restrições</h3>
<ul>
<li> 1 &le; N &le; 50</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
5
0
1
1
0
1
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
1
2
2
2
1
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
5
0
1
1
1
0
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
1
2
3
2
1
</pre>
</td></tr></table>


</p>
