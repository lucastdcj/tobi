<p align="justify">

<p align="justify">
<p>Os alunos do último ano resolveram organizar uma quermesse para

arrecadar fundos para a festa de formatura. A festa prometia ser um

sucesso, pois o pai de um dos formandos, Teófilo, dono de uma loja de

informática, decidiu doar um computador para ser sorteado entre os que

comparecessem.  Os alunos prepararam barracas de quent&#227;o, pipoca,

doces, ensaiaram a quadrilha e colocaram &#224; venda ingressos numerados

sequencialmente a partir de 1. O número do ingresso serviria para o

sorteio do computador. Ficou acertado que Teófilo decidiria o método

de sorteio; em princípio o sorteio seria, claro, computadorizado.  



<p>O local escolhido para a festa foi o ginásio da escola. A entrada dos

participantes foi pela porta principal, que possui uma roleta, onde

passa uma pessoa por vez. Na entrada, um funcionário inseriu, em uma

lista no computador da escola, o número do ingresso, na ordem de

chegada dos participantes. Depois da entrada de todos os

participantes, Teófilo começou a trabalhar no computador para preparar

o sorteio. Verificando a lista de presentes, notou uma característica

notável: havia apenas um caso, em toda a lista, em que o participante

que possuia o ingresso numerado com <code>i</code>, havia sido a <code>i</code>-ésima pessoa a

entrar no ginásio. Teófilo ficou t&#227;o encantado com a coincid&#234;ncia que

decidiu que o sorteio n&#227;o seria necessário: esta pessoa seria o

ganhador do computador.





<h3>Tarefa</h3>

<p>Conhecendo a lista de participantes, por ordem de chegada, sua

tarefa é determinar o número do ingresso premiado, sabendo que o

ganhador é o único participante que tem o número do ingresso igual &#224;

sua posiç&#227;o de entrada na festa.



<h3>Entrada</h3>

<p>A entrada é composta de vários conjuntos de teste. A primeira linha

de um conjunto de teste contém um número inteiro positivo <code>N</code> que indica

o número de participantes da festa. A linha seguinte contém a

sequ&#234;ncia, em ordem de entrada, dos <code>N</code> ingressos das pessoas que

participaram da festa.  O final da entrada é indicado quando <code>N = 0</code>. Para cada conjunto de teste da entrada haverá um único ganhador.



<h3>Saída</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas. A primeira linha identifica o conjunto de teste, no

formato <code>"Teste n"</code>, onde <code>n</code> é numerado a partir de 1. A segunda linha

deve conter o número do ingresso do ganhador, conforme determinado

pelo seu programa. A terceira linha deve ser deixada em branco. A grafia mostrada no Exemplo de Saída, abaixo, deve ser seguida

rigorosamente.



<h3>Exemplo</h3>



<pre>

<b>Entrada:</b>

4

4 5 3 1

10

9 8 7 6 1 4 3 2 12 10

0



<b>Saída:</b>

Teste 1

3



Teste 2

10

</pre>



<h3>Restriç&#245;es</h3>

<p><code>0 <= N <= 10000 </code> (N = 0 apenas para indicar o fim da entrada)

</p>
