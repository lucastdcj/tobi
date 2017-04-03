<p align="justify">

<p>Hipólito é um torcedor fanático. Coleciona flâmulas, bandeiras,

recortes de jornal, figurinhas de jogadores, camisetas e tudo o mais

que se refira a seu time preferido. Quando ganhou um computador de

presente em uma festa, resolveu montar um banco de dados com os

resultados de todos os jogos de seu time ocorridos desde a sua

fundaç&#227;o, em 1911. Depois de inseridos os dados, Hipólito começou a

ficar curioso sobre estatísticas de desempenho do time. Por exemplo,

ele deseja saber qual foi o período em que o seu time acumulou o maior

saldo de gols. Como Hipólito tem o computador há muito pouco tempo,

n&#227;o sabe programar muito bem, e precisa de sua ajuda.



<h3>Tarefa</h3> 

<p>É dada uma lista, numerada seqüencialmente a partir de

1, com os resultados de todos os jogos do time (primeira partida: 3 x

0, segunda partida: 1 x 2, terceira partida: 0 x 5 ...). Sua tarefa é

escrever um programa que determine em qual período o time conseguiu

acumular o maior saldo de gols. Um período é definido pelos números de

seqü&#234;ncia de duas partidas, A e B, onde A &#8804; B. O saldo de gols

acumulado entre A e B é dado pela soma dos gols marcados pelo time em

todas as partidas realizadas entre A e B (incluindo as mesmas) menos a

soma dos gols marcados pelos times adversários no período. Se houver

mais de um período com o mesmo saldo de gols, escolha o maior período

(ou seja, o período em que B - A é maior). Se ainda assim houver mais

de uma soluç&#227;o possível, escolha qualquer uma delas como resposta.



<h3>Entrada</h3>

<p>Seu programa deve ler vários conjuntos de teste. A primeira linha

de um conjunto de teste contém um inteiro n&#227;o negativo, <code>N</code>, que indica

o número de partidas realizadas pelo time (o valor <code>N = 0</code> indica o

final da entrada). Seguem-se <code>N</code> linhas, cada uma contendo um par de

números inteiros n&#227;o negativos <code>X</code> e <code>Y</code> que representam o resultado da

partida: <code>X</code> s&#227;o os gols a favor e <code>Y</code> os gols contra o time de

Hipólito. As partidas s&#227;o numeradas sequencialmente a partir de 1, na

ordem em que aparecem na entrada.



<h3>Saída</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas na saída. A primeira linha deve conter um identificador do

conjunto de teste, no formato <code>&#8220;Teste n&#8221;</code>, onde <code>n</code> é numerado a

partir de 1. A segunda linha deve conter um par de inteiros <code>I</code> e <code>J</code> que

indicam respectivamente a primeira e última partidas do melhor

período, conforme determinado pelo seu programa, exceto quando o saldo

de gols do melhor período for menor ou igual a zero; neste caso a

segunda linha deve conter a express&#227;o <code>&#8220;nenhum&#8221;</code>. A terceira linha

deve ser deixada em branco. A grafia mostrada no Exemplo de Saída,

abaixo, deve ser seguida rigorosamente.



<h3>Exemplo</h3>



<pre>

<b>Entrada:</b>

2

2 3

7 1

9

2 2

0 5

6 2

1 4

0 0

5 1

1 5

6 2

0 5

3

0 2

0 3

0 4

0



<b>Saída:</b>

Teste 1

2 2



Teste 2

3 8



Teste 3

nenhum

</pre>



<h3>Restriç&#245;es</h3>

<p><code>0 &#8804; N &#8804; 10000</code> (N = 0 apenas para indicar o fim da entrada)<br/>

<code>1 &#8804; A &#8804; N </code><br/>

<code>A &#8804; B &#8804; N</code><br/>

<code>0 &#8804; X &#8804; 50</code><br/>

<code>0 &#8804; Y &#8804; 50</code><br/>



</p>
