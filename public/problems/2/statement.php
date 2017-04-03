<p align="justify">

<p>
Dois times, Cormengo e Flaminthians, participam de um campeonato de futebol, juntamente com outros times.
Cada vitória conta três pontos, cada empate um ponto. Fica melhor classificado no campeonato um time que
tenha mais pontos. Em caso de empate no número de pontos, fica melhor classificado o time que tiver maior
saldo de gols. Se o número de pontos e o saldo de gols forem os mesmos para os dois times então os dois times
estão empatados no campeonato.
Dados os números de vitórias e empates, e os saldos de gols dos dois times, sua tarefa é determinar qual dos
dois está melhor classificado, ou se eles estão empatados no campeonato.</p>

<h3>Entrada</h3>
<p>
A entrada é descrita em uma única linha, que contém seis inteiros, separados por um espaço em branco:
C<sub>v</sub>, C<sub>e</sub>, C<sub>s</sub>, F<sub>v</sub>, F<sub>e</sub> e F<sub>s</sub>, que são, respectivamente, o número de vitórias do Cormengo, o número de empates do
Cormengo, o saldo de gols do Cormengo, o número de vitórias do Flaminthians, o número de empates do
Flaminthians e o saldo de gols do Flaminthians.</p>

<h3>Saída</h3>
<p>
Seu programa deve imprimir uma única linha. Se Cormengo é melhor classificado que Flaminthians, a linha
deve conter apenas a letra 'C', se Flaminthians é melhor classificado que Cormengo, a linha deve conter apenas
a letra 'F', e se os dois times estão empatados a linha deve conter apenas o caractere '='.
</p>


<h3>Restrições</h3>
<ul>
<li>0 &le; C<sub>v</sub>, C<sub>e</sub>, F<sub>v</sub>, F<sub>e</sub>  &le; 100</li>
<li>-1000 &le; C<sub>s</sub>,  F<sub>s</sub> &le; 1000</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
10 5 18 11 1 18
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
C
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
10 5 18 11 2 18
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
=
</pre>
</td></tr></table>

<p></p>
<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
9 5 -1 10 2 10
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
F
</pre>
</td></tr></table>

</p>
