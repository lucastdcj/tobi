<p align="justify">

<p>Clara está organizando as fotos da sua última viagem num álbum de fotos. Como ela tem muitas fotos, para
economizar páginas do álbum ela quer colar duas fotos por página do álbum.</p>
<p>Como as fotos são retangulares, as fotos podem ser coladas giradas (mas sempre com lados paralelos aos da
página do álbum, para preservar o equilíbrio estético do álbum), mas elas devem sempre ficar inteiramente
contidas no interior da página, e não devem se sobrepor.</p>
<p>Em geral, das muitas formas de posicionar as fotos do álbum só algumas (ou nenhuma) satisfazem estas restrições,
então pode ser difícil decidir se é possível colar as duas fotos em uma mesma página do álbum, e por isso
Clara pediu a sua ajuda para escrever um programa que, dadas as dimensões da página e das fotos, decide se é
possível colar as fotos na página.</p>
<p>Por exemplo, cada página pode ser 5×7, e duas fotos são 3×4. Nesse caso, é possível colar as duas fotos:</p>

<center> 
  <img src="http://93.188.167.1/public/problems/20/2012f2p2_album.png" width="170px" height="230px">
</center>

<h3>Entrada</h3>
<p>A primeira linha da entrada contém dois inteiros <i>X</i> e <i>Y</i> , indicando a largura e a altura da página do álbum.
Cada uma das duas linhas seguintes contém dois inteiros <i>L</i> e <i>H</i>, indicando a largura e a altura das fotos.</p>

<h3>Sa&iacute;da</h3>
<p>Imprima uma única linha, contendo um único caractere: '<b>S</b>', se é possível colar as duas fotos na página do
álbum, e '<b>N</b>', caso contrário.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>X</i>, <i>Y</i> &le; 1000</li>
  <li>1 &le; <i>L</i>, <i>H</i> &le; 1000</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
7 5
3 4
3 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
S
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
10 10
6 6
6 6
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
N
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
13 8
4 9
6 5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
N
      </pre>
    </td>
  </tr>
</table>

</p>
