<p align="justify">

<p>As aulas de educação física, em muitas escolas, acontecem da seguinte maneira: O professor entrega uma bola
ao alunos (geralmente de futebol) e estes se dividem em times, onde jogam partidas alternadamente.</p>
<p>A maneira como os times são escolhidos também é semelhante em todas as escolas: decide-se quantos times
serão formados, e uma pessoa para montar cada um dos times. Cada pessoa vai escolher, alternadamente, um
dos alunos restantes para fazer parte de sua equipe. Como todos querem ter uma boa equipe, a pessoa que
vai escolher o próximo membro do time escolhe aquele, dentre os ainda disponíveis, que possui o melhor nível
de habilidade. Assim, os times acabam ficando relativamente equilibrados na soma do nível de habilidade dos
jogadores.</p>

<h3>Tarefa</h3>
<p>Dada uma lista de alunos que serão escolhidos e seus respectivos níveis de habilidade para os times e a quantidade
de times que serão formados, mostre como ficarão os times ao final do processo de montagem dos mesmos.</p>
<h3>Entrada</h3>
<p>A primeira linha da entrada contém dois inteiros <i>N</i> (2 &le; <i>N</i> &le; 10.000) e <i>T</i> (2 &le; <i>T</i> &le; 1000), representando
respectivamente a quantidade de alunos e o número de times a serem formados, sendo <i>T</i> &le; <i>N</i>. As <i>N</i> linhas
seguintes descrevem, cada uma, um aluno disponível para escolha de times. Cada uma dessas linhas possui o
nome do aluno (composto apenas por letras minúsculas) e um inteiro <i>H</i> (0 &le; <i>H</i> &le; 1.000.000) descrevendo seu
nível de habilidade).</p>
<p>Não existem dois alunos com o mesmo nível de habilidade, e todos eles possuem nomes diferentes. É possível
que alguns times acabem ficando com menos jogadores do que os outros.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir a lista de times que será formada ao final do processo de seleção. Para cada time,
você deverá mostrar o termo "Time N", onde <i>N</i> é o número do time (1 para o primeiro, 2 para o segundo, e
assim por diante) seguido de <i>K</i> linhas, onde <i>K</i> é a quantidade de jogadores do time, mostrando o nome de cada
um dos jogadores do time, em ordem alfabética. Imprima uma linha em branco após cada descrição de time
(inclusive do último).</p>
<p>Os times serão escolhidos pelo computador, então não é necessário considerar o aluno que irá fazer a escolha
dos times.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 40 pontos, 2 &le; <i>N</i> &le; 10, 2 &le; <i>T</i> &le; 5.</li>
</ul> 

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
14 3
felipe 4
alvaro 8
thiago 1
rodrigo 3
robson 2
fabio 9
ricardo 11
rodolfo 0
andre 14
arthur 12
ronaldo 55
rogerio 30
lucas 7
rafael 17     
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
Time 1
andre
fabio
felipe
ronaldo
thiago

Time 2
alvaro
arthur
rodolfo
rodrigo
rogerio

Time 3
lucas
rafael
ricardo
robson      
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
4 3
john 3
richard 0
greg 100
rupert 20
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
Time 1
greg
richard

Time 2
rupert

Time 3
john
      </pre>
    </td>
  </tr>
</table>

</p>
