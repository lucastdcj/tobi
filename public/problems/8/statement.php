<p align="justify">

<p>Num sorteio que distribui prêmios, um participante inicialmente sorteia um inteiro <i>N</i> e depois <i>N</i> valores. O
número de pontos do participante é o tamanho da maior sequência de valores consecutivos iguais. Por exemplo,
suponhamos que um participante sorteia <i>N</i> = 11 e, nesta ordem, os valores</p>
<center>
<p>30, 30, 30, 30, 40, 40, 40, 40, 40, 30, 30</p>
</center>
<p>Então, o participante ganha 5 pontos, correspondentes aos 5 valores 40 consecutivos. Note que o participante
sorteou 6 valores iguais a 30, mas nem todos são consecutivos.</p>
<p>Sua tarefa é ajudar a organização do evento, escrevendo um programa que determina o número de pontos de
um participante.</p>

<h3>Entrada</h3>
<p>A primeira linha da entrada contém um inteiro <i>N</i>, o número de valores sorteados. A segunda linha contém <i>N</i>
valores, <i>V</i><sub>1</sub>, <i>V</i><sub>2</sub>, . . . , <i>V</i><sub><i>N</i></sub>, na ordem de sorteio, separados por um espaço em branco.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir apenas uma linha, contendo apenas um inteiro, indicando o número de pontos do
participante.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>N</i> &le; 10<sup>4</sup></li>
  <li>-2<sup>31</sup> &le; <i>V</i><sub>I</sub> &le; 2<sup>31</sup>-1, para <i>I</i> = 1, 2, . . . , <i>N</i></li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
11
30 30 30 40 40 40 40 40 30 30 30
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
14
1 1 1 20 20 20 20 3 3 3 3 3 3 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
7
      </pre>
    </td>
  </tr>
</table>

</p>
