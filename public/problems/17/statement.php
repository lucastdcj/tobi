<p align="justify">

<p>Um tabuleiro normal, 8 x 8, foi danificado, e 4 posições ficaram esburacadas. A Figura 1(a) mostra o tabuleiro.
A posição inferior esquerda tem coordenadas (0, 0). Os 4 buracos estão marcados em preto, e têm coordenadas
(1, 3), (2, 3), (2, 5) e (5, 4). Um cavalo de xadrez foi colocado na posição (4, 3), marcada como 0 no tabuleiro.</p>
<center> 
  <img src="../../../task_images/2012f1p2_cavalo.png" width="450" height="200">
</center>
<p>Os 8 movimentos de um cavalo estão numerados de 1 a 8 na Figura 1(b), a partir da posição marcada como 0.
Por exemplo, se o cavalo estiver na posição inicial (4, 3), o movimento 7 leva o cavalo à posição (2, 4), sem cair
no buraco (2, 3), porque o cavalo salta da posição (4, 3) para a posição (2, 4).</p>
<p>Seu problema é simular um passeio do cavalo, dados os movimentos através dos números de 1 a 8 e determinar
quantos movimentos o cavalo faz até ou (i) terminar o passeio ou (ii) cair em um buraco. Por exemplo, na
trajetória dada pelos 5 movimentos 1, 8, 5, 3, 4, o cavalo passa pelas posições (5, 5), (4, 7), (3, 5) e cai no buraco
(5, 4), fazendo portanto apenas 4 movimentos.</p>
<p>Já no passeio dado pelos 3 movimentos 6, 8, 1, o cavalo passa pelas posições (2, 2), (1, 4) e (2, 6) e não cai em
nenhum buraco: portanto, perfaz todos os 3 movimentos do passeio.</p>


<h3>Entrada</h3>
<p>A primeira linha da entrada contém <i>N</i> , o número de movimentos do passeio. A segunda linha contém <i>N</i> inteiros
<i>M</i><sub>1</sub>, <i>M</i><sub>2</sub>,..., <i>M</i><sub><i>N</i></sub>, separados por um espaço em branco, correspondentes aos <i>N</i> movimentos do cavalo no passeio.
Um movimento pode levar o cavalo a cair em um buraco, mas nunca leva o cavalo a sair do tabuleiro.</p>

<h3>Sa&iacute;,da</h3>
<p>Seu programa deve imprimir uma única linha, contendo um único número inteiro, o número de movimentos do
cavalo até terminar o passeio ou o cavalo cair em um buraco.</p>


<h3>Restri&ccedil;&otilde;,es</h3>
<ul>
  <li>1 &le;, <i>N</i> &le;, 100</li>
  <li>1 &le; <i>M</i><sub><i>i</i></sub> &le; 8, para <i>i</i> = 1, 2,..., <i>N</i>.</li> 
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5
1 8 5 3 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;,da</b>
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
3
6 8 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;,da</b>
      <pre>
3
      </pre>
    </td>
  </tr>
</table>


</p>
