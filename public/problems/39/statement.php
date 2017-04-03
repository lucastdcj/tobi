<p align="justify">

<p>Arnaldo e Bernardo s&atilde;o dois garotos que compartilham um peculiar gosto por curiosidades matem&aacute;ticas. Nos
&uacute;ltimos tempos, sua principal divers&atilde;o tem sido investigar propriedades matem&aacute;gicas de tabuleiros quadrados
preenchidos com inteiros. Um belo dia, Arnaldo desenhou o tabuleiro da seguinte figura.</p>
 
<div align="center">
<img src="task_images/2011f1p2_quadrado1.png" width="150" height="140">
</div>
 
<p>&mdash; Olha s&oacute;, v&aacute;rias somas nesse quadrado s&atilde;o iguais! &mdash; exclamou Bernardo.</p>
<p>&mdash; Como assim? &mdash; devolveu, intrigado, Arnaldo.</p>
<p>&mdash; Observe:</p>

<div align="center">
<img src="task_images/2011f1p2_quadrado2.png" width="450" height="140">
</div>

<p>&mdash; &Eacute; mesmo! (-41) + 40 + 54 d&aacute; 53, 28 + (-29) + 54 tamb&eacute;m! &mdash; exclamou Arnaldo.</p>
<p>&mdash; Eu j&aacute; verifiquei: existem 6 formas de escolhermos 3 c&eacute;lulas deste quadrado de forma que cada linha e coluna
tenha exatamente uma c&eacute;lula escolhida. Em todas elas, a soma d&aacute; 53. Al&eacute;m disso, todos os n&uacute;meros s&atilde;o
distintos nesse quadrado. &mdash; notou Bernardo, exibindo suas habilidades aritm&eacute;ticas.</p>
<p>&mdash; Que bacana! Esse quadrado &eacute; realmente m&aacute;gico! Ou, melhor, esse quadrado &eacute; realmente <i>aritm&eacute;tico!</i> Ser&aacute;
que existem mais quadrados como esse?</p>
<p>Uma <i>escolha legal</i> de c&eacute;lulas &eacute; uma escolha em que toda linha e toda coluna tenha exatamente uma c&eacute;lula
escolhida. Um <i>quadrado aritm&eacute;tico</i> de tamanho <i>N</i> e soma <i>S</i> &eacute; um tabuleiro de inteiros de <i>N</i> linhas e <i>N</i> colunas
em que qualquer <i>escolha legal</i> tem soma S e em que todos os n&uacute;meros s&atilde;o distintos.</p>
<p>Sua tarefa, neste problema, &eacute; gerar um quadrado aritm&eacute;tico de tamanho <i>N</i> e soma <i>S</i>, dados <i>N</i> e <i>S</i>. Como
Arnaldo e Bernardo v&atilde;o querer conferir a sua solu&ccedil;&atilde;o em suas calculadoras, voc&ecirc; n&atilde;o deve gerar um quadrado
em que alguma c&eacute;lula tenha valor absoluto maior do que 10<sup>9</sup>.</p>

<h3>Entrada</h3>
<p>A primeira e &uacute;nica linha da entrada cont&eacute;m dois n&uacute;meros inteiros <i>N</i> e <i>S</i> (1 &le; <i>N</i> &le; 1000 e -1000 &le; <i>S</i> &le; 1000)
representando, respectivamente, o tamanho e a soma do quadrado aritm&eacute;tico pedido.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir <i>N</i> linhas, cada uma com <i>N</i> inteiros entre -10&#8313; e 10&#8313;, representando o quadrado
aritm&eacute;tico pedido. Para uma mesma entrada, podem existir v&aacute;rios quadrados aritm&eacute;ticos v&aacute;lidos; seu programa
deve imprimir qualquer um deles, mas <b> apenas um.</b></p>
<p>&Eacute; garantido que existir&aacute; pelo menos um quadrado aritm&eacute;tico v&aacute;lido para cada entrada testada.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>N</i> &le; 1000</li>
  <li>-1000 &le; <i>S</i> &le; 1000</li>
  <li>-10<sup>9</sup> &le; valor de cada c&eacute;lula &le; 10<sup>9</sup></li>
</ul>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 3;</li>
  <li>Em um conjunto de casos de teste que totaliza 70 pontos, <i>N</i> &le; 100;</li>
</ul>

<h3>Exemplos</h3>

<p>Observe que, neste problema, para uma mesma entrada, podem existir v&aacute;rias sa&iacute;das corretas. As sa&iacute;das abaixo
indicam apenas uma de v&aacute;rias potenciais solu&ccedil;&otilde;es. Contanto que sua sa&iacute;da seja um quadrado aritm&eacute;tico v&aacute;lido
segundo as condi&ccedil;&otilde;es do enunciado, sua solu&ccedil;&atilde;o ser&aacute; considerada correta, mesmo que n&atilde;o seja igual aos exemplos
indicados abaixo.</p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
2 49
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
23 40
9 26
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
3 53
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
-41 -29 2
28 40 71
11 23 54
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
1 -55
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
-55
      </pre>
    </td>
  </tr>
</table>

</p>
