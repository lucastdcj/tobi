<p align="justify">

<p>Leonardo Nascimento &eacute; um garoto de 13 anos apaixonado por cartografia. Ele assina a lista de discuss&otilde;es
da Sociedade Brasileira de Cartografia (SBC) para ficar por dentro de todas as novidades. Em um t&oacute;pico de
discuss&atilde;o na lista da SBC, o presidente da sociedade descobriu que Leonardo tinha apenas 13 anos, e ficou
muito feliz em saber que uma pessoa t&atilde;o jovem tinha tanto interesse pela arte de tra&ccedil;ar mapas geogr&aacute;ficos e
topogr&aacute;ficos. Foi ent&atilde;o que o presidente resolveu criar desafios com intuito de difundir a cartografia.</p>
<p>Um dos desafios era o seguinte: dado um mapa de cidades ligadas por estradas, determinar a dist&acirc;ncia entre
um par de cidades mais distantes. Como o objetivo era fazer as crian&ccedil;as se divertirem, o presidente resolveu
selecionar mapas bem simples. As restri&ccedil;&otilde;es adotadas foram: (a) todas as estradas s&atilde;o de m&atilde;o dupla; (b)
todas as estradas possuem 1km de comprimento, e portanto toda estrada ligando duas cidades tem o mesmo
comprimento; (c) toda estrada conecta apenas duas cidades, e (d) dadas duas cidades quaisquer <i>A</i> e <i>B</i>, s&oacute; existe
uma &uacute;nica maneira de chegar em <i>A</i> partindo de <i>B</i>, e vice-versa.</p>
<p>O presidente da SBC resolveu pedir sua ajuda para escrever um programa de computador que, dado um mapa
seguindo as restri&ccedil;&otilde;es acima, devolva a resposta. Assim, ele conseguir&aacute; gerar um gabarito para enviar junto
com o desafio.</p>


<h3>Entrada</h3>
<p>A primeira linha da entrada cont&eacute;m um inteiro <i>N</i> representando o n&uacute;mero de cidades no mapa. Cada uma das
<i>N</i> - 1 linhas seguintes da entrada cont&eacute;m dois inteiros <i>A</i> e <i>B</i> indicando que existe uma estrada entre as cidades
<i>A</i> e <i>B</i>.</p>

<h3>Sa&iacute;da</h3>
<p>A &uacute;nica linha da sa&iacute;da cont&eacute;m um inteiro indicando a dist&acirc;ncia entre um par de cidades mais distantes.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 20 pontos, <i>N</i> &le; 200</li>
  <li>Em um conjunto de casos de teste que totaliza 40 pontos, <i>N</i> &le; 1000</li>
  
</ul>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>2 &le; <i>N</i> &le; 10<sup>6</sup></li>
  <li>1 &le; <i>A</i>, <i>B</i> &le; <i>N</i> e <i>A</i> &ne; <i>B</i></li>
  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
10
1 2
2 3
3 4
4 5
5 6
6 7
7 8
8 9
9 10
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
9
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
5
1 2
2 3
3 4
3 5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3
      </pre>
    </td>
  </tr>
</table>

<p></p>

<p>A figura abaixo ilustra este exemplo, onde temos 5 cidades identificadas por 1, 2, . . . , 5. As cidades
1 e 4 est&atilde;o a uma dist&acirc;ncia de 3km, assim como as cidades 1 e 5. N&atilde;o temos nenhum par de cidades
que est&atilde;o a uma dist&acirc;ncia maior que 3km. Portanto, a resposta para esse caso &eacute; 3.</p>

<div align="center">
<img src="task_images/2011f1p2_cartografico.png" width="370px" height="250px">
</div>
<br>

</p>
