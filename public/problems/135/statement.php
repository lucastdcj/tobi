<p align="justify">

Monopolio (conhecido no Brasil como Banco Imobiliario) e um dos jogos mais famosos do mundo, com 750
milhoes de copias vendidas. Durante o jogo, os jogadores podem comprar propriedades que estejam disponiveis,
vende-las para que elas voltem a ficar disponiveis, e cobrar aluguel pelo uso de uma determinada propriedade
por outro jogador. O objetivo do jogo e acumular a maior quantidade de dinheiro possivel.
O jogo e composto por um tabuleiro e um conjunto de cedulas de dinheiro. Tres amigos, Dalia, Eloi e Felix,
querem jogar uma partida de Monopolio, mas o irmaozinho menor de Dalia escondeu as cedulas de dinheiro. Os
tres amigos decidiram jogar a partida assim mesmo, anotando em um papel todas as operacoes que ocorreram
durante o jogo (compras, vendas e pagamentos de alugueis). Assim que eles pararam de jogar, perceberam que
levaria muito tempo para descobrir quanto dinheiro cada um acumulou. Eles entao pediram sua ajuda para
determinar esses valores.

<h3>Tarefa</h3>
Sua tarefa e escrever um programa que, a partir dos registros de jogadas realizados pelos tres jogadores, determine a quantidade de dinheiro acumulada por cada um dos jogadores.

<h3>Entrada</h3>
A entrada contem um unico conjunto de testes, que deve ser lido do dispositivo de entrada padrao (normalmente
o teclado). A primeira linha da entrada contem dois inteiros, I e N que indicam respectivamente as quantias de
dinheiro que Dalia, Eloi e Felix possuem no inicio do jogo (1 <= I <= 1000000) e o numero de operacoes realizadas
durante o jogo (1 <= N <= 10000). Note que os tres jogadores iniciam a partida com a mesma quantidade de
dinheiro. Os jogadores sao representados na entrada sempre pela letra inicial de seu nome (`D', `E' ou `F'). As
N linhas contem as operacoes ocorridas durante o jogo. Cada linha pode ter um dos formatos abaixo:
<ul>
<li>Compra -- a letra C, seguida da letra inicial de um jogador J e de um inteiro X que representa o valor
gasto por J na compra (0 < X < 1000000). Exemplo: `C D 1000'. </li>
<li> Venda -- a letra V, seguida da letra inicial de um jogador J e de um inteiro X que representa o valor
recebido por J na venda (0 < X  1000000). Exemplo: `V E 200'. </li>
<li> Aluguel -- a letra A, seguida da letra inicial de um jogador J que recebe o aluguel, da letra inicial do jogador
K que paga o aluguel e de um inteiro X que representa o valor do aluguel (J = K e 0 < X < 1000000).</li>
</ul>

Exemplo: `A F D 500'.
Os valores intermediarios e totais acumulados por cada jogador estao entre 0 e 1000000.

<h3>Saida</h3>
Seu programa deve imprimir, na saida padrao, uma u nica linha composta de tres inteiros que correspondem a
quantidade de dinheiro acumulada por Dalia, Eloi e Felix, nesta ordem

<pre>
<strong>Entrada</strong>
1000 1
C D 500

<strong>Saida</strong>
500 1000 1000


<strong>Entrada</strong>
1000 3
C D 100
V E 200
A D F 1000

<strong>Saida</strong>
1900 1200 0

<strong>Entrada</strong>
10000 5
C D 5000
C E 3000
A D F 1000
V E 4000
A F E 1000

<strong>Saida</strong>
6000 10000 10000

</pre>


</p>
