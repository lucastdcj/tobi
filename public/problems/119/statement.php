<p align="justify">

<p>A sua turma do colégio resolveu organizar um campeonato de tetris. Após discuss&#227;o sobre as

regras, &#64257;cou de&#64257;nido que cada aluno jogaria um total de 12 partidas. Das 12 pontuaç&#245;es obtidas

por um aluno, a maior e a menor s&#227;o descartadas, e as demais s&#227;o somadas, resultando na pontuaç&#227;o &#64257;nal do aluno.</p>

<h3>Tarefa</h3>

<p>Como voc&#234; possui conhecimentos de programaç&#227;o, acabou sendo designado pela turma para

escrever um programa para imprimir a classi&#64257;caç&#227;o &#64257;nal do campeonato, a partir das pontuaç&#245;es

de cada jogador.</p>

<h3>Entrada</h3>

<p>A entrada é composta de vários conjuntos de teste. A primeira linha de um conjunto de testes

contém um número inteiro J, que indica o número de jogadores que participaram do campeonato. A seguir, para cada jogador há duas linhas na entrada: a primeira possui o nome do jogador (formado apenas por letras, sendo apenas a inicial em maiúscula, e com no máximo 15 letras),

e a segunda possui as 12 pontuaç&#245;es que o jogador obteve, separadas por espaço. As pontuaç&#245;es

s&#227;o inteiros entre 0 e 1000. O &#64257;nal da entrada é indicado por um conjunto de teste com <code>J = 0</code>.</p>

<h3>Saída</h3>

<p>Para cada conjunto de teste, o seu programa deve escrever uma linha contendo o identi&#64257;cador do

conjunto de teste, no formato &#8220;Teste n&#8221;, onde n é numerado seqüencialmente a partir de 1. A

seguir, o seu programa deve escrever a classi&#64257;caç&#227;o &#64257;nal no campeonato, utilizando uma linha

para cada participante. Cada linha deve conter tr&#234;s informaç&#245;es, separadas por um espaço em

branco: a classi&#64257;caç&#227;o do jogador, a sua pontuaç&#227;o &#64257;nal, e o seu nome. A classi&#64257;caç&#227;o de um

jogador é igual a 1 mais o número de jogadores que obtiveram pontuaç&#227;o maior do que a sua. Em

caso de empate, os jogadores devem ser ordenados em ordem alfabética. Depois de toda a classi&#64257;caç&#227;o, deve ser deixada uma linha em branco. O formato do exemplo de saída abaixo deve ser

seguido rigorosamente.</p>

<h3>Exemplo</h3>

<pre>

<b>Entrada:</b>

4

Zezinho

100 123 133 333 400 300 129 200 360 340 200 600

Luizinho

60 50 120 250 170 190 190 220 260 270 290 300

Carlinhos

10 10 20 10 10 10 10 20 20 20 20 20

Joaozinho

200 300 400 400 500 500 500 600 650 650 700 810

3

Pedrinho

100 100 200 200 300 300 400 400 500 500 600 600

Huguinho

50 100 200 200 300 300 500 500 400 400 600 700

Zezinho

100 100 100 100 100 100 100 100 100 100 100 100

0



<b>Saída:</b>

Teste 1

1 5200 Joaozinho

2 2518 Zezinho

3 2020 Luizinho

4 150 Carlinhos



Teste 2

1 3500 Huguinho

1 3500 Pedrinho

3 1000 Zezinho



</pre>



<h3>Restriç&#245;es</h3>

<p><code>0 <= J <= 1000</code> (J = 0 apenas para indicar &#64257;nal da entrada)<br>

<code>0 <= pontuaç&#227;o em uma partida <= 1000</code> <br>

<code>1 <= tamanho dos nomes, em número de letras <= 15</code></p>





</p>
