<p align="justify">

<p>O planeta Bizz fica a 133 upals de distância do planeta Terra (onde "upals" é uma unidade de medida dada
por "um monte de anos-luz"), e parece ser o único planeta com vida for além do nosso. Este planeta é muito
interessante, pois, em cada país, seus habitantes têm uma característica diferente.</p>
<p>Um desses países é a Cegônia, que tem como característica o fato de que todos os seus habitantes são cegos. Em
compensação, todos possuem um "sexto sentido" acentuado, podendo perceber o que está à sua volta mesmo
sem enxergar.</p>
<p>Este ano, o governo da Cegônia fará um censo, e dentre os dados de seus habitantes, quer saber o quanto de
<i>insensibilidade</i> cada pessoa possui. A insensibilidade indica quão ruim é a capacidade das pessoas de perceber
os objetos à sua volta sem precisar enxergar.</p>
<p>Tal teste é feito da seguinte maneira: a pessoa é colocada em uma sala onde encontram-se vários objetos em
posições pré-determinadas. A pessoa deve, então, dizer quais são as coordenadas de cada objeto dentro da sala.</p>
<p>Para cada objeto, calcula-se o quadrado da distância entre a posição adivinhada pela pessoa e a posição real do
objeto; esse valor é chamado de <i>D</i>. O nível de insensibilidade da pessoa é dado pela soma de todos os <i>D</i>.</p>
<p>Por exemplo, suponha que na sala existam 4 objetos, nas coordenadas (1, 1), (3, 4), (5, 7) e (10, 10). Se a pessoa
então disser que os objetos estão, respectivamente, nas posições (1, 2), (5, 4), (5, 7) e (19, 10), o valor de <i>D</i> para
cada objeto será 1, 4, 0 e 81 e portanto o nível de insensibilidade da pessoa é 1 + 4 + 0 + 81 = 86.</p>
<p>Você precisa fazer um programa que, dadas as coordenadas verdadeiras dos objetos e as coordenadas indicadas
por uma pessoa, diga qual é o nível de insensibilidade dessa pessoa.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém um único inteiro <i>N</i> (1 &le; <i>N</i> &le; 1.000), indicando quantos objetos
estão no quarto. As <i>N</i> linhas seguintes contêm cada uma quatro inteiros <i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>, <i>X</i><sub>2</sub>, <i>Y</i><sub>2</sub> (0 &le; <i>X</i><sub>i</sub> &le; 1000). Cada
linha representa um objeto: a posição real do objeto é (<i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>), e a posição onde a pessoa disse estar tal objeto
é (<i>X</i><sub>2</sub>, <i>Y</i><sub>2</sub>).</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo um único inteiro, indicando o nível
de insensibilidade da pessoa estudada.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4
1 1 1 2
3 4 5 4
5 7 5 7
10 10 19 10     
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
86      
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
5
0 0 0 0
1 3 1 3
4 10 11 10
2 2 3 3
0 1 0 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
51
      </pre>
    </td>
  </tr>
</table>

</p>
