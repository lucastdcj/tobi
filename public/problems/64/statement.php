<p align="justify">

<p>Telescópios são instrumentos que auxiliam a observação do céu, melhorando e aumentando o aspecto das estrelas,
planetas e outros objetos brilhantes. Existem diversos tipos de telescópios, sendo os tipos mais comuns os de
lentes objetivas (refratores) e os de espelhos (refletores).</p>

<p>A maneira como os telescópios melhoram a nossa percepção dos astros no céu é aumentando a quantidade de
luz captada que chega aos nossos olhos. Toda luz que entra pelos nossos olhos entra por um orifício chamado
pupila. Tal controla a quantidade de luz que entra nos olhos, aumentando o diâmetro quando o ambiente está
escuro (e portanto precisamos obter mais luz para identificar os objetos) e diminuindo quando o ambiente está
claro. Num ambiente muito escuro, a pupila pode atingir um diâmetro de 8 mm.</p>

<p>Cada objeto celeste (estrela, planeta, nebulosa, etc) emite uma quantidade de luz (fótons) que é homogeneamente
distribuída quando chega na Terra. Por exemplo, a estrela <i>A</i> emite luz que pode ser captada a um fluxo de
40.000 fótons por segundo por milímetro quadrado. Isso é, a cada segundo, é possível captar 40.000 fótons
provenientes da estrela <i>A</i> numa área de 1 mm<sup>2</sup>. Ou seja, uma pupila de 10 mm<sup>2</sup> de área captaria 400.000 fótons
provenientes da estrela <i>A</i> por segundo.</p>

<p>Para que nosso cérebro consiga interpretar que existe um objeto ali, porém, ele precisa receber 40.000.000 fótons
por segundo. Assim, podemos utilizar um telescópio com lente (ou espelho) de 100 mm<sup>2</sup> de área, que vai captar
a quantidade necessária de fótons provenientes da estrela <i>A</i> e encaminhá-los até nossa pupila, fazendo assim
com que nosso cérebro perceba a presença da estrela ali.</p>

<h3>Tarefa</h3>

<p>Dada uma lista com estrelas no céu,o fluxo de fótons que cada uma delas emite, e área de abertura de um
telescópio, dizer quantas estrelas serão perceptíveis usando tal telescópio.</p>

<h3>Entrada</h3>

<p><i>A</i> primeira linha da entrada terá um inteiro <i>A</i> (1 &le; <i>A</i> &le; 10.000) representando a área de abertura do telescópio
(em milímetros quadrados) a ser considerado. A segunda linha possui um inteiro <i>N</i> (1 &le; <i>N</i> &le; 10.000) representando
o número de estrelas a serem estudadas. As <i>N</i> linhas seguintes terão, cada uma, um inteiro <i>F</i>
(1 &le; <i>F</i> &le; 20.000) representando o fluxo de fótons que cada uma das <i>N</i> estrelas emitem (em fótons por segundo
por milímetro quadrado).</p>

<h3>Saída</h3>
<p>Imprima um inteiro representando a quantidade de estrelas que serão percebidas ao se utilizar o telescópio em
questão.
</p>

<h3>Informações sobre a pontuação</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 10 pontos, <i>N</i> &le; 10.</li>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 100.</li>
  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
10000
3
4000
3500
5100
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
2
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
5869
3
3975
14234
8569
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
2
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
2967
9
18650
16338
2400
17702
14619
13934
7979
16316
10533
        </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
6
      </pre>
    </td>
  </tr>
</table>

</p>
