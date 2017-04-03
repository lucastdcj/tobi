<p align="justify">

<p>Em noites sem nuvens pode-se muitas vezes observar pontos

brilhantes no céu que se deslocam com grande velocidade, e em poucos

segundos desaparecem de vista: s&#227;o as chamadas estrelas cadentes, ou

<em>meteoros</em>. Meteoros s&#227;o na verdade partículas de poeira de

pequenas dimens&#245;es que, ao penetrar na atmosfera terrestre, queimam-se

rapidamente (normalmente a uma altura entre <code>60</code> <code>120</code> quilômetros). Se os

meteoros s&#227;o suficientemente grandes, podem n&#227;o queimar-se

completamente na atmosfera e dessa forma atingem a superfície

terrestre: nesse caso s&#227;o chamados de <em>meteoritos</em>.</p>



<p>Zé Felício é um fazendeiro que adora astronomia e descobriu um

portal na Internet que fornece uma lista das posiç&#245;es onde caíram

meteoritos. Com base nessa lista, e conhecendo a localizaç&#227;o de sua

fazenda, Zé Felício deseja saber quantos meteoritos caíram dentro de

sua propriedade. Ele precisa de sua ajuda para escrever um programa de

computador que faça essa verificaç&#227;o automaticamente.</p>



<h3>Tarefa</h3>



<p>S&#227;o dados:

<ul>

<li>uma lista de pontos no plano cartesiano, onde cada ponto

corresponde &#224; posiç&#227;o onde caiu um meteorito;</li> 

<li>as coordenadas de um retângulo que delimita uma fazenda.</li>

</ul></p>



<p>As linhas que delimitam a fazenda s&#227;o paralelas aos eixos

cartesianos. Sua tarefa é escrever um programa que determine quantos

meteoritos caíram dentro da fazenda (incluindo meteoritos que caíram

exatamente sobre as linhas que delimitam a fazenda).</p>



<h3>Entrada</h3>



<p>Seu programa deve ler vários conjuntos de testes. A primeira linha

de um conjunto de testes quatro números inteiros <code>X1</code>, <code>Y1</code>, <code>X2</code> e <code>Y2</code>, onde

<code>(X1, Y1)</code> é a coordenada do canto superior esquerdo e <code>(X2, Y2)</code> é a

coordenada do canto inferior direito do retângulo que delimita a

fazenda. A segunda linha contém um inteiro, <code>N</code>, que indica o número de

meteoritos. Seguem-se <code>N</code> linhas, cada uma contendo dois números

inteiros <code>X</code> e <code>Y</code>, correspondendo &#224;s coordenadas de cada meteorito. O

final da entrada é indicado por <code>X1 = Y1 = X2 = Y2 = 0</code>.</p>



<pre>

<b>Exemplo de entrada</b>

2 4 5 1

2

1 2

3 3

2 4 3 2

3

1 1

2 2

3 3

0 0 0 0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas na saída. A primeira linha deve conter um identificador do

conjunto de teste, no formato &#8220;<code>Teste n</code>&#8221;, onde <code>n</code> é numerado a

partir de <code>1</code>. A segunda linha deve conter o número de meteoritos que

caíram dentro da fazenda.  A terceira linha deve ser deixada em

branco. A grafia mostrada no Exemplo de Saída, abaixo, deve ser

seguida rigorosamente.</p>



<pre>

<b>Exemplo de saída</b>

Teste 1

1



Teste 2

2

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)



<h3>Restriç&#245;es</h3>

<p>0 &le; N &le; 10.000<br/>

0 &le; X &le; 10.000<br/>

0 &le; Y &le; 10.000<br/>

0 &le; X1 < X2 &le; 10.000<br/>

0 &le; Y2 < Y1 &le; 10.000<br/></p>


</p>
