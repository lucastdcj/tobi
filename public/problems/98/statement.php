<p align="justify">

<p>Nos finais de semana Paulo faz longas caminhadas pelas bonitas trilhas que atravessam as matas vizinhas &#224; sua cidade. Recentemente Paulo adquiriu um aparelho de GPS (siglas do ingl&#234;s Sistema de Posicionamento Global) e com ele mapeou as mais belas trilhas da regi&#227;o. Paulo programou o                                                                             GPS para armazenar, a intervalos regulares, a altitude do ponto corrente durante o trajeto. Assim,

após percorrer as trilhas com o seu GPS, Paulo tem informaç&#245;es que permitem por exemplo produzir gráficos como os abaixo:</p>



<p><img src="https://www.spoj.pl/content/wanderley:trilhas.png"/>



<p>Paulo tem uma nova namorada, e quer convenc&#234;-la a passear junto com ele pelas trilhas. Para o primeiro passeio juntos, Paulo quer escolher uma trilha &#8220;fácil&#8221;. Segundo o seu critério, a trilha mais fácil é a que, em um dos sentidos do percurso, exige o menor esforço de subida. O esforço exigido em um trecho de subida é proporcional ao desnível do trecho.</p>



<h3>Tarefa</h3>



<p>Dadas as informaç&#245;es colhidas por Paulo sobre distâncias e altitudes de um conjunto de trilhas, voc&#234; deve escrever um programa que determine qual é a trilha que exige o menor esforço de subida.



<h3>Entrada</h3>



<p>A primeira linha da entrada contém um número inteiro N que indica o número de trilhas. Cada uma das N linhas seguintes contém a descriç&#227;o de uma trilha (1 <= N <= 100). As trilhas s&#227;o identificadas por números de 1 a N. A ordem em que as trilhas aparecem na entrada determina os seus identificadores (a primeira trilha é a de número 1, a segunda a de número 2, a última a de número N). A descriç&#227;o de uma trilha inicia com um número inteiro M que indica a quantidade de pontos de mediç&#227;o da trilha (2 <= M <= 1000), seguido de M números inteiros Hi representando a altura dos pontos da trilha (medidos a intervalos regulares e iguais para todas as linhas). Paulo pode percorrer a trilha em qualquer sentido (ou seja, partindo do ponto de altitude H1 em direç&#227;o ao ponto de altitude HM, ou partindo do ponto de altitude HM em direç&#227;o ao ponto de altitude H1).</p>



<h3>Saída</h3>



<p>Seu programa deve produzir uma unica linha na saída,

contendo um número inteiro representando o identificador da melhor trilha, conforme determinado pelo seu programa. Em caso de empate entre duas ou mais trilhas, imprima a de menor identificador.</p>



<table width="100%" align="center">

<tr>

<td>

<h3>Exemplo 1</h3>

<pre>

<b>Entrada:</b>

5

4 498 500 498 498

10 60 60 70 70 70 70 80 90 90 100

5 200 190 180 170 160

2 1000 900

4 20 20 20 20



<b>Saída:</b>

2

</pre>

</td>



<td>

<h3>Exemplo 2</h3>

<pre>

<b>Entrada:</b>

3

5 600 601 600 601 600

4 500 499 500 499

4 300 300 302 300



<b>Saída:</b>

2

</pre>

</td>

</tr>

</table>



<b><p>Restriç&#245;es</p></b>

<p>1 <= N <= 100<br>

2 <= M <= 1000<br>

0 <= Hi <= 1000<br></p>


</p>
