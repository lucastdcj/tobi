<p align="justify">
<p>Capit&atilde;o Tornado &eacute; um pirata muito cruel que faz qualquer coisa por dinheiro. H&aacute; alguns dias, o capit&atilde;o soube
da exist&ecirc;ncia de um tesouro numa ilha deserta, e agora tenta determinar sua posi&ccedil;&atilde;o.</p>
<p>A ilha pode ser vista como um quadriculado <i>N</i> × <i>N</i> de terra cuja posi&ccedil;&atilde;o (0, 0) est&aacute; a sudoeste, a posi&ccedil;&atilde;o
(<i>N</i> - 1, 0) est&aacute; a sudeste, a posi&ccedil;&atilde;o (0, <i>N</i> - 1) est&aacute; a noroeste e a posi&ccedil;&atilde;o (<i>N</i> - 1, <i>N</i> - 1) est&aacute; a nordeste. Em
alguma posi&ccedil;&atilde;o desse quadriculado est&aacute; o tesouro.</p>
<p>Uma curiosidade importante &eacute; a perna de pau que o capit&atilde;o possui. Ela impede que o capit&atilde;o se locomova em
dire&ccedil;&otilde;es que n&atilde;o a horizontal ou a vertical: para ir da posi&ccedil;&atilde;o (1, 1) para a posi&ccedil;&atilde;o (3, 2), por exemplo, o capit&atilde;o
&eacute; obrigado a gastar tr&ecirc;s passos. &Eacute; claro que o capit&atilde;o sempre escolhe, dentro de suas limita&ccedil;&otilde;es, um caminho
com o menor n&uacute;mero de passos poss&iacute;vel. Chamamos esse modo de andar de <i>passos de capit&atilde;o</i>. Um exemplo de
caminho por <i>passos de capit&atilde;o</i> entre (1, 1) e (3, 2) &eacute; ilustrado na figura a seguir.</p>

<div align="center">
<img src="../../../task_images/2011f1p2_tesouro1.png" width="370px" height="250px">
</div>

<p>Como em toda boa ca&ccedil;a ao tesouro, o capit&atilde;o n&atilde;o conhece a posi&ccedil;&atilde;o onde o tesouro se encontra: ele possui
um mapa que corresponde &agrave; geografia da ilha. Em algumas posi&ccedil;&otilde;es desse mapa, existem pistas escritas. Cada
pista consiste em um n&uacute;mero D, que indica a menor dist&acirc;ncia em <i>passos de capit&atilde;o</i> entre a posi&ccedil;&atilde;o em que a
pista se encontra e a do tesouro.</p>

<div align="center">
<img src="../../../task_images/2011f1p2_tesouro2.png" width="370px" height="170px">
</div>

<p>Observe que, dependendo da disposi&ccedil;&atilde;o das pistas, a posi&ccedil;&atilde;o do tesouro pode estar determinada de maneira
&uacute;nica ou n&atilde;o. Na figura acima e &agrave; esquerda, as duas pistas s&atilde;o suficientes para se saber, com certeza, onde est&aacute;
o tesouro; na figura &agrave; direita, as quatro pistas dadas ainda possibilitam que tanto a posi&ccedil;&atilde;o (0, 2) quanto a (2, 2)
guardem o tesouro. Nesse &uacute;ltimo caso, n&atilde;o se pode determinar, com certeza, qual &eacute; a localiza&ccedil;&atilde;o do tesouro.</p>
<p>Dadas as pistas que o capit&atilde;o possui, sua tarefa &eacute; determinar se as pistas fornecem a localiza&ccedil;&atilde;o exata do tesouro
e, caso positivo, qual ela &eacute;.</p>

<h3>Entrada</h3>
<p>A primeira linha cont&eacute;m dois inteiros positivos <i>N</i> e <i>K</i>, onde <i>N</i> &eacute; a dimens&atilde;o do quadriculado e <i>K</i> &eacute; o n&uacute;mero
de pistas no mapa que o capit&atilde;o possui.</p>
<p>Cada uma das pr&oacute;ximas <i>K</i> linhas cont&ecirc;m tr&ecirc;s inteiros <i>X</i>, <i>Y</i> e D, informando que existe uma pista na posi&ccedil;&atilde;o
(<i>X</i>, <i>Y</i>) contendo o n&uacute;mero D. Essa pista indica que o tesouro encontra-se a D <i>passos de capit&atilde;o</i> da posi&ccedil;&atilde;o da
pista.</p>
<p>&Eacute; garantido que, com essas pistas, existe ao menos uma localiza&ccedil;&atilde;o poss&iacute;vel para o tesouro. Al&eacute;m disso, o mapa
n&atilde;o cont&eacute;m duas pistas na mesma posi&ccedil;&atilde;o.</p>

<h3>Sa&iacute;da</h3>
<p>Se as pistas forem suficientes para determinar com certeza a localiza&ccedil;&atilde;o do tesouro, seu programa deve imprimir
uma &uacute;nica linha com dois inteiros, <i>X</i> e <i>Y</i> , indicando que o tesouro encontra-se na posi&ccedil;&atilde;o (<i>X</i>, <i>Y</i>).
</p>
<p>Caso contr&aacute;rio, seu programa deve imprimir uma &uacute;nica linha com dois inteiros iguais a -1, como nos exemplos
de sa&iacute;da a seguir.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>2 &le; <i>N</i> &le; 100</li>
  <li>1 &le; <i>K</i> &le; 100</li>
  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4 2
0 0 3
3 0 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1 2
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
4 4
1 0 3
1 1 2
1 2 1
1 3 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
-1 -1
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
3 3
0 0 2
1 1 2
2 0 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
0 2
      </pre>
    </td>
  </tr>
</table>

</p>
