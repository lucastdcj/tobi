<p align="justify">

<p>A distribuiç&#227;o de energia para as diversas regi&#245;es do país exige um investimento muito grande em linhas de transmiss&#227;o e estaç&#245;es transformadoras. Uma linha de transmiss&#227;o interliga duas estaç&#245;es

transformadoras. Uma estaç&#227;o transformadora pode estar interligada a uma ou mais outras estaç&#245;es

transformadoras, mas devido ao alto custo n&#227;o pode haver mais de uma linha de transmiss&#227;o interligando duas estaç&#245;es.</p>



<p>As estaç&#245;es transformadoras s&#227;o interconectadas de forma a garantir que a energia possa ser distribuída entre qualquer par de estaç&#245;es. Uma rota de energia entre duas estaç&#245;es <code>e<sub>1</sub></code> e <code>e<sub>k</sub></code> é de&#64257;nida como uma sequ&#234;ncia (<code>e<sub>1</sub> , l<sub>1</sub> , e<sub>2</sub> , l<sub>2</sub> , ...e<sub>k&#8722;1</sub> , l<sub>k&#8722;1</sub> , e<sub>k</sub></code> ) onde cada <code>e<sub>i</sub></code> é uma estaç&#227;o transformadora e cada l<sub>i</sub> é uma linha de transmiss&#227;o que conecta <code>e<sub>i</sub></code> <code>e<sub>i+1</sub></code>.</p>



<p>Os engenheiros de manutenç&#227;o do sistema de transmiss&#227;o de energia consideram que o sistema

está em estado normal se há pelo menos uma rota entre qualquer par de estaç&#245;es, e em estado de

falha caso contrário.</p>



<p>Um grande tornado passou pelo país dani&#64257;cando algumas das linhas de transmiss&#227;o, e os engenheiros de manutenç&#227;o do sistema de transmiss&#227;o de energia necessitam de sua ajuda.</p>



<h3>Tarefa</h3>

<p>Dada a con&#64257;guraç&#227;o atual do sistema de transmiss&#227;o de energia, descrevendo as interconex&#245;es existentes entre as estaç&#245;es, escreva um programa que determine o estado do sistema.</p>





<h3>Entrada</h3>

<p>A entrada é composta de vários casos de teste. A primeira linha de um caso de teste contém dois

números inteiros E e L indicando respectivamente o número de estaç&#245;es <code>(3 &#8804; E &#8804; 100)</code> e o número

de linhas de transmiss&#227;o do sistema <code>(E &#8722; 1 &#8804; L &#8804; E × (E &#8722; 1)/2)</code> que continuam em funcionamento

após o tornado. As estaç&#245;es s&#227;o identi&#64257;cadas por números de 1 a E. Cada uma das L linhas seguintes

contém dois inteiros X e Y que indicam que existe uma linha de transmiss&#227;o interligando a estaç&#227;o

X &#224; estaç&#227;o Y. O &#64257;nal da entrada é indicado por E = L = 0.</p>

<p>A entrada deve ser lida do dispositivo de entrada padr&#227;o.</p>



<h3>Saída</h3>

<p>Para cada caso de teste seu programa deve produzir tr&#234;s linhas na saída. A primeira identi&#64257;ca o

conjunto de teste no formato &#8220;Teste n&#8221;, onde n é numerado a partir de 1. A segunda linha deve conter a palavra &#8220;normal&#8221;, se, para cada par de estaç&#245;es, houver uma rota que as conecte, e a palavra &#8220;falha&#8221; caso n&#227;o haja uma rota entre algum par de estaç&#245;es. A terceira linha deve ser deixada em branco. A gra&#64257;a mostrada no Exemplo de Saída, abaixo, deve ser seguida rigorosamente.</p>



<p>A saída deve ser escrita no dispositivo de saída padr&#227;o.</p>



<h3>Exemplos</h3>



<pre>

<b>Entrada:</b>

6 7

1 2

2 3

3 4

4 5

5 6

6 2

1 5

4 3

1 2

4 2

1 4

0 0



<b>Saida:</b>

Teste 1

normal



Teste 2

falha

</pre>



<h3>Restriç&#245;es</h3>



<pre><code>3 <= E <= 100</code>

<code>E &#8722; 1 <= L <= E × (E &#8722; 1)/2</code>

</pre>


</p>
