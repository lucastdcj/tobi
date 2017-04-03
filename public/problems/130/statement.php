<p align="justify">

<p>Os caciques da regi&atilde;o de Tutua&ccedil;u pretendem integrar suas tribos &agrave; chamada &ldquo;aldeia global&rdquo;. A primeira provid&ecirc;ncia foi a distribui&ccedil;&atilde;o de telefones celulares a todos os paj&eacute;s. Agora, planejam montar uma rede de fibra &oacute;tica interligando todas as tabas. Esta empreitada requer que sejam abertas novas picadas na mata, passando por reservas de flora e fauna. Conscientes da necessidade de preservar o m&aacute;ximo poss&iacute;vel o meio ambiente, os caciques encomendaram um estudo do impacto ambiental do projeto. Ser&aacute; que voc&ecirc; consegue ajud&aacute;-los a projetar a rede de fibra &oacute;tica?</p>

<h3>Tarefa</h3>

<p>Vamos denominar uma liga&ccedil;&atilde;o de fibra &oacute;tica entre duas tabas de um ramo de rede. Para possibilitar a comunica&ccedil;&atilde;o entre todas as tabas &eacute; necess&aacute;rio que todas elas estejam interligadas, direta (utilizando um ramo de rede) ou indiretamente (utilizando mais de um ramo). Os caciques conseguiram a informa&ccedil;&atilde;o do impacto ambiental que causar&aacute; a constru&ccedil;&atilde;o dos ramos. Alguns ramos, no entanto, nem foram considerados no estudo ambiental, pois sua constru&ccedil;&atilde;o &eacute; imposs&iacute;vel.</p>

<p style="text-align: center;"><img src="http://www.spoj.pl/content/wanderley:redotica.jpg" alt="" /></p>

<p>Sua tarefa &eacute; escrever um programa para determinar quais ramos devem ser constru&iacute;dos, de forma a possibilitar a comunica&ccedil;&atilde;o entre todas as tabas, causando o menor impacto ambiental poss&iacute;vel.</p>

<h3>Entrada</h3>

<p>A entrada &eacute; composta de v&aacute;rios conjuntos de teste. A primeira linha de um conjunto de teste cont&eacute;m dois n&uacute;meros inteiros positivos <code>N</code> e <code>M</code> que indicam, respectivamente, o n&uacute;mero de tabas e o n&uacute;mero de ramos de redes poss&iacute;veis. As tabas s&atilde;o numeradas de <code>1</code> a <code>N</code>. As <code>M</code> linhas seguintes cont&ecirc;m tr&ecirc;s inteiros positivos <code>X</code>, <code>Y</code> e <code>Z</code>, que indicam que o ramo de rede que liga a taba <code>X</code> &agrave; taba <code>Y</code> tem impacto ambiental <code>Z</code>. Com os conjuntos de teste dados sempre &eacute; poss&iacute;vel interligar todas as tabas. O final da entrada &eacute; indicado quando <code>N = 0</code>.</p>

<h3>Sa&iacute;da</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir uma lista dos ramos de redes que devem ser constru&iacute;dos. A lista deve ser precedida de uma linha que identifica o conjunto de teste, no formato <code>"Teste n"</code>, onde <code>n</code> &eacute; numerado a partir de <code>1</code>. A lista &eacute; composta por uma sequ&ecirc;ncia de ramos a serem constru&iacute;dos, um ramo por linha. Um ramo &eacute; descrito por um par de tabas <code>X</code> e <code>Y</code> , com <code>X &lt; Y</code>. Os ramos de rede podem ser listados em qualquer ordem, mas n&atilde;o deve haver repeti&ccedil;&atilde;o. Se houver mais de uma solu&ccedil;&atilde;o poss&iacute;vel, imprima apenas uma delas. O final de uma lista de ramos deve ser marcado com uma linha em branco. A grafia mostrada no Exemplo de Sa&iacute;da, abaixo, deve ser seguida rigorosamente.</p>

<h3>Exemplo</h3>

<pre><strong>Entrada:</strong>

3 3

1 2 10

2 3 10

3 1 10

5 6

1 2 15

1 3 12

2 4 13

2 5 5

3 2 6

3 4 6

0 0



<strong>Sa&iacute;da:</strong>

Teste 1

1 2

1 3



Teste 2

1 3

2 3

2 5

3 4

</pre>

<h3>Restri&ccedil;&otilde;es</h3>

<p><code>0 &le; N &le; 100</code> (<code>N = 0</code> apenas para indicar o fim da entrada) <br /> <code>1 &le; M &le; N(N-1)/2</code> <br /> <code>1 &le; X &le; 100</code> <br /> <code>1 &le; Y &le; 100</code> <br /> <code>1 &le; Z &le; 100</code></p>


</p>
