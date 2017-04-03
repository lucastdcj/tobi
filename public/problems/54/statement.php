<p align="justify">

<p>A invenção do carro tornou muito mais rápido e mais barato realizar viagens de longa distância. Realizar uma
viagem rodoviária tem dois tipos de custos: cada quilômetro percorrido na rodovia tem um custo associado
(não só devido ao consumo de combustível mas também devido ao desgaste das peças do carro, pneus, etc.),
mas também é necessário passar por vários pedágios localizados ao longo da rodovia.</p>
<p>Os pedágios são igualmente espaçados ao logo da rodovia; o começo da estrada não possui um pedágio, mas o
seu final pode estar logo após um pedágio (por exemplo, se a distância entre dois pedágios consecutivos for de
37 km e a estrada tiver 111 km, o motorista deve pagar um pedágio aos 37 km, aos 74 km e aos 111 km, logo
antes de terminar a sua viagem).</p>

<h3>Tarefa</h3>
<p>Dadas as características da rodovia e os custos com gasolina e com pedágios, calcule o custo total da viagem.</p>

<h3>Entrada</h3>
<p>A entrada consiste de duas linhas. A primeira linha da entrada contém dois inteiros <i>L</i> e <i>D</i> (1 &le; <i>L</i>,<i>D</i> &le; 10<sup>4</sup>),
indicando o comprimento da estrada e a distância entre pedágios, respectivamente. A segunda linha contém
dois inteiros <i>K</i> e <i>P</i> (1 &le; <i>K</i>,<i>P</i> &le; 10<sup>4</sup>), indicando o custo por quilômetro percorrido e o valor de cada pedágio.
O primeiro pedágio está localizado no quilômetro <i>D</i> da estrada (ou seja, a distância do início da estrada para
o primeiro pedágio é <i>D</i> quilômetros).</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma única linha contendo um único inteiro, indicando o custo total da viagem.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 40 pontos, <i>L</i>,<i>D</i>,<i>K</i>,<i>P</i> &le; 100.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
111 37
1 10
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
141     
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
100 30
3 14
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
342
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
20 70
9 17
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
180
      </pre>
    </td>
  </tr>
</table>

</p>
