<p align="justify">
<p align="justify">&nbsp;</p>

<p>Juquinha foi convidado para participar do prestigiado torneio de t&ecirc;nis de Rolando Barros, na Nlog&ocirc;nia. O torneio &eacute; composto de <em>N</em> rodadas no estilo mata-mata: todo jogador que perde uma partida &eacute; eliminado do torneio, e o vencedor desta partida avan&ccedil;a para a pr&oacute;xima rodada. Como o n&uacute;mero de jogadores ativos cai pela metade a cada rodada, &eacute; necess&aacute;rio que o n&uacute;mero de jogadores participantes seja uma pot&ecirc;ncia de 2.</p>

<center><img src="http://br.spoj.com/content/marcoskwkm:tornei13.gif" alt="" /></center>

<p>Os jogadores s&atilde;o inicialmente dispostos na chave por sorteio. Em uma disposi&ccedil;&atilde;o &eacute; atribuido a cada jogador um valor de 1 a 2<sup><em>N</em></sup>, que corresponde a sua posi&ccedil;&atilde;o na chave do torneio. Jogadores vencedores avan&ccedil;am para a direita da chave, e disputam com o vencedor da sub-chave vizinha. Na imagem acima, caso os jogadores das posi&ccedil;&otilde;es 1 e 3 ven&ccedil;am suas partidas na primeira rodada, estes se enfrentar&atilde;o na segunda rodada.</p>

<p>Juquinha n&atilde;o quer perder a chance de tornar-se um jogador mundialmente famoso, e para isso contratou voc&ecirc; para ajud&aacute;-lo em suas an&aacute;lises estat&iacute;sticas. Ele atribuiu a cada jogador um coeficiente de habilidade <em>H<sub>i</sub></em>, e sabe que se dois jogadores disputarem uma partida, aquele com maior coeficiente de habilidade certamente ser&aacute; o vencedor. Seu papel &eacute; calcular quantas disposi&ccedil;&otilde;es iniciais dos jogadores for&ccedil;am Juquinha perder na <em>K</em>-&eacute;sima rodada (ou vencer o torneio, caso <em>K</em> = <em>N</em> + 1). Duas disposi&ccedil;&otilde;es s&atilde;o consideradas distintas se para algum jogador foi atribuido um valor diferente nas duas disposi&ccedil;&otilde;es.</p>

<h3>Entrada</h3>

<p>A primeira linha cont&eacute;m dois inteiros <em>N</em> e <em>K</em>. Cada uma das pr&oacute;ximas 2<sup><em>N</em></sup> linhas seguintes cont&ecirc;m um &uacute;nico inteiro representando o coeficiente de habilidade de um jogador. O coeficiente de Juquinha &eacute; representado pelo primeiro desses inteiros.</p>

<h3>Sa&iacute;da</h3>

<p>Seu programa deve imprimir uma &uacute;nica linha contendo um &uacute;nico inteiro indicando o n&uacute;mero de disposi&ccedil;&otilde;es iniciais que for&ccedil;am Juquinha a perder na <em>K</em>-&eacute;sima rodada (ou ganhar o torneio, se <em>K</em> = <em>N</em> + 1). Como este n&uacute;mero pode ser muito grande, imprima o resto que este n&uacute;mero deixa quando dividido por 1.000.000.007 (10<sup>9</sup> + 7).</p>

<h3>Restri&ccedil;&otilde;es</h3>

<ul>

<li>1 &le; <em>N</em> &le; 16 </li>

<li>1 &le; <em>K</em> &le; <em>N</em> + 1 </li>

<li>0 &le; coeficiente de habilidade de um jogador &le; 10<sup>9</sup> </li>

<li>N&atilde;o existem dois jogadores diferentes com a mesma habilidade. </li>

</ul>

<h3>Exemplos</h3>

<pre><strong>Entrada</strong><br />2 2<br />3<br />4<br />2<br />1<br /><br /><strong>Sa&iacute;da</strong><br />16<br /><br /><strong>Entrada</strong><br />1 2<br />7<br />5<br /><br /><strong>Sa&iacute;da</strong><br />2</pre>

