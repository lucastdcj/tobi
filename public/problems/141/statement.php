<p align="justify">

Truco e um jogo de cartas que pode ser jogado por duas ou mais pessoas. Existem diversas variacoes: o Truco
Cego ou Truco Espanhol (popular no sul do Brasil, Argentina, Uruguai e outros paises), o Truco Paulista,
Capixaba ou Mineiro (variacoes populares no Brasil), o Truco Indio e o Truco Eteviano. Em geral, e uma
disputa de tres rodadas ("melhor de tres") para ver quem tem as cartas mais "fortes" (de valor simbolico mais
alto).
Adalberto e Bernardete estao jogando uma variacao de truco com 40 cartas (foram retirados do baralho
todas as cartas de valor 8, 9 e 10, alem dos coringas), e o valor simbolico independe do naipe da carta. A
ordem de valor simbolico das cartas nessa variacao de truco e mostrada abaixo, ordenada da mais "fraca" (mais
a esquerda) para a mais "forte" (mais a direita): </br>

<pre>
4 5 6 7 Q J K A 2 3
</pre>

Cada partida e disputada em tres rodadas. A cada rodada, os jogadores escolhem uma das cartas para
mostrar, e vence aquele que tiver a carta com o maior valor simbolico. Em caso de empate (ou seja, os dois
apresentarem cartas com os mesmos valores simbolicos), Adalberto vence, pois e mais velho que Bernardete.
Vence a partida aquele que vencer o maior numero de rodadas.
Depois de algumas partidas, Adalberto e Bernardete estao com dificuldades para saber quem venceu mais
partidas, e pediram a sua ajuda.

<h3> Tarefa </h3>
Sua tarefa e escrever um programa que calcule o numero de partidas que cada um dos competidores (Adalberto
e Bernardete) venceram.

<h3> Entrada </h3>
A entrada contem um unico conjunto de testes, que deve ser lido do dispositivo de entrada padrao (normalmente
o teclado). A primeira linha da saida possui um inteiro N que indica o numero de partidas disputadas entre
Adalberto e Bernardete (1 <= N <= 1000000). As N linhas seguintes contem cada uma seis inteiros, A1 , A2 , A3 ,
B1 , B2 e B3 , que correspondem as tres cartas apresentadas por Adalberto nas rodadas 1, 2 e 3 daquela partida
(A1 , A2 , A3 pertence {1, 2, 3, 4, 5, 6, 7, 11, 12, 13}), seguidas pelas tres cartas apresentadas por Bernardete nas rodadas
1, 2 e 3 da mesma partida (B1 , B2 , B3 pertence {1, 2, 3, 4, 5, 6, 7, 11, 12, 13}). Na entrada, o numero 1 representa o As
(A), 11 representa o Valete (J), 12 representa a Dama (Q) e 13 representa o Rei (K).

<h3> Saida </h3>
Seu programa deve imprimir, na saida padrao, uma unica linha, que contem os numeros de partidas vencidas
por Adalberto e por Bernadete, nessa ordem, separados por espacos.

<h3> Exemplos: </h3>

<pre>

Entrada
1
1 2 3 1 3 2

Saída
1 0

Entrada
2
1 5 6 6 3 4
5 6 2 11 13 12

Saída
1 1
</pre>


</p>
