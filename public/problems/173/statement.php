<p align="justify">
<p align="justify">

<p>

As estradas da Nlog&ocirc;nia est&atilde;o severamente danificadas, devido ao intenso fluxo de ve&iacute;culos pesados criado

pelo desenvolvimento econ&ocirc;mico do reino. Para resolver o problema, o rei da Nlog&ocirc;nia decretou que seriam

constru&iacute;das novas rodovias. O decreto determinou que:

</p>

<ul>

<li>todas as rodovias constru&iacute;das ter&atilde;o m&atilde;o &uacute;nica, e ligar&atilde;o exatamente duas cidades;

<li>nenhum par de rodovias se intersectar&aacute; &mdash; ser&atilde;o constru&iacute;dos viadutos, t&uacute;neis e pontes conforme necess&aacute;rio;

<li>por raz&otilde;es or&ccedil;ament&aacute;rias, o n&uacute;mero de rodovias a construir ser&aacute; igual ao n&uacute;mero de cidades que existem na Nlog&ocirc;nia;

<li>deve ser poss&iacute;vel, partindo de qualquer cidade, chegar a qualquer outra cidade usando s&oacute; as novas rodovias, sempre respeitando a m&atilde;o das rodovias.

</ul>

<p>

O engenheiro-chefe do reino desenhou uma proposta de mapa vi&aacute;rio; o rei verificou que o plano satisfaz as

tr&ecirc;s primeiras restri&ccedil;&otilde;es, mas n&atilde;o conseguiu verificar a &uacute;ltima. Por isso, ele pediu que voc&ecirc; escrevesse um

programa que determina se o plano de rodovias permite viajar de qualquer cidade at&eacute; qualquer outra cidade

da Nlog&ocirc;nia.

</p>

<h3>Entrada</h3>

<p>

A primeira linha de cada caso de teste cont&eacute;m um inteiro N, indicando o n&uacute;mero de cidades. Cada uma das

N linhas seguintes descrevem uma estrada: a linha cont&eacute;m dois inteiros A e B que indicam que existe uma

estrada de m&atilde;o &uacute;nica ligando a cidade A a outra cidade, B (as cidades s&atilde;o numeradas de 1 a N).

</p>

<h3>Sa&iacute;da</h3>

<p>

Imprima uma &uacute;nica linha contendo um &uacute;nico caractere: &lsquo;S&rsquo; se for poss&iacute;vel ir de qualquer cidade a qualquer

outra cidade por rodovias e &lsquo;N&rsquo; caso contr&aacute;rio.

</p>

<h3>Restri&ccedil;&otilde;es</h3>

<ul>

<li>2 &le; <em>N</em> &le; 10<sup>4</sup>

<li><em>A</em> &ne; <em>B</em>;

</ul>

<h3>Exemplos</h3>

<pre>

<strong>Entrada</strong>

3

1 2

2 3

3 1



<strong>Sa&iacute;da</strong>

S



<strong>Entrada</strong>

3

1 2

2 3

1 3



<strong>Sa&iacute;da</strong>

N



<strong>Entrada</strong>

6

1 2

2 3

4 1

5 6

3 5

6 4



<strong>Sa&iacute;da</strong>

S



<strong>Entrada</strong>

6

1 2

2 3

3 1

4 5

5 6

6 4



<strong>Sa&iacute;da</strong>

N

</pre>



