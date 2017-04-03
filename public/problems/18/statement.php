<p align="justify">

<p>Joãozinho mora em uma rua que tem <i>N</i> casas. Marquinhos é o melhor amigo dele, mas sempre gosta de pregar
peças em Joãozinho. Desta vez, ele pegou os dois brinquedos prediletos de Joãozinho e os escondeu em duas
casas distintas da rua. Em compensação, Marquinhos deu uma dica importante para Joãozinho:</p>
<center><p><i><i>A</i> soma dos números das casas em que escondi teus brinquedos é igual a K. Além disso, escolhi as casas de tal
forma que não existe outro par de casas cuja soma tenha esse mesmo valor.</i></p></center>
<p>Sabendo disto, encontre qual é o par de casas em que se encontram os brinquedos de Joãozinho. Para auxiliar
seu amigo, Marquinhos entregou a Joãozinho uma lista com o número das casas já em ordem crescente (isto é,
do menor para o maior número).</p>

<h3>Entrada</h3>
<p><i>A</i> primeira primeira linha da entrada contém um número inteiro <i>N</i>, que representa o número de casas que
existem na rua. Cada uma das <i>N</i> linhas seguintes contém um número inteiro, representando o número de uma
casa. Note que esses <i>N</i> números estão ordenados, do menor para o maior. <i>A</i> última linha da entrada contém
um inteiro <i>K</i>, que é a soma dos números das duas casas onde os brinquedos estão escondidos.</p>

<h3>Sa&iacute;da</h3>
<p>Se programa deve imprimir uma única linha, contendo dois inteiros, <i>A</i> e <i>B</i>, <i>A</i> < <i>B</i>, que representam os números
das casas em que estão escondidos os brinquedos. Os dois números devem ser separados por um espaço em
branco.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos que totaliza 30 pontos, <i>N</i> &le; 10<sup>3</sup>.</li>
</ul>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>2 &le; <i>N</i> &le; 10<sup>5</sup></li>
  <li>Para cada casa C<sub>i</sub>, 0 &le; C<sub>i</sub> &le; 10<sup>9</sup>, <i>i</i> = 1, 2, ... , <i>N</i></li>
  <li>Os números das casas estão em ordem crescente, do menor para o maior número, e casas distintas têm
números distintos.</li> 
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4
1
2
3
5
8
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3 5
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
4
1
2
3
5
5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2 3
      </pre>
    </td>
  </tr>
</table>

</p>
