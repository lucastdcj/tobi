<p align="justify">

<p>Solicitando Boas Contas (SBC) &eacute; uma organiza&ccedil;&atilde;o de inspe&ccedil;&atilde;o de calculadoras. Todos os fabricantes procuram
ter o selo de qualidade da SBC, que faz com que os clientes comprem o produto sem preocupa&ccedil;&atilde;o com contas
erradas.</p>

<p>Voc&ecirc; est&aacute; encarregado de testar m&aacute;quinas que fazem apenas opera&ccedil;&otilde;es de multiplica&ccedil;&atilde;o e divis&atilde;o. Al&eacute;m disso,
o termo a ser digitado em cada opera&ccedil;&atilde;o (que dividir&aacute; ou multiplicar&aacute; o n&uacute;mero atualmente exibido no visor)
s&oacute; pode conter um &uacute;nico d&iacute;gito.</p>
<p>A calculadora exibe o n&uacute;mero 1 quando ligada. Depois disso, o usu&aacute;rio pode digitar um n&uacute;mero com um &uacute;nico
d&iacute;gito e escolher se esse n&uacute;mero deve multiplicar ou dividir o n&uacute;mero exibido anteriormente; o resultado da
opera&ccedil;&atilde;o escolhida &eacute; ent&atilde;o exibido na calculadora. Pode-se repetir esse processo indefinidamente.</p>
<p>Apesar de s&oacute; podermos entrar com n&uacute;meros inteiros de um d&iacute;gito, o visor da calculadora permite exibir n&uacute;meros
com m&uacute;ltiplos d&iacute;gitos e at&eacute; mesmo n&uacute;meros fracion&aacute;rios.</p>
<p>Dada uma sequ&ecirc;ncia de opera&ccedil;&otilde;es que foram realizadas nessa calculadora logo depois de ligada, sua tarefa &eacute;
conferir o resultado exibido.</p>


<h2>Entrada</h2>

<p>A primeira e &uacute;nica linha da entrada cont&eacute;m um inteiro <i>N</i>. Cada uma das pr&oacute;ximas <i>N</i> linhas cont&eacute;m um d&iacute;gito
e um caractere '*' ou '/', que representam uma opera&ccedil;&atilde;o realizada na calculadora.</p>


<h2>Sa&iacute;da</h2>
<p>Seu programa deve imprimir uma &uacute;nica linha contendo o resultado que deve ser exibido pela calculadora ao
final das opera&ccedil;&otilde;es.</p>

<h2>Restri&ccedil;&otilde;es</h2>

  <ul>
    <li>1 &le; <i>N</i> &le; 100 000.</li>
    <li>Os n&uacute;meros informados s&atilde;o inteiros entre 1 e 9.</li>
    <li>O resultado <b>final</b> da conta &eacute; um n&uacute;mero inteiro entre 1 e 2<sup>30</sup>.</li>
  </ul>


<h2>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h2>

  <ul>
    <li>Em um conjunto de casos de teste que totaliza 20 pontos, <i>N</i> = 3.</li>
    <li>Em um conjunto de casos de teste que totaliza 50 pontos, o resultado da express&atilde;o at&eacute; a opera&ccedil;&atilde;o <i>i</i> &eacute; um
inteiro entre 1 e 2<sup>30</sup>, para <i>i</i> = 1, 2, ..,<i>N</i>.</li>
  </ul>



<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3 
2 *
1 *
3 *

      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
6
      </pre>
    </td>
  </tr>
  
</table>

<p>O usu&aacute;rio deseja calcular o resultado da seguinte express&atilde;o: 1 × 2 × 1 × 3. Note que a primeira
ocorr&ecirc;ncia do n&uacute;mero 1 vem do fato da calculadora mostrar inicialmente 1 ao inv&eacute;s de 0.</p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3
2 /
3 /
6 *
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

<p>Neste exemplo, o usu&aacute;rio deseja calcular o resultado da seguinte express&atilde;o: ((1/2)/3) × 6.</p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
11
9 *
9 *
9 *
9 *
9 *
9 *
9 *
9 *
9 *
9 *
9 /
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
387420489
      </pre>
    </td>
  </tr>
  
</table>



</p>
