<p align="justify">

<p>Vira! &eacute; um jogo individual que se inicia com <i>N</i> pe&ccedil;as igualmente espa&ccedil;adas em uma linha. Cada pe&ccedil;a do
Vira! possui dois lados, sendo um branco e um preto; assim, ao virar uma pe&ccedil;a, alterna-se a cor que est&aacute; sendo
mostrada entre branco e preto. A figura abaixo ilustra um poss&iacute;vel arranjo com 5 pe&ccedil;as, duas mostrando o lado
branco e duas mostrando o lado preto.</p>

<center><img src="task_images/2011f2p2_vira1.png"><img src="task_images/2011f2p2_vira2.png"><img src="task_images/2011f2p2_vira1.png"><img src="task_images/2011f2p2_vira2.png"><img src="task_images/2011f2p2_vira2.png"></center>

<p>Um movimento consiste em retirar uma pe&ccedil;a preta criando um espa&ccedil;o e inverter as pe&ccedil;as vizinhas &agrave;
retirada. Sendo assim, dependendo do n&uacute;mero de pe&ccedil;as vizinhas &agrave; retirada, um movimento pode inverter
duas, uma, ou mesmo nenhuma pe&ccedil;a (se n&atilde;o houver pe&ccedil;as vizinhas &agrave; que est&aacute; sendo retirada). Voc&ecirc; vence o
jogo quando consegue remover todas as pe&ccedil;as. A figura abaixo exemplifica uma sequ&ecirc;ncia de movimentos que
resolvem uma inst&acirc;ncia do problema com 5 pe&ccedil;as, em que as pe&ccedil;as s&atilde;o retiradas na ordem 5-2-1-3-4.</p>

<center>
  <table border="1">
    <tr>
      <td><table border="0"><td width="30" height="27" align="center">1</td><td width="30" align="center">2</td><td width="30" align="center">3</td><td width="30" align="center">4</td><td width="30" align="center">5</td></table></td>
      <td width="230" style="padding-left:10px;">Descri&ccedil;&atilde;o do movimento</td>
    </tr>
    <tr>
      <td><table border="0"><td width="30" height="27" align="center"><img src="task_images/2011f2p2_vira1.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira2.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira1.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira2.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira2.png"></td></table></td>
      <td width="230" style="padding-left:10px;">Configura&ccedil;&atilde;o inicial</td>
    </tr>
    <tr>
      <td><table border="0"><td width="30" height="27" align="center"><img src="task_images/2011f2p2_vira1.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira2.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira1.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira1.png"></td></table></td>
      <td width="230" style="padding-left:10px;">Removemos a pe&ccedil;a da posi&ccedil;&atilde;o 5</td>
    </tr>
    <tr>
      <td><table border="0"><td width="30" align="center"><img src="task_images/2011f2p2_vira2.png"></td><td width="30" align="center"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira2.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira1.png"></td></table></td>
      <td width="230" style="padding-left:10px;">Removemos a pe&ccedil;a da posi&ccedil;&atilde;o 2</td>
    </tr>
    <tr>
      <td><table border="0"><td width="30" height="27" align="center"></td><td width="30" align="center"></td><td width="31" align="center"><img src="task_images/2011f2p2_vira2.png"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira1.png"></td></table></td>
      <td width="230" style="padding-left:10px;">Removemos a pe&ccedil;a da posi&ccedil;&atilde;o 1</td>
    </tr>
    <tr>
      <td><table border="0"><td width="30" height="27" align="center"></td><td width="30" align="center"></td><td width="30" align="center"></td><td width="30" align="center"><img src="task_images/2011f2p2_vira2.png"></td></table></td>
      <td width="230" style="padding-left:10px;">Removemos a pe&ccedil;a da posi&ccedil;&atilde;o 3</td>
    </tr>
    <tr>
      <td></td>
      <td width="230" height="27" style="padding-left:10px;">Removemos a pe&ccedil;a da posi&ccedil;&atilde;o 4</td>
    </tr>
    <tr>
      <td></td>
      <td width="230" height="27" style="padding-left:10px;">Fim do jogo.</td>
    </tr>
  </table>
</center>

<p>Para uma determinada disposi&ccedil;&atilde;o inicial das pe&ccedil;as, podem existir v&aacute;rias solu&ccedil;&otilde;es diferentes. Por exemplo,
poder&iacute;amos retirar as pe&ccedil;as na ordem 5-2-3-4-1 e ainda assim conseguir retirar todas as pe&ccedil;as.</p>
<p>Sua tarefa, neste problema, consiste em contar o n&uacute;mero de solu&ccedil;&otilde;es diferentes para uma dada disposi&ccedil;&atilde;o inicial
das pe&ccedil;as. Como o n&uacute;mero de solu&ccedil;&otilde;es pode ser muito grande, voc&ecirc; deve imprimir apenas o resto do n&uacute;mero
quando dividido por 10007.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m o inteiro <i>N</i>. A linha seguinte cont&eacute;m <i>N</i> letras separadas por espa&ccedil;o
representando o arranjo inicial das pe&ccedil;as. Uma pe&ccedil;a branca &eacute; indicada pela letra B na entrada, e uma pe&ccedil;a
preta &eacute; indicada pela letra P.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma linha contendo o n&uacute;mero de solu&ccedil;&otilde;es distintas que resolvem o jogo.</p>

<h3>Restri&ccedil;&otilde;es</h3>
<ul>
  <li>1 &le; <i>N</i> &le; 1000.</li>
</ul>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 7.</li>
  <li>Em um conjunto de casos de teste totalizando 60 pontos, <i>N</i> &le; 1000.</li>
  
  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5
B P B P P
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
15
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
3
B P B
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
