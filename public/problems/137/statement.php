<p align="justify">

A policia desconfia que dois homens que passeiam todos os dias pelo parque sao na verdade criminosos. O
parque e plano, de formato retangular, e estreitas faixas de grama o dividem em quadrados de mesmo tamanho,
formando uma grade de N por M quadrados.
Os dois homens tem um comportamento curioso e suspeito em seu passeio: apos encontrarem-se, conversam
durante um minuto, andam mudando rapidamente de lugar, passando a ocupar um novo quadrado do parque,
conversam mais um minuto, andam novamente (mudando de quadrado), conversam mais um minuto, e assim
sucessivamente. A cada minuto escolhem uma direcao (Norte, Sul, Leste ou Oeste) e andam ate o quadrado
imediatamente vizinho na direcao escolhida.
Tentando escutar trechos das conversas dos homens, a policia instalou um pequeno microfone multi-direcional
em um dos quadrados do parque. O microfone e capaz de captar conversas realizadas no quadrado onde esta
instalado e em todos os quadrados imediatamente vizinhos.
Os dois homens sempre iniciam o passeio no quadrado de coordenadas (0,0).

<h3> Tarefa </h3> 
Dadas as coordenadas do microfone e a sequencia de movimentos que os dois homens realizaram durante seu
passeio no parque, seu programa deve determinar quantos minutos de conversa foram captados pelo microfone.

<h3> Entrada </h3> 
A entrada contem um unico conjunto de testes, que deve ser lido do dispositivo de entrada padrao (normalmente
o teclado). A primeira linha contem dois inteiros N e M que indicam respectivamente o numero de linhas e o
numero de colunas do parque (0 <= N <= 1000000 e 0 <= M <= 1000000). A segunda linha contem dois inteiros X e
Y que indicam a coordenada do microfone em termos de linhas e colunas (0 <= X <= N e 0 <= Y <= M ). A terceira
linha contem um inteiro K, indicando o numero de quadrados pelos quais os dois homens passearam. A quarta
linha contem K inteiros, entre 1, 2, 34, que indicam a rota tomada pelos dois homens durante o passeio; cada
inteiro indica a direcao tomada ao final de um minuto de conversa, com 1 representando o Norte, 2 representando
o Sul, 3 representando o Leste e 4 representando o Oeste.

<h3> Saida </h3>
Seu programa deve imprimir, na saida padrao, uma unica linha contendo um inteiro: o numero de minutos de
conversacao captados pelo microfone.

Exemplos: </br>
<pre>
Entrada
10 10
2 2
3
3 3 3

Saída
0

Entrada
5 5
0 1
3
3 1 3

Saída
3

Entrada
20 20
3 2
8
1 1 3 3 1 1 2 4

Saída
6
</pre>

</p>
