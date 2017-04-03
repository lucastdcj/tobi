<p align="justify">

<p>Tarzan vive na floresta e é o responsável por manter a ordem na região onde vive. Para locomover-se entre as
árvores ele só usa cipós pois esse é um meio de transporte muito mais rápido e seguro do que andar no chão da
selva, além de, é claro, poder soltar seu grito característico enquanto viaja.</p>
<p>Os cipós das árvores têm todos o mesmo alcance. Dessa forma, é possível viajar de cipó de uma árvore para
outra se a distância entre elas é no máximo <i>D</i>, onde <i>D</i> é o alcance dos cipós.</p>
<p>Recentemente uma forte chuva assolou a região e derrubou algumas árvores, restando na floresta apenas <i>N</i>
árvores. Agora Tarzan quer saber se ele consegue viajar de cipó entre todas árvores remanescentes para poder
continuar mantendo a ordem na região.</p>
<p>Para poder manter a ordem ele precisa ser capaz de, partindo de qualquer uma das árvores, poder chegar a
todas as outras árvores remanescentes, possivelmente passando por outras árvores no caminho, sempre utilizando
somente cipós.</p>


<h3>Entrada</h3>
<p>A primeira linha da entrada contém dois inteiros, <i>N</i> e <i>D</i>, indicando respectivamente o número de árvores
remanescentes e o alcance dos cipós. Cada uma das <i>N</i> linhas seguintes contém dois inteiros <i>X</i><sub>i</sub> e <i>Y</i><sub>i</sub> , as
coordenadas da i-ésima árvore. Não existem duas árvores com as mesmas coordenadas.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve escrever uma única linha, contendo um único caractere: `S` se Tarzan consegue viajar de
cipó entre todas as árvores remanescentes, e `N` caso contrário.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 10</li>
  <li>Em um conjunto de casos de teste que totaliza 70 pontos, <i>N</i> &le; 100</li> 
</ul>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>2 &le; <i>N</i> &le; 1000</li>
  <li>1 &le; <i>D</i> &le; 5000</li>
  <li>0 &le; <i>X</i><sub>i</sub>, <i>Y</i><sub>i</sub> &le; 5000</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 5
1 1
6 1
6 6
11 6
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
4 5
1 1
6 6
11 6
13 8
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
