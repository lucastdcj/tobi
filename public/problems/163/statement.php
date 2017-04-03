<p align="justify">
<p align="justify">&nbsp;</p>

<p>A N-log&ocirc;nia &eacute; uma regi&atilde;o com um clima muito intenso e vari&aacute;vel, onde em quest&atilde;o de poucos dias &eacute; poss&iacute;vel observar uma forte seca, seguida de uma intensa esta&ccedil;&atilde;o de chuvas. O Seu Jo&atilde;o tem uma planta&ccedil;&atilde;o de obilina, uma fruta t&iacute;pica e muito apreciada na regi&atilde;o, o que a torna muito valiosa. A obilina, entretanto, &eacute; muito suscet&iacute;vel a mudan&ccedil;as clim&aacute;ticas, de forma que &eacute; dif&iacute;cil prever quanto desta fruta ser&aacute; colhido durante a safra.</p>

<p>Observou-se que as &aacute;rvores de obilina seguem as seguintes regras:</p>

<ul>

<li>As &aacute;rvores produzem frutas todos os dias, exceto quando elas morrem; </li>

<li>As &aacute;rvores mortas n&atilde;o produzem frutas, e infelizmente, mesmo que volte a chover, continuam mortas; </li>

<li>Se choveu na noite anterior, a &aacute;rvore produz uma fruta a mais que no dia anterior; </li>

<li>Se estiou na noite anterior, a &aacute;rvore produz uma fruta a menos que no dia anterior; e </li>

<li>Uma &aacute;rvore morre se n&atilde;o produzir nenhuma fruta. </li>

</ul>

<p>O Seu Jo&atilde;o deseja vender toda a obilina produzida para uma grande rede de mercados local, mas para isso, precisa saber exatamente quantas frutas de obilina ele colher&aacute; durante a safra.</p>

<p>Para ajudar o Seu Jo&atilde;o nesta tarefa, voc&ecirc; deve escrever um programa que, dada a previs&atilde;o do tempo para cada noite do per&iacute;odo da safra, e quantas frutas cada &aacute;rvore do Seu Jo&atilde;o produziu no dia anterior ao in&iacute;cio da safra, determine quantas obilinas ser&atilde;o colhidas durante a safra.</p>

<p>Por exemplo, considerando apenas um p&eacute; de obilina, se a safra dura dois dias, choveu durante duas noites, e o p&eacute; de obilina produziu 3 frutos antes de come&ccedil;ar a safra, a produ&ccedil;&atilde;o total da safra ser&aacute; de 9 frutas: 4 no primeiro dia da safra, e 5 no segundo dia.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m dois inteiros, <em>N</em> e <em>K</em>, respectivamente o n&uacute;mero de dias que dura a safra, e o n&uacute;mero de &aacute;rvores que o Seu Jo&atilde;o possui.</p>

<p>A segunda linha cont&eacute;m <em>K</em> inteiros <em>a<sub>i</sub></em> indicando quantas frutas foram produzidas no dia anterior ao in&iacute;cio da safra por cada uma das <em>K</em> &aacute;rvores.</p>

<p>A linha seguinte cont&eacute;m <em>N</em> letras separadas por um espa&ccedil;o em branco. Cada uma das letras indica se choveu ou se estiou durante a noite respectiva: a primeira letra se refere &agrave; primeira noite, a segunda letra se refere &agrave; segunda noite, e assim por diante. Se a letra for um &lsquo;C&rsquo;, indica que choveu aquela noite chuvosa, e se for um &lsquo;E&rsquo;, indica que estiou (ou seja, n&atilde;o choveu).</p>

<h3>Sa&iacute;da</h3>

<p>Seu programa deve imprimir uma &uacute;nica linha, contendo um &uacute;nico inteiro, indicando o n&uacute;mero de frutas que ser&atilde;o produzidas pela planta&ccedil;&atilde;o do Seu Jo&atilde;o.</p>

<h3>Restri&ccedil;&otilde;es</h3>

<ul>

<li>1 &le; <em>N</em> &le; 100 000 </li>

<li>1 &le; <em>K</em> &le; 100 000 </li>

<li>1 &le; <em>a<sub>i</sub></em> &le; 100 para todo <em>i</em> </li>

</ul>

<h3>Exemplos</h3>

<pre><strong>Entrada</strong>

3 2

1 2

C E C



<strong>Sa&iacute;da</strong>

13



<strong>Entrada</strong>

5 3

2 3 1

E E E C C



<strong>Sa&iacute;da</strong>

4

</pre>

