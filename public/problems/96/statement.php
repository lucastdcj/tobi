<p align="justify">

<p>Minhocas s&atilde;o muito importantes para a agricultura e como insumo para produ&ccedil;&atilde;o de ra&ccedil;&atilde;o animal. A Organiza&ccedil;&atilde;o para Bioengenharia de Minhocas (OBM) &eacute; uma entidade n&atilde;o governamental que promove o aumento da produ&ccedil;&atilde;o, utiliza&ccedil;&atilde;o e exporta&ccedil;&atilde;o de minhocas.</p>

<p>Uma das atividades promovidas pela OBM &eacute; a manuten&ccedil;&atilde;o de uma fazenda experimental para pesquisa de novas tecnologias de cria&ccedil;&atilde;o de minhocas. Na fazenda, a &aacute;rea destinada &agrave;s pesquisas &eacute; de formato retangular, dividida em c&eacute;lulas quadrangulares de mesmo tamanho. As c&eacute;lulas s&atilde;o utilizadas para testar os efeitos, na produ&ccedil;&atilde;o de minhocas, de varia&ccedil;&otilde;es de esp&eacute;cies de minhocas, tipos de terra, de adubo, de tratamento, etc. Os pesquisadores da OBM mant&ecirc;m um acompanhamento constante do desenvolvimento das minhocas em cada c&eacute;lula, e t&ecirc;m uma estimativa extremamente precisa da produtividade em cada uma das c&eacute;lulas. A figura abaixo mostra um mapa da fazenda, mostrando a produtividade estimada de cada uma das c&eacute;lulas.</p>

<p><img src="../../content/wanderley:minhoca.png" alt="" /></p>

<p>Um pesquisador da OBM inventou e construiu uma m&aacute;quina colhedeira de minhocas, e quer test&aacute;- la na fazenda. A m&aacute;quina tem a largura de uma c&eacute;lula, e em uma passada pelo terreno de uma  c&eacute;lula colhe todas as minhocas dessa c&eacute;lula, separando-as, limpando-as e empacotando-as. Ou seja,  a m&aacute;quina eliminara uma das etapas mais intensivas de m&atilde;o de obra no processo de produ&ccedil;&atilde;o de  minhocas. A m&aacute;quina, por&eacute;m, ainda est&aacute; em desenvolvimento e tem uma restri&ccedil;&atilde;o: n&atilde;o faz curvas,  podendo movimentar-se somente em linha reta.</p>

<p>Decidiu-se ent&atilde;o que seria efetuado um teste com a m&aacute;quina, de forma a colher o maior n&uacute;mero  poss&iacute;vel de minhocas em uma unica passada, em linha reta, de lado a lado do campo de minhocas.  Ou seja, a m&aacute;quina deve colher todas as minhocas de uma &lsquo;coluna&rsquo; ou de uma &lsquo;linha&rsquo; de c&eacute;lulas do  campo de minhocas (a linha ou coluna cuja soma das produtividades esperadas das c&eacute;lulas &eacute; a maior  poss&iacute;vel).</p>

<h3>Tarefa</h3>

<p>Escreva um programa que, fornecido o mapa do campo de minhocas, descrevendo a produtividade estimada em cada c&eacute;lula, calcule o n&uacute;mero esperado total de minhocas a serem colhidas pela m&aacute;quina durante o teste, conforme descrito acima.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m dois n&uacute;meros inteiros N e M, representando respectivamente o n&uacute;mero de linhas (1 &lt;= N &lt;= 100) e o n&uacute;mero de colunas (1 &lt;= M &lt;= 100) de c&eacute;lulas existentes no campo experimental de minhocas. Cada uma das N linhas seguintes cont&eacute;m M inteiros, representando as produtividades estimadas das c&eacute;lulas correspondentes a uma linha do campo de minhocas.</p>

<h3>Sa&iacute;da</h3>

<p>A sa&iacute;da deve ser composta por uma unica linha contendo um inteiro, indicando o n&uacute;mero esperado total de minhocas a serem colhidas pela m&aacute;quina durante o teste.</p>

<table style="width: 100%;" border="0" align="center">

<tbody>

<tr>

<td>

<h3>Exemplo 1</h3>

<pre><strong>Entrada:</strong>

3 4

81 28 240 10

40 10 100 240

20 180 110 35



<strong>Sa&iacute;da:</strong>

450

</pre>

</td>

<td>

<h3>Exemplo 2</h3>

<pre><strong>Entrada:</strong>

4 1

100

110

0

100



<strong>Sa&iacute;da:</strong>

310

</pre>

</td>

</tr>

</tbody>

</table>

<p><strong>

<p>Restri&ccedil;&otilde;es</p>

</strong></p>

<p>1 &lt;= N &lt;= 100<br /> 1 &lt;= M &lt;= 100<br /> 0 &lt;= <em>Produtividade de uma c&eacute;lula</em> &lt;= 500<br /> 0 &lt;= <em>Produtividade de uma linha ou coluna de c&eacute;lulas</em> &lt;= 50000</p>

</p>
