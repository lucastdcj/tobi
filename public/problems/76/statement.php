<p align="justify">

<p>Jorge é um apresentador de televisão que comanda a versão brasileira do grande sucesso Caçadores de Mitos,
onde se estuda um mito para descobrir se é fato ou apenas um boato.</p>
<p>No próximo episódio, Jorge deverá apresentar o mito que diz que "os raios não caem duas vezes no mesmo
lugar", referindo-se aos raios das tempestades de chuva.</p>
<p>Para isso, foi até a cidade de Eletrolândia, que é a cidade com maior ocorrência de raios no mundo. O prefeito
tem tanto orgulho desse título que mandou criar um sistema para registrar os raios. Jorge conseguiu um relatório
com as ocorrências de cada raio que caiu na cidade nos últimos anos.</p>
<p>O mapa de Eletrolândia é um retângulo. Para o sistema de registro a cidade é subdividida em quadrados de um
metro de lado, denominados quadrantes. Assim, se a cidade tem 300 metros de largura e 1000 de comprimento,
ela será subdividida em 300.000 quadrantes. O sistema de registro armazena o quadrante em que o raio caiu.
Cada quadrante é identificado pelas suas coordenadas X e Y, conforme ilustra a figura abaixo, que exemplifica
um mapa de uma cidade com oito metros de comprimento por cinco metros de largura (quarenta quadrantes).</p>
<center> 
  <img src="task_images/2009f1p2_mito.png">
</center>
<p>Como os quadrantes são relativamente pequenos, Jorge decidiu que se dois raios caíram no mesmo quadrante,
pode-se considerar que caíram no mesmo lugar.</p>

<h3>Tarefa</h3>
<p>Sua missão é escrever um programa que receba as coordenadas dos raios que caíram em Eletrolândia nos últimos
anos e determine se o mito estudado é realmente apenas um mito ou pode ser considerado verdade.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado).</p>
<p>A primeira linha da entrada contém um número inteiro <i>N</i> (2 &le; <i>N</i> &le; 500.000) representando o número de
registros de raios no relatório. Cada uma das <i>N</i> linhas seguintes contém 2 números inteiros <i>X</i>, <i>Y</i> (0 &le; <i>X</i>, <i>Y</i> &le;
500), representando o registro de um raio que caiu no quadrante cujas coordenadas são (<i>X</i>, <i>Y</i>).</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, o número 0 se nenhum raio caiu no mesmo lugar, ou o número 1
caso contrário. Note que você deve imprimir o número 1 mesmo que haja mais do que 1 par de raios que caíram
no mesmo lugar.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 1.000.</li>
  <li>Em um conjunto de casos de teste que totaliza 70 pontos, <i>N</i> &le; 100.000.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5
1 1
2 3
3 3
4 2
4 4
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
8
1 1
2 2
2 3
4 4
2 3
6 5
9 11
10 10
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
      </pre>
    </td>
  </tr>
</table>

</p>
