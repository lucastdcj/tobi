<p align="justify">

<p>Todo ano, os habitantes da Mlog&ocirc;nia, apesar das crises internas, re&uacute;nem-se em torno de um esporte que &eacute; a
paix&atilde;o nacional: as corridas de carros. A Grande Corrida anual &eacute; um enorme evento organizado pela Associa&ccedil;&atilde;o
de Corridas da Mlog&ocirc;nia (ACM), sendo amplamente televisionado e reportado em jornais e revistas de todo o
pa&iacute;s. Os resultados da corrida s&atilde;o tema principal das rodas de conversa por semanas.</p>
<p>Por bastante tempo, os resultados da Grande Corrida eram compilados manualmente. Observadores especializados 
iam &agrave; pista medir o tempo de cada um dos <i>N</i> carros, numerados de 1 a <i>N</i> , em cada uma das <i>M</i> voltas,
anotando ent&atilde;o os resultados em tabelas para posterior an&aacute;lise por parte das equipes e dos jornalistas. Muitos
erros eram introduzidos nesse processo, e a organiza&ccedil;&atilde;o decidiu informatizar todo o sistema.</p>
<p>A ACM percebeu que o esfor&ccedil;o necess&aacute;rio para a constru&ccedil;&atilde;o do sistema seria grande, e optou por contar com a
ajuda de uma equipe de programadores. Percival foi contratado para escrever a parte do software que determina
quais foram os carros vencedores, mas est&aacute; com dificuldades e pede sua ajuda. A sua tarefa, neste problema,
&eacute; determinar os tr&ecirc;s carros melhor colocados, fornecidos os tempos que cada carro levou para completar cada
volta da corrida.</p>


<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m dois inteiros <i>N</i> e <i>M</i> representando o n&uacute;mero de carros e o n&uacute;mero de voltas
da corrida, respectivamente.</p>
<p>Cada uma das <i>N</i> linhas seguintes representa um carro: a primeira linha representa o primeiro carro, a segunda
linha representa o segundo carro, e assim por diante. Cada linha cont&eacute;m <i>M</i> inteiros representando os tempos em
cada volta da corrida: o primeiro inteiro &eacute; o tempo da primeira volta, o segundo inteiro &eacute; o tempo da segunda
volta, e assim por diante.</p>
<p>Garante-se que n&atilde;o houve dois carros que gastaram o mesmo tempo para completar a corrida inteira.</p>

<h3>Sa&iacute;da</h3>
<p>
A sa&iacute;da consiste de tr&ecirc;s linhas, contendo um &uacute;nico inteiro cada. A primeira linha cont&eacute;m o n&uacute;mero do carro que
ganhou a corrida, a segunda cont&eacute;m o n&uacute;mero do segundo colocado e a terceira cont&eacute;m o n&uacute;mero do terceiro
colocado.
</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>3 &le; <i>N</i> &le; 100</li>
  <li>1 &le; <i>M</i> &le; 100</li>
  <li>1 &le; qualquer n&uacute;mero da entrada que represente o tempo de uma volta &le; 10<sup>6</sup></li>
</ul>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 20 pontos, <i>N</i> = 3;</li>
  <li>Em um conjunto de casos de teste que totaliza 20 pontos, <i>M</i> = 1;</li>
</ul>
<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3 1
1
2
3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
2
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
5 2
3 7
2 5
1 1
15 2
2 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3 
5 
2
      </pre>
    </td>
  </tr>
</table>

<p></p>


<p>Neste exemplo, existem 5 carros numa corrida de duas voltas. Os tempos de cada carro em cada
volta foram como na tabela a seguir.</p>
<center>
  <img src="task_images/2011f1p1_corrida.png">
</center>
<p>Sendo assim, o vencedor foi o carro 3 (com um tempo total de 2), seguido pelo carro 5 (com um
tempo total de 4) e pelo carro 2 (com um tempo total de 7).</p>



</p>
