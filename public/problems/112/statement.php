<p align="justify">

<p>Cuca saiu para jogar futebol com os amigos e esqueceu do encontro que tinha com a namorada. Ciente da mancada, Cuca deseja elaborar um pedido especial de desculpas. Resolveu ent&atilde;o enviar flores e usar o cart&atilde;o da floricultura para escrever um pedido especial de desculpas.</p>

<p>Cuca buscou na internet um conjunto de frases bonitas contendo a palavra &lsquo;desculpe&rsquo; (que pode ocorrer mais de uma vez na mesma frase). No entanto, o cart&atilde;o da floricultura &eacute; pequeno, e nem todas as frases que Cuca colecionou poder&atilde;o ser aproveitadas.</p>

<p>Cuca quer aproveitar o espa&ccedil;o do cart&atilde;o, onde cabe um n&uacute;mero limitado de caracteres, para escrever um sub-conjunto das frases coletadas de modo que apare&ccedil;a o m&aacute;ximo de vezes poss&iacute;vel a palavra &lsquo;desculpe&rsquo;.</p>

<h3>Tarefa</h3>

<p>Escreva um programa que, dados o n&uacute;mero de caracteres que cabem no cart&atilde;o e a quantidade de frases coletadas (com os respectivos comprimentos e os n&uacute;meros de ocorr&ecirc;ncias da palavra &lsquo;desculpe&rsquo;), determine o n&uacute;mero m&aacute;ximo de vezes que a palavra aparece, utilizando apenas as frases colecionadas, sem repet&iacute;-las.</p>

<h3>Entrada</h3>

<p>A entrada &eacute; constitu&iacute;da de v&aacute;rios casos de teste. A primeira linha de um caso de teste cont&eacute;m dois n&uacute;meros inteiros C e F indicando respectivamente o comprimento do cart&atilde;o em caracteres (<code>8 &lt;= C &lt;= 1000</code>) e o n&uacute;mero de frases coletadas (<code>1 &lt;= F &lt;= 50</code>). Cada uma das F linhas seguintes descreve uma frase coletada. A descri&ccedil;&atilde;o &eacute; composta por dois inteiros N e D que indicam respectivamente o n&uacute;mero de caracteres na frase (<code>8 &lt;= N &lt;= 200</code>) e quantas vezes a palavra &lsquo;desculpe&rsquo; ocorre na frase (<code>1 &lt;= D &lt;= 25</code>). O final da entrada &eacute; indicado por <code>C = F = 0</code>.</p>

<h3>Sa&iacute;da</h3>

<p>Para cada caso de teste seu programa deve produzir tr&ecirc;s linhas na sa&iacute;da. A primeira identifica o conjunto de teste no formato &ldquo;Teste n&rdquo;, onde n &eacute; numerado a partir de 1. A segunda linha deve conter o m&aacute;ximo n&uacute;mero de vezes que a palavra &lsquo;desculpe&rsquo; pode aparecer no cart&atilde;o, considerando que apenas frases coletadas podem ser utilizadas, e cada frase n&atilde;o &eacute; utilizada mais de uma vez. A terceira linha deve ser deixada em branco. A grafia mostrada no Exemplo de Sa&iacute;da, abaixo, deve ser seguida rigorosamente.</p>

<h3>Exemplo</h3>

<pre><strong>Entrada:</strong>

200 4

100 4

100 1

120 2

80 5

40 3

10 1

10 1

20 2

0 0



<strong>Sa&iacute;da:</strong>

Teste 1

9



Teste 2

4



</pre>

<h3>Restri&ccedil;&otilde;es</h3>

<pre><code>8 &lt;= C &lt;= 1000</code> (C = 0 apenas para indicar o fim da entrada)

<code>1 &lt;= F &lt;= 50</code> (S = 0 apenas para indicar o fim da entrada)

<code>8 &lt;= N &lt;= 200</code>

<code>1 &lt;= D &lt;= 25</code>

</pre>

</p>
