<p align="justify">
<p>Sebasti&atilde;o Bueno Coelho, apelidado de SBC pelos familiares e amigos, passou as f&eacute;rias de janeiro de 2011 no
s&iacute;tio de seus av&oacute;s. Durante sua estadia, uma das atividades prediletas do SBC era nadar no rio que havia no
fundo da casa onde morava.</p>

<p>Uma das caracter&iacute;sticas do rio que mais impressionava SBC era um belo caminho, feito inteiramente com
pedras brancas. H&aacute; muito tempo, o av&ocirc; de SBC notara que os habitantes do s&iacute;tio atravessavam o rio com
grande frequ&ecirc;ncia e, por isso, construiu um caminho no rio com pedras posicionadas em linha reta; ao faz&ecirc;-lo,
tomou muito cuidado para que o espa&ccedil;amento das pedras fosse de exatamente um metro.</p>

<p>Hoje em dia, a &uacute;nica utilidade do caminho &eacute; servir de divers&atilde;o para os sapos que vivem no rio, que pulam de uma
pedra a outra agitadamente. Um certo dia, enquanto descansava e nadava nas &aacute;guas, SBC assistiu atentamente
&agrave;s acrobacias dos bichos e notou que cada sapo sempre pulava (zero, uma ou mais vezes) uma quantidade fixa
de metros.</p>

<p>SBC sabe que voc&ecirc; participa da OBI todos os anos e, chegando na escola, resolveu desafiar-te com o seguinte
problema: Dado o n&uacute;mero de pedras no rio, o n&uacute;mero de sapos, a pedra inicial sobre a qual cada sapo est&aacute;
(cada pedra &eacute; identificada por sua posi&ccedil;&atilde;o na sequ&ecirc;ncia de pedras) e a dist&acirc;ncia que cada sapo pula, determinar
as posi&ccedil;&otilde;es onde pode existir um sapo depois que SBC chega no rio. </p>


<h2>Entrada</h2>

<p>A primeira linha da entrada cont&eacute;m dois inteiros <i>N</i> e <i>M</i> representando o n&uacute;mero de pedras no rio e o n&uacute;mero de
sapos, respectivamente. Cada uma das <i>M</i> linhas seguintes possui dois inteiros <i>P</i> e <i>D</i> representando a posi&ccedil;&atilde;o
inicial de um sapo e a dist&acirc;ncia fixa de pulo, respectivamente.</p>


<h2>Sa&iacute;da</h2>
<p>
A sa&iacute;da cont&eacute;m <i>N</i> linhas. A <i>i</i>-&eacute;sima linha indica a possibilidade ou n&atilde;o de ter um sapo na <i>i</i>-&eacute;sima pedra.
Para as pedras que podem ter um sapo voc&ecirc; deve imprimir 1, e para as pedras que com certeza n&atilde;o podem ter
nenhum sapo voc&ecirc; deve imprimir 0.</p>

<h2>Restri&ccedil;&otilde;es</h2>


  <ul>
    <li>1 &le; <i>N</i>, <i>M</i> &le; 100</li>
    <li>Para cada sapo, 1 &le; <i>P</i>, <i>D</i> &le; <i>N</i></li>
  </ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 2
3 2
4 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
0
1
1
1
      </pre>
    </td>
  </tr>
  
</table>

<p></p>
<p>Neste exemplo, SBC indicou a exist&ecirc;ncia de 5 pedras no rio e 2 sapos. Os sapos estavam inicialmente
nas pedras 3 e 4. SBC tamb&eacute;m lhe disse que o primeiro sapo da entrada sempre pula 2 metros, e o
segundo sempre pula 4 metros. A figura a seguir ilustra as poss&iacute;veis pedras que podem ser ocupadas
pelos sapos quando eles come&ccedil;am a pular.</p>

<center>
  <table border="1px">
    <tr>
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td>
      <td width="52px"> &nbsp;</td>
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td>     
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td>
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td></tr>
    <tr></tr>
  </table>
  <table border="0">
    <tr>
      <td width="54px" border="0px" align="center">1</td>
      <td width="54px" border="0px" align="center">2</td>
      <td width="54px" border="0px" align="center">3</td>
      <td width="54px" border="0px" align="center">4</td>
      <td width="54px" border="0px" align="center">5</td>
    </tr>
  </table>

</center>



<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
8 3
3 3
2 2
6 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
0
1
1
1
0
1
0
1
      </pre>
    </td>
  </tr>
</table>
<p>Neste exemplo, SBC indicou a exist&ecirc;ncia de 8 pedras no rio e 3 sapos. Os sapos estavam inicialmente
nas pedras 3, 2 e 6. SBC tamb&eacute;m lhe disse que o primeiro sapo da entrada sempre pula 3 metros,
o segundo e terceiro sempre pulam 2 metros. Dessa forma, o primeiro sapo pode estar nas pedras
3 ou 6; o segundo sapo pode estar nas pedras 2, 4, 6 ou 8; e o terceiro sapo pode estar nas pedras
6, 4, 2 e 8. A figura a seguir ilustra as poss&iacute;veis pedras que podem ser ocupadas pelos sapos quando
eles come&ccedil;am a pular.</p>

<center>
  <table border="1px">
    <tr>
      <td width="52px"> <pre></pre></td>
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td>
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td>
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td>
      <td width="52px"> <pre></pre></td>
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td>
      <td width="52px"> <pre></pre></td>
      <td width="52px"><img src="task_images/2011f1p1_pulosapo.png"></td></tr>
    <tr></tr>
  </table>
  <table border="0">
    <tr>
      <td width="54px" border="0px" align="center">1</td>
      <td width="54px" border="0px" align="center">2</td>
      <td width="54px" border="0px" align="center">3</td>
      <td width="54px" border="0px" align="center">4</td>
      <td width="54px" border="0px" align="center">5</td>
      <td width="54px" border="0px" align="center">6</td>
      <td width="54px" border="0px" align="center">7</td>
      <td width="54px" border="0px" align="center">8</td>
    </tr>
  </table>
</center>
<br>

</p>
