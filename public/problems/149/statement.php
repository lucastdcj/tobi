<p align="justify">

<p>O telemarketing foi patenteado em 1982 pelo empresário Nadji Tehrani e consiste em vender produtos através
do telefone. Uma das formas de venda utilizadas hoje em dia é obter-se uma lista de possíveis compradores para
os produtos vendidos e seus respectivos telefones e utilizar um time de vendedores para ligar para esse conjunto
de pessoas.</p>
<p>Bo Ber Man é um empresário estrangeiro dono da Mar Ato Na, cujos ideogramas em seu idioma significam
"Empresa Nacional de Telemarketing". Sua empresa realiza vendas dos produtos mais variados para diversas
companhias.</p>
<p>Ele possui um time de <i>N</i> vendedores e uma lista de ligações a serem feitas. Para cada ligação sabe-se o
tempo <i>T</i> em minutos que ela vai durar. Os vendedores são identificados por números de 1 a <i>N</i> e fazem as
ligações da seguinte forma:</p>
<ul>
  <li>Inicialmente, todos os vendedores estão inativos.</li>
  <li>Sempre que um vendedor realizar uma ligação, ele ficará ocupado pelos <i>T</i> minutos descritos na lista para
aquela ligação. O tempo entre duas ligações consecutivas as do mesmo vendedor é desprezível.</li>
  <li>Um vendedor não pode fazer mais de uma ligação ao mesmo tempo.</li>
  <li>Um vendedor que esteja inativo deverá fazer a ligação que estiver no topo da lista. Caso mais de um
vendedor esteja inativo no mesmo instante, o vendedor com o menor identificador dentre os vendedores
inativos deverá fazer a ligação que estiver no topo da lista.</li>
  <li>Assim que uma ligação é atribuída a um vendedor, ela é removida da lista.</li>
  <li>Um vendedor fica inativo sempre que termina uma ligação.</li>
</ul>

<p>Por exemplo, suponha que um time de 4 vendedores deve fazer 6 ligações, cujos tempos sejam 5, 2, 3, 3,
4, 9. Como inicialmente nenhum vendedor está ocupado, o primeiro vendedor fará a ligação de 5 minutos, o
segundo vendedor a ligação de 2 minutos e os vendedores de número 3 e 4 farão ligações de 3 minutos. Como o
segundo vendedor terminará a sua ligação antes dos demais, ele fará a quinta ligação, de 4 minutos e, por fim,
o terceiro vendedor (cujo tempo é igual ao do quarto vendedor, mas o número é menor) fará a sexta ligaçao, de
9 minutos.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dados o número de vendedores, o número de ligações e a duração de cada ligação,
determine o número de ligações feitas por cada vendedor.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém dois inteiros, <i>N</i> e <i>L</i> indicando o número de vendedores e o
número de ligações a serem realizadas (1 &le; <i>N</i> &le; 1.000, 1 &le; <i>L</i> &le; 1.000.000). As <i>L</i> linhas seguintes contêm um
inteiro <i>T</i> cada (1 &le; <i>T</i> &le; 30), em que <i>T</i> representa a duração de cada ligação.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, <i>N</i> linhas, uma para cada vendedor, contendo dois inteiros <i>I</i> e
<i>P</i> representando o número do vendedor e o número de ligações realizadas por este vendedor. Os vendedores
devem ser apresentados em ordem crescente de identificador, começando a partir de 1.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 3
2
2
1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1 1
2 1
3 1
4 0
5 0
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
4 6
5
2
3
3
4
9
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1 1
2 2
3 2
4 1
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
3 9
3
5
1
1
1
1
1
1
1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1 3
2 1
3 5
      </pre>
    </td>
  </tr>
</table>

</p>
