<p align="justify">

<p>Uma placa de aço retangular contém N furos circulares de 5 mm de

diâmetro, localizados em pontos distintos, n&#227;o sobrepostos -- ou seja,

o centro de cada furo está a uma distância maior ou igual a 5 mm do

centro de todos os outros furos.</p>



<p>Uma peça de forma circular, tendo em seu centro um eixo de 5 mm de

diâmetro, deve ser colocada sobre a placa, de modo que o eixo

encaixe-se em um de seus furos.</p>



<p><img src="https://www.spoj.pl/content/wanderley:cubraosfuros1.jpg"/> <img src="https://www.spoj.pl/content/wanderley:cubraosfuros2.jpg"/>





<h3>Tarefa</h3>



<p>Voc&#234; deve escrever um programa para determinar o diâmetro mínimo

que a peça deve ter de tal forma que, com seu eixo encaixado em um dos

furos da placa, a parte circular cubra completamente todos os outros

furos da placa.</p>



<h3>Entrada</h3>



<p>A entrada é composta de vários conjuntos de teste. A primeira linha

de um conjunto de teste contém um inteiro N, que indica o número de

furos na placa de aço (<code>1 <= N <= 1000</code>). As N linhas seguintes cont&#234;m

cada uma dois inteiros X e Y , separados por um espaço em branco, que

descrevem a posiç&#227;o do centro de um furo (<code>-10000 <= X <= 10000</code> e <code>-10000

<= Y <= 10000</code>). A unidade de medida das coordenadas dos furos é 1 mm. O

final da entrada é indicado por <code>N = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

3

20 25

10 5

10 10

3

0 5

10 0

0 10

0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas na saída. A primeira linha deve conter um identificador do

conjunto de teste, no formato "Teste n", onde n é numerado

seqüencialmente a partir de 1. A segunda linha deve conter o diâmetro

mínimo que a peça deve ter, como um número inteiro. A terceira linha

em deve ser deixada em branco. A grafia mostrada no Exemplo de Saída,

abaixo, deve ser seguida rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

42



Teste 2

28

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>



<p><code>0 <= N <= 1000</code> (N = 0 apenas para indicar o fim da entrada)<br/>

<code>-10000 <= X <= 10000</code><br/>

<code>-10000 <= Y <= 10000</code></p>



</p>
