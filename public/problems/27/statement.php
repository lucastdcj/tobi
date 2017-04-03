<p align="justify">

<p>Uma academia de bal&eacute; ir&aacute; organizar uma Oficina de Bal&eacute; Intensivo (OBI) na Semana de Bal&eacute; Contempor&acirc;neo
(SBC). Nessa academia, existem <i>N</i> bailarinas que praticam regularmente. O dono da academia, por ser experiente,
consegue medir o n&iacute;vel de habilidade de cada uma delas por um n&uacute;mero inteiro; nessa medi&ccedil;&atilde;o, n&uacute;meros
maiores correspondem a dan&ccedil;arinas mais habilidosas, e os n&uacute;meros obtidos s&atilde;o todos distintos. Al&eacute;m disso,
ele possui uma lista das bailarinas em ordem cronol&oacute;gica de ingresso na academia: As bailarinas que aparecem
primeiro na lista est&atilde;o h&aacute; mais tempo na academia, e as que est&atilde;o no final ingressaram mais recentemente.</p>

<p>O dono da academia decidiu escolher duas das bailarinas para ajud&aacute;-lo na realiza&ccedil;&atilde;o do evento: uma ajudar&aacute;
no trabalho bra&ccedil;al, enquanto a outra ir&aacute; exemplificar os passos de bal&eacute;. Por seu perfeccionismo, ele deseja que
a bailarina que exemplificar&aacute; os passos de dan&ccedil;a seja, dentre as duas meninas do par, a mais habilidosa e a que
frequenta a academia h&aacute; mais tempo.</p>

<p>Ele sabe que a Oficina ser&aacute; um sucesso desde que os dois crit&eacute;rios mencionados acima sejam satisfeitos pela
dupla de dan&ccedil;arinas escolhidas. Com isso, ele ficou curioso para saber quantas duplas de dan&ccedil;arinas podem
ajud&aacute;-lo na Oficina. A quantidade de dan&ccedil;arinas, contudo, &eacute; relativamente grande e ele n&atilde;o possui nem tempo
nem paci&ecirc;ncia para fazer tal c&aacute;lculo. Como voc&ecirc;s s&atilde;o amigos, ele pediu a sua ajuda para contar quantas duplas
s&atilde;o v&aacute;lidas. Voc&ecirc; pode ajud&aacute;-lo?</p>

<p>Por exemplo, digamos que a academia possua 5 dan&ccedil;arinas com n&iacute;veis de habilidade 1, 5, 2, 4 e 3, onde a primeira,
que possui n&iacute;vel "1", est&aacute; na academia h&aacute; mais tempo e a &uacute;ltima, que possui n&iacute;vel "3", est&aacute; h&aacute; menos. Temos,
ent&atilde;o, 4 poss&iacute;veis duplas que poderemos usar nesta Oficina, que s&atilde;o (5, 2), (5, 4), (5, 3) e (4, 3). Note que a dupla
(1, 3), por exemplo, n&atilde;o pode ser escolhida pelo dono da academia, pois a mais habilidosa dentre as duas &eacute;
tamb&eacute;m a mais nova da dupla.</p>


<h2>Entrada</h2>

<p>A primeira linha cont&eacute;m um n&uacute;mero <i>N</i>, que representa a quantidade de dan&ccedil;arinas que est&atilde;o registradas na
academia. A segunda linha da entrada cont&eacute;m <i>N</i> inteiros, onde o primeiro inteiro &eacute; o n&iacute;vel da dan&ccedil;arina que
est&aacute; h&aacute; mais tempo na academia, o segundo inteiro &eacute; o n&iacute;vel da pr&oacute;xima dan&ccedil;arina mais antiga na academia
(mas mais nova que a dan&ccedil;arina anterior), e assim sucessivamente.</p>


<h2>Sa&iacute;da</h2>
<p>A sa&iacute;da consistir&aacute; num &uacute;nico n&uacute;mero <i>X</i>, que representa o total de duplas de dan&ccedil;arinas v&aacute;lidas para essa Oficina,
dadas as regras descritas anteriormente.</p>

<h2>Restri&ccedil;&otilde;es</h2>

  <ul>
    <li>1 &le; <i>N</i> &le; 100 000.</li>
    <li>Todas as dan&ccedil;arinas possuir&atilde;o n&iacute;veis distintos, entre 1 e 100 000.</li>
    <li>O total de pares v&aacute;lidos, em todos os casos, ser&aacute; &le; 1 000 000.</li>
  </ul>

<h2>Informa&ccedil;&otilde;es sobre Pontua&ccedil;&atilde;o</h2>
<ul>
  <li>Em um conjunto de casos de teste que totalizam 70 pontos, <i>N</i> &le; 300</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5
1 5 2 4 3
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

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
9
9 8 7 6 5 4 3 1 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
35
      </pre>
    </td>
  </tr>
  
</table>



</p>
