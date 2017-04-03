<p align="justify">

<p>Demasi é um terrorista e mafioso italiano que tentou escapar vindo para o Brasil. Mas Demasi não contava com
a astúcia de nossa polícia, e acabou sendo preso aqui também.</p>
<p>Por ser mafioso, Demasi conseguiu contratar advogados muito bons, que através de muitos recursos na justiça,
acabaram conseguindo uma liberdade condicional para ele.</p>
<p>Nessa liberdade condicional, Demasi deve permanecer a uma certa distância da delegacia de polícia responsável
por ele. Para monitorá-lo melhor, eles instalaram nele uma coleira eletrônica inquebrável que, minuto a minuto,
envia para uma central as movimentações de Demasi naquele momento.</p>
<p>A informação da coleira é enviada indicando uma direção e uma distância. Por exemplo, em quatro minutos
chegam as quatro linhas de informação abaixo:</p>
<p>
N 30<br>
O 44<br>
S 22<br>
L 10<br>
</p>

<p>Isso significa que no primeiro minuto Demasi se deslocou 30 metros para o norte (letra <i>N</i>), no minuto seguinte
andou 44 metros para o oeste (letra O), no outro minuto andou 22 metros para o sul (letra S) e no quarto
minuto se deslocou 10 metros para o leste (letra L). Para poder dar um castigo ao terrorista, o juiz decidiu que
Demasi só poderia andar nas quatro direções citadas acima. Ou seja, Demasi nunca se movimenta na direção
noroeste, por exemplo. Neste problema, você pode supor que todos os movimentos de Demasi ocorrem sobre
um plano cartesiano.</p>
<p>A polícia precisa estar sempre atenta à movimentação dele, e pede a sua ajuda para verificar se em algum
momento o italiano se desloca a uma distância da delegacia maior do que a permitida. A distância considerada
para esta medida é a distância euclidiana.</p>

<h3>Tarefa</h3>
<p>Sua missão é criar um programa que receba as informações da coleira de Demasi e diga se em algum momento
Demasi esteve a uma distância maior do que a permitida.</p>
<p>Você deve assumir que no instante 0 (zero) Demasi está dentro da delegacia (ou seja, a uma distância zero).</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado).</p>
<p>A primeira linha da entrada contém dois inteiros <i>N</i> e <i>M</i> (2 &le; <i>N</i> &le; 500.000, 1 &le; <i>M</i> &le; 1.000.000) representando
o número de registros enviados pela coleira de Demasi e a distância máxima que ele pode ficar da delegacia,
respectivamente. As <i>N</i> linhas seguintes contêm os registros da coleira, em ordem de envio. Cada linha contém
um caractere <i>C</i> ('N', 'S', 'L' ou 'O', como especificados acima) e um inteiro <i>D</i> (1 &le; <i>D</i> &le; 1.000) representando
a distância percorrida no minuto.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, o valor 1 se em algum momento Demasi se afastou da delegacia
além da distância permitida, ou o valor 0 caso contrário.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 1.000, <i>M</i> &le; 10.000 e <i>D</i> &le; 30.</li>
  <li>Em um conjunto de casos de teste que totaliza 70 pontos, <i>N</i> &le; 200.000 e <i>M</i> &le; 400.000.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 10
N 2
L 3
S 4
O 4
O 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
0
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
5 10
N 6
L 8
S 15
O 5
O 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
1
      </pre>
    </td>
  </tr>
</table>


</p>
