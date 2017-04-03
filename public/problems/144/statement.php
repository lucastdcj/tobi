<p align="justify">

Desde que o arquiteto Frank Gehry projetou o Museu Guggenheim de Bilbao, os museus tem sido construidos
com formas cada vez mais complexas, fugindo de padroes pre-estabelecidos e de simetrias. Um tipico museu
moderno e composto por um conjuto de salas ligadas por corredores e escadas, sem preocupacao com a predefinicao de caminhos a serem seguidos pelas pessoas.

Henriqueta e uma professora do ensino fundamental que deseja visitar o museu da Ordem Brasileira de
Medicina (OBM) para mostrar aos seus alunos de ciencias como o corpo humano funciona e como as cirurgias
eram feitas nos seculos XIX e XX. Henriqueta quer planejar uma visita pelas salas do museu, obedecento as
seguintes restricoes:
<ul>
<li> a visita deve comecar e terminar em uma mesma sala; </li>
<li> exceto a sala de partida, nenhuma sala do museu pode ser visitada mais de uma vez;
<li> a visita deve incluir pelo menos duas salas;</li>
<li> os corredores sao unidirecionais, ou seja, as pessoas podem caminhar, em um corredor, apenas em uma
direcao. </li>
<li> a visita deve tomar o menor tempo possivel. </li>
</ul>

Um estudo preliminar, realizado pelo proprio museu, indica o tempo medio que cada visitante fica em uma
sala e quanto tempo leva-se para atravessar um corredor ou uma escada. Henriqueta quer a sua ajuda para
calcular o tempo total da menor visita que ela pode efetuar, obedecendo as restricoes dadas.

<h3> Tarefa </h3>
Escreva um programa que, dados um conjunto de salas, um conjunto de corredores e escadas que ligam essas
salas e o tempo necessario para percorrer cada sala e cada corredor, determine qual e o menor tempo possivel
para uma visita. Note que o tempo de visita da sala onde a visita se inicia deve ser contado apenas uma vez.

<h3> Entrada </h3>
A entrada contem um unico conjunto de testes, que deve ser lido do dispositivo de entrada padr
ao (normalmenteo teclado). A primeira linha da entrada contem dois inteiros S e C, que indicam, respectivamente, o numero
de salas (1 <= S <= 1000) e o numero de corredores e escadas (1 <= C <= 1000). As salas sao numeradas de 1 a
S. A segunda linha contem S inteiros representando o tempo gasto para percorrer cada sala. Cada uma das C
linhas seguintes descreve um corredor ou escada. A descricao e composta por tres inteiros, I, F e T , indicando
que o corredor somente pode ser percorrido da sala I (1 <= I <= N ) para a sala F (1 <= F <= N ) no tempo T
(1 <= T <= 1000). O tempo total maximo e sempre menor ou igual a 1000000.

<h3> Saida </h3>
Seu programa deve imprimir, na saida padrao, uma unica linha contendo o tempo gasto na visita de menor
duracao que Henriqueta pode realizar no museu. Existe pelo menos uma visita que atende as restricoes impostas.

<h3> Exemplos </h3>
<pre>

Entrada
2 2
1 1
1 2 1
2 1 3

Saída
6

Entrada
5 5
5 5 10 10 5
1 2 1
2 3 1
5 1 1
3 4 1
4 1 1
5 2 1

Saída
34
</pre>

</p>
