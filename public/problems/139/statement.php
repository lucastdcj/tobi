<p align="justify">

Seu Diniz possui uma pista de autorama profissional. Nessa pista a marcacao de tempo e feita com sensores
que fazem leitura da passagem de cada cada carrinho pelo ponto onde o sensor esta instalado. K sensores sao
distribuidos ao longo da pista nos chamados postos de checagem.
Durante uma corrida, os carrinhos devem passar pelos postos de checagem na ordem pre-estabelecida, ou
seja, primeiro no posto de checagem 1, depois no 2, ate o posto de checagem K, quando ele deve retornar
ao posto de checagem 1 para completar uma volta. Entretanto, as vezes, quando os carrinhos saem da pista
os competidores os recolocam mais a frente na pista, pulando alguns postos de checagem. Nesse caso, todas
as passagens daquele carrinho por postos de checagem devem ser ignoradas ate que ele passe pelo posto de
checagem correto.

A posicao de um carrinho na corrida e determinada pelo numero de postos de checagem que ele passou
na ordem correta. Caso dois carrinhos tenham passado pelo mesmo numero de postos de checagem, a ordem
utilizada e a ordem cronologica, ou seja, esta mais a frente o carrinho que passou pelo ultimo posto de checagem
primeiro.

A pista de autorama do Seu Diniz possui um computador central que recebe os sinais lidos pelos sensores,
mas ainda nao possui um programa que permita determinar a posicao dos carrinhos ao final da corrida.

<h3> Tarefa </h3>
Escreva um programa que, dado uma lista de leituras feitas pelos sensores, determine a classificacao dos carrinhos
na corrida.

<h3> Entrada </h3>
A entrada contem um unico conjunto de testes, que deve ser lido do dispositivo de entrada padrao (normalmente
o teclado). A primeira linha da entrada contem tres inteiros, K, N e M . K representa o numero de postos
de checagem (1 <= K <= 100), N o numero de carrinhos (1  N  100) e M o numero de leituras feitas pelos
sensores (1 <= M <= 10000). Os carrinhos sao identificados por inteiros de 1 a N e os postos de checagem por
inteiros de 1 a K. As M linhas seguintes contem cada uma dois inteiros X e Y, separados por espaco. Eles
indicam que o carrinho numero X (1 <= X <= N ) passou pelo posto de checagem Y (1  Y  K). Os eventos
sao apresentados na ordem cronologica. Sempre e possivel determinar a classificacao de todos os pilotos com os
dados fornecidos.

<h3> Saida </h3>
Seu programa deve imprimir, na saida padrao, uma linha contendo N inteiros, sendo que o i-esimo inteiro
representa o carrinho que ocupa a posicao i na corrida. Ou seja, o primeiro inteiro e o que ocupa o primeiro
lugar, o segundo inteiro e o carrinho que ocupa o segundo lugar, e assim por diante.
cada inteiro I contendo o numero do carrinho que ocupa a posicao de numero I na corrida: o primeiro
colocado ocupa a posicao de numero 1, o segundo colocado a posição de numero 2, etc.

<h3> Exemplos </h3>
<pre>
Entrada
3 3 6
3 1
1 1
2 1
3 2
3 3
2 2

Saída
3 2 1

Entrada
2 2 5
2 1
2 1
1 1
2 1
1 2

Saída
1 2

</pre>

</p>
