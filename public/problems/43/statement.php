<p align="justify">

<p>
Os dentistas são extremamente meticulosos em seu trabalho, tendo que agir com muita precisão em todas as
suas atividades. Pedro é um dentista meticuloso como todos os outros. Infelizmente sua secretária não é muito
organizada e, com o intuito de ajudar sempre os pacientes, aceita que eles marquem consultas no horário que
quiserem, sem se preocupar com os demais horários marcados, ocasionando vários conflitos de horários que
muito incomodaram Pedro e os pacientes. Por exemplo, se uma consulta começar às 9 horas e durar 2 horas,
nenhuma outra consulta deveria ser marcada para iniciar as 10 horas.</p>
<p>
Ao perceber que sua agenda tinha con?ito de horários, Pedro pediu sua ajuda para descobrir a maior quantidade
de consultas que podem ser atendidas sem sobreposição.</p>
<p>
Você deve escrever um programa que, dados os horários de início e término das consultas agendadas pela
secretária, responda a quantidade máxima de consultas que podem ser atendidas sem sobreposição.</p>




<h3>Entrada</h3>
<p>
A primeira linha da entrada contém um inteiro N que indica quantas consultas a secretária
marcou. Cada uma das N linhas seguintes contém um par de inteiros X e Y separados por um espaço em
branco que representam, respectivamente, o horário de início e de término da
consulta. Considere que se uma consulta inicia no exato instante em que outra termina não há sobreposição. Os
horários de início são fornecidos em ordem, podendo haver mais de uma consulta que inicie no mesmo horário.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir uma única linha, contendo um inteiro que representa a quantidade máxima de
consultas que podem ser atendidas sem que haja qualquer sobreposição.
</p>

<h3>Restrições</h3>
<ul>
<li>1 &le; N &le; 10<sup>4</sup></li>
<li>1 &le;  X < Y &le; 10<sup>6</sup></li>

</ul>

<h3>Informações sobre a pontuação</h3>
<ul>
<li> Em um conjunto de casos de teste que totaliza 40 pontos 0 &le; X < Y &le; 1.000.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3
10 100
40 130
120 200
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
2
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
4
10 20
20 30
30 40
40 50
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
4
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
5
10 30
20 40
30 60
40 80
60 100
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
3
</pre>
</td></tr></table>

</p>
