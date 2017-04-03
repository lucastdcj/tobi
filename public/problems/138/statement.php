<p align="justify">

Na fazenda do Sr. Amarante existe um certo numero de ovelhas. Enquanto elas estao dormindo profundamente,
alguns lobos famintos tentam invadir a fazenda e atacar as ovelhas. Ovelhas normais ficariam indefesas diante de
tal ameaca, mas felizmente as ovelhas do Sr. Amarante sao praticantes de artes marciais e conseguem defender-se
adequadamente.
A fazenda possui um formato retangular e consiste de campos arranjados em linhas e colunas. Cada campo
pode conter uma ovelha (representada pela letra `k'), um lobo (letra `v'), uma cerca (simbolo `#') ou simplesmente estar vazio (simbolo `.'). Consideramos que dois campos pertencem a um mesmo pasto se podemos ir
de um campo ao outro atraves de um caminho formado somente com movimentos horizontais ou verticais, sem
passar por uma cerca. Na fazenda podem existir campos vazios que nao pertencem a nenhum pasto. Um campo
vazio nao pertence a nenhum pasto se e possivel "escapar" da fazenda a partir desse campo (ou seja, caso exista
um caminho desse campo ate a borda da fazenda).
Durante a noite, as ovelhas conseguem combater os lobos que estao no mesmo pasto, da seguinte forma: se
em um determinado pasto houver mais ovelhas do que lobos, as ovelhas sobrevivem e matam todos os lobos
naquele pasto. Caso contrario, as ovelhas daquele pasto sao comidas pelos lobos, que sobrevivem. Note que
caso um pasto possua o mesmo numero de lobos e ovelhas, somente os lobos sobreviverao, ja que lobos sao
predadores naturais, ao contrario de ovelhas.

<h3> Tarefa </h3> 
Escreva um programa que, dado um mapa da fazenda do Sr. Amarante indicando a posicao das cercas, ovelhas
e lobos, determine quantas ovelhas e quantos lobos estarao vivos na manha seguinte.

<h3> Entrada </h3>
A entrada contem um unico conjunto de testes, que deve ser lido do dispositivo de entrada padrao (normalmente o
teclado). A primeira linha da entrada contem dois inteiros R e C que indicam o numero de linhas (3 <= R <= 250)
e de colunas (3 <= C <= 250) de campos da fazenda. Cada uma das R linhas seguintes contem C caracteres,
representando o conteudo do campo localizado naquela linha e coluna (espaco vazio, cerca, ovelha ou lobo).

<h3> Saida </h3>
Seu programa deve imprimir, na saida padrao, uma unica linha, contendo dois inteiros, sendo que o primeiro
representa o numero de ovelhas e o segundo representa o numero de lobos que ainda estao vivos na manha
seguinte.

<h3> Exemplos </h3>
<pre>
Entrada
6 6
...#..
.##v#.
#v.#.#
#.k#.#
.###.#
...###

Saida
0 2

Entrada
8 8
.######.
#..k...#
#.####.#
#.#v.#.#
#.#.k#k#
#k.##..#
#.v..v.#
.######.

Saida
3 1

Entrada
9 12
.###.#####..
#.kk#...#v#.
#..k#.#.#.#.
#..##k#...#.
#.#v#k###.#.
#..#v#....#.
#...v#v####.
.####.#vv.k#
.......####

Saida
3 5
</pre>


</p>
