<p align="justify">

<p>Tombólia do Oeste e Tombólia do Leste travaram uma guerra durante 50 anos. O motivo da guerra era o
tamanho do território de cada país. Pelo bem da população dos dois países, os governos resolveram fazer
um tratado para finalizar a guerra. O tratado consiste em fazer um divisão justa, e certamente contínua, do
território. Eles resolveram pedir sua ajuda para calcular o ponto de divisão do território. Depois de tantos
anos de guerra, os países não podem lhe pagar uma viagem para ver previamente o território que será dividido.
Ao invés disso, eles prepararam uma lista a<sub>1</sub>,a<sub>2</sub>,&hellip;,a<sub><i>N</i></sub> de inteiros que indicam o tamanho de cada seção do
território. A seção a<sub>1</sub> é vizinha da seção a<sub>2</sub> que por sua vez é vizinha da seção a<sub>3</sub>; e assim por diante. Os
governos querem uma divisão em uma seção k de tal forma que a<sub>1</sub> + a<sub>2</sub> + &hellip; + a<sub>k</sub> = a<sub>k+1</sub> + a<sub>k+2</sub> + &hellip; + a<sub><i>N</i></sub>.</p>
<p>Sua tarefa é dada uma lista de inteiros positivos a<sub>1</sub>, a<sub>2</sub>,..., a<sub><i>N</i></sub> , determinar a seção k tal que soma dos comprimentos das seções a<sub>1</sub>
até a<sub>k</sub> é igual a soma dos comprimentos das seções a<sub>k+1</sub> até a<sub><i>N</i></sub>.</p>

<h3>Entrada</h3>
<p>A primeira linha da entrada contém um inteiro <i>N</i> indicando o número de seções do território. A segunda linha da entrada contém <i>N</i> inteiros
 a<sub>1</sub>, a<sub>2</sub>;,.., a<sub><i>N</i></sub> separados por um único espaço que indicam os comprimentos das
seções.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma única linha contendo um inteiro que indica a seção do território onde acontecerá
a divisão.</p>

<p><b>Nota: </b><i>é garantido que sempre existe uma divisão que satisfaz as condições dos países.</i></p>


<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 50 pontos, <i>N</i> &le; 1000.</li>
</ul>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>N</i> &le; 10<sup>5</sup>.</li>
  <li>1 &le; a<sub>i</sub> &le; 100, para i = 1, 2, &hellip; ,<i>N</i>.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4
5 3 2 10
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3     
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
9
2 8 2 8 4 4 4 4 4
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


</p>
