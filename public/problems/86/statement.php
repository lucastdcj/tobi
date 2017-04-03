<p align="justify">

<p>O jogo de xadrez como conhecido hoje foi inventado por volta do século XV, na Europa Medieval. Uma das
suas peças mais interessantes é o <i>cavalo</i>, que se movimenta e ataca outras peças conforme a figura abaixo:</p>

<center> 
  <img src="task_images/2008f2p1_cavalo1.png" width="150" height="150">
</center>

<p>Na figura, o símbolo '&bull;' representa as posições que o cavalo na casa central ataca.</p>
<p>Existem vários quebra-cabeças interessantes envolvendo os movimentos do cavalo; um deles pergunta quantos
cavalos podem ser colocados em um tabuleiro <i>M</i> &times; <i>N</i> de forma que nenhum par de cavalos se ataque:</p>

<center> 
  <img src="task_images/2008f2p1_cavalo2.png" width="320" height="120">
</center>

<center> 
  <p>Soluções do quebra-cabeça para (a) um tabuleiro (a) 5 &times; 3 (b) um tabuleiro 2 &times; 6</p>
</center>
<p>A sua tarefa é escrever um programa que, dados <i>M</i> e <i>N</i> , determina quantos cavalos podem ser colocados em
um tabuleiro <i>M</i> &times; <i>N</i> de forma que nenhum par de cavalos ataque-se simultaneamente.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira (e única) linha da entrada contém dois inteiros, <i>M</i> e <i>N</i>, (1 &le; <i>M</i> &le; 1000, 1 &le; <i>N</i> &le; 1000)
indicando, respectivamente, o número de linhas e o número de colunas do tabuleiro.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo um inteiro indicando o maior número
de cavalos que podem ser colocados no tabuleiro sem que dois deles se ataquem.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, 1 &le; <i>M</i> &le; 6.</li>
  <li>Em um conjunto de casos de teste que totaliza 55 pontos, 1 &le; <i>M</i> &le; 100.</li> 
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Exemplo de entrada</b>
      <pre>
5 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Exemplo de Sa&iacute;da</b>
      <pre>
8 
      </pre>
    </td>
  </tr>
</table>
<p></p>
<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Exemplo de entrada</b>
      <pre>
2 6
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Exemplo de Sa&iacute;da</b>
      <pre>
8
      </pre>
    </td>
  </tr>
</table>
<p></p>
<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Exemplo de entrada</b>
      <pre>
1 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Exemplo de Sa&iacute;da</b>
      <pre>
4
      </pre>
    </td>
  </tr>
</table>


</p>
