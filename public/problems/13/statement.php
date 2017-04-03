<p align="justify">

<p>A legislação em vigor obriga os bancos a iniciarem o atendimento a um cliente em no máximo 20 minutos
após a entrada do cliente na fila única da agência bancária. A fila é única, assim um caixa livre solicita ao
primeiro cliente da fila que venha ao seu guichê para ser atendido. (Vamos ignorar aqui o problema dos clientes
prioritários, idosos, gestantes, portadores de necessidades especiais, etc.) Estamos supondo também que nenhum
caixa atende dois clientes ao mesmo tempo.</p>
<p>Seu programa receberá o número de caixas ativas na agência, o número de clientes e, para cada cliente, duas
informações, a saber, o momento de entrada do cliente na fila, e a duração do atendimento daquele cliente.</p>
<p>Inicialmente todos os caixas estão vazios, já que a agência acabou de abrir.</p>
<p>Seu problema é determinar o número de clientes que esperarão mais de 20 minutos para ter seu atendimento
iniciado.</p>

<h3>Entrada</h3>
<p>A primeira linha da entrada contém dois inteiros separados por um espaço em branco. O primeiro, <i><i>C</i></i>, é o
número de caixas ativas na agência bancária. O segundo, <i><i>N</i></i>, o número de clientes que procurarão atendimento
na agência naquele dia.</p>
<p>As próximas <i><i>N</i></i> linhas terão cada uma informações sobre um cliente, consistindo de dois inteiros, <i><i>T</i></i> e <i><i>D</i></i>, separados
por um espaço em branco. O inteiro <i><i>T</i></i> fornece o momento em que o cliente entra na fila, em minutos, a partir
do instante de abertura da agência. O inteiro <i><i>D</i></i> fornece, em minutos, o tempo necessário para atender o cliente.</p>
<p>As linhas estão ordenadas por entrada dos clientes na fila.</p>

<h3>Sa&iacute;da</h3>
<p>A saída deverá conter apenas uma linha, contendo um único inteiro, o número de clientes cujo atendimento será
iniciado mais do que 20 minutos após sua entrada na fila.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i><i>C</i></i> &le; 10</li>
  <li>1 &le; <i><i>N</i></i> &le; 1000</li>
  <li>0 &le; <i><i>T</i></i> &le; 300</li>
  <li>1 &le; <i><i>D</i></i> &le; 10</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
1 5
0 10
0 10
1 10
2 10
30 10
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

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3 16
0 10
0 10
0 10
3 10
5 10
7 10
11 10
13 10
14 10
15 10
16 10
17 10
18 3
19 10
20 10
23 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2
      </pre>
    </td>
  </tr>
</table>

</p>
