<p align="justify">

<p>
Toda semana Juquinha tem aulas de ACM (Artes Cênicas e Musicais) no colégio em que estuda e, recentemente,
sua professora anunciou que haverá uma gincana no nal do semestre. No entanto, os times devem ser formados
o mais breve possível para que os alunos possam ensaiar.</p>
<p>
Cada time é constituído de um ou mais alunos, e cada aluno tem que pertencer a exatamente um time. Além
disso, os times não podem ser formados de qualquer maneira: se um aluno é amigo de outro, esses alunos devem
estar no mesmo time. A professora então pediu para que os alunos a informassem das relações de amizade na
sala de aula.</p>
<p>
Os alunos então se numeraram de 1 até N e escreveram uma lista cujas linhas contém pares de números. Se
dois alunos cujos números são i e j são amigos, haverá ao menos uma linha contendo i e j ou j e i na lista.
Inversamente, se há uma linha contendo i e j na lista, então os alunos cujos números são i e j são amigos.</p>
<p>
A professora então recolheu a lista e, na próxima aula, deverá decidir que times formar. Ela está pensando
em formar o maior número possível de times e gostaria de saber quantos times ela formaria. Ajude então a
professora escrevendo um programa que, dada a lista de amizades, determina qual o maior número de times que
ela pode formar.</p>

<h3>Entrada</h3>
<p>
A primeira linha da entrada contém dois inteiros N e M que representam, respectivamente, o número de alunos
na turma e o número de linhas na lista.
As próximas M linhas contêm a lista de amizades. Cada linha contém dois inteiros I e J separados por
exatamente um espaço.</p>
<h3>Saída</h3>
<p>
Seu programa deve imprimir uma linha contendo o número máximo de times que podem ser formados pela
professora.
</p>

<h3>Restrições</h3>
<ul>
<li> 1 &le; N &le; 1000</li>
<li> 0 &le; M &le; 5000</li>
<li> 1 &le; I, J &le; N</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
<tr><td valign="top" width="50%">
<b>Entrada</b>
<pre>
3 1
1 3
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
7 6
1 6
6 4
5 2
3 7
2 3
7 2
</pre>
</td>
<td valign="top" width="50%">
<b>Saída</b>
<pre>
2
</pre>
</td></tr></table>

</p>
