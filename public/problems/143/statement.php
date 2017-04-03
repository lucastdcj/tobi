<p align="justify">

Marlene esta jogando um passatempo de sua autoria. Ela possui um baralho com N cartas, numeradas de 1
a N , tal que nao existem duas cartas com o mesmo numero. O jogo consiste de varias rodadas, e sao utilizadas
tres pilhas denominadas Compra, Descarte e Morto. Inicialmente, as cartas sao embaralhadas e colocadas com
a face para cima, constituindo a pilha Compra (as pilhas Descarte e Morto estao inicialmente vazias). Marlene
entao tira as cartas da pilha Compra, uma a uma, e as coloca na pilha Descarte, com as faces para baixo, na
mesma ordem, ate encontrar a carta com o numero 1. Quando a encontra, Marlene a coloca na pilha Morto e
recomeca o processo de retirar cartas da pilha Compra, agora procurando a proxima carta na sequencia (2), e
o processo e repetido para as outras cartas na sequencia (3, 4, ...).
Quando as cartas da pilha Compra terminam, encerra-se uma rodada. Nesse momento, Marlene vira a
pilha Descarte de modo que as cartas fiquem com a face para cima (sem reembaralhar) e a coloca no lugar da
pilha Compra. Inicia-se uma nova rodada, e processo recomeca, com Marlene procurando a proxima carta na
sequencia.
Repete-se esse processo ate que a carta removida do baralho seja a de n
umero N , quando o jogo acaba. O resultado do jogo e o numero de rodadas. <br />
<pre>
<strong> Primeira Rodada </strong>
Compra 
1 3 2
3 2
2

Descarte


3
3

Morto

1
1
1 2


Fim da primeira rodada

<strong> Segunda Rodada </strong>
Compra
3

Descarte

Morto

1 2
1 2 3

Fim do jogo. Houve duas rodadas.
</pre>

<h3> Tarefa </h3> 
Escreva um programa que, dada a ordem em que as cartas estao na pilha Compra no inicio do jogo, determine
o resultado do jogo (ou seja, o numero de rodadas).

<h3> Entrada </h3>
A entrada contem um unico conjunto de testes, que deve ser lido do dispositivo de entrada padrao (normalmente
o teclado). A primeira linha da entrada contem um inteiro N que indica quantas cartas existem no baralho
(1 <= N <= 100000). A segunda linha contem N inteiros, representando as cartas do baralho, na sequencia em
que serao tiradas por Marlene da pilha Compras.

<h3> Saida </h3>
Seu programa deve imprimir, na saida padrao, uma unica linha, contendo o numero de vezes que Marlene ter
aque descartar as cartas durante o jogo.

<h3> Exemplos </h3>

<pre>
Entrada
3
2 1 3

Saída
2

Entrada
5
3 5 1 4 2

Saída
3

Entrada
7
3 6 7 1 5 4 2

Saída
4
</pre>

</p>
