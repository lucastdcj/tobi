<p align="justify">

<p>
Tacógrafos são dispositivos instalados em determinados tipos de veículos, que registram a velocidade, tempo e
distância percorrida por tal veículo. E utilizada principalmente em veículos de transporte coletivo e de transporte
de cargas, assim ajudando a evitar abusos de velocidade por parte dos motoristas.</p>
<p>
A empresa SBC (Sociedade Brasileira dos Caminhoneiros) decidiu encomendar uma versão um pouco mais
básica (e barata) para seus associados não precisarem gastar tanto na instalação desses aparelhos. Essas versões
modificadas registram apenas os intervalos de tempo e as velocidades médias do caminhão naqueles intervalos.</p>

<p>
Apesar das restrições dos aparelhos novos, a SBC quer poder saber qual foi a distância percorrida pelos caminhões. 
Você deverá escrever um programa que recebe uma série de intervalos de tempo com suas respectivas
velocidades médias e calcula qual foi a distância total percorrida pelo caminhão de acordo com o tacógrafo.</p>

<h3>Entrada</h3>
<p>
A primeira linha da entrada contém um inteiro N representando a quantidade de intervalos
de tempo registrados no tacógrafo. As N linhas seguintes descrevem os intervalos de tempo. Cada uma dessas
linhas possui dois inteiros T e V, que representam, respectivamente o tempo
decorrido (em horas) e a velocidade média (em quilômetros por hora) no intervalo de tempo.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir uma única linha, contendo um único número inteiro representando a distância
total percorrida, em quilômetros.
</p>

<h3>Restrições</h3>
<ul>
<li>1 &le; N &le; 1000</li>
<li>1 &le; T &le; 100</li>
<li>0 &le; V &le; 120</li>
</ul>

<h3>Informações sobre a pontuação</h3>
<ul>
<li>Em um conjunto de casos de teste que totaliza 20 pontos, N &le; 10.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3
10 0
55 12
75 120
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
9660
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
10
45 46
46 101
7 2
95 104
12 107
78 29
10 26
52 86
13 79
1 107
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
26022
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
8
37 24
68 69
28 26
79 8
36 0
50 71
13 68
87 113
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
21205
</pre>
</td></tr></table>

</p>
