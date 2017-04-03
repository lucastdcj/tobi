<p align="justify">

<p>Sem as proteç&#245;es da atmosfera e do cintur&#227;o magnético que existem

na Terra, a Lua fica exposta ao ataque do Sol, que é um astro em

constante explos&#227;o atômica. As explos&#245;es do Sol emitem ondas letais de

partículas. Uma pessoa que ficasse desprotegida na superfície da Lua,

num lugar onde o Sol incidisse diretamente, sofreria um bombardeio

radioativo t&#227;o intenso quanto se estivesse nas imediaç&#245;es da usina

russa de Chernobyl no momento do acidente que matou 31 pessoas, em

1986. Além da radiaç&#227;o solar, outro efeito desta falta de proteç&#227;o

contra o Sol que existe na Lua é a enorme variaç&#227;o de temperatura. Nas

regi&#245;es próximas do equador lunar, a variaç&#227;o de temperatura é brutal,

passando de cerca de 130 graus positivos durante o dia a 129 graus

negativos &#224; noite.



<p>Para estudar com mais precis&#227;o as variaç&#245;es de temperatura na

superfície da Lua, a NASA enviou &#224; Lua uma sonda com um sensor que

mede a temperatura de 1 em 1 minuto. Um dado importante que os

pesquisadores desejam descobrir é como se comporta a média da

temperatura, considerada em intervalos de uma dada duraç&#227;o (uma hora,

meia hora, oito horas, etc.). Por exemplo, para a seqü&#234;ncia de

mediç&#245;es 8, 20, 30, 50, 40, 20, -10, e intervalos de quatro minutos,

as médias s&#227;o respectivamente 108/4=27, 140/4=35, 140/4=35 e 100/4=25.



<h3>Tarefa</h3>

<p>Voc&#234; foi recentemente contratado pela NASA, e sua primeira tarefa é

escrever um programa que, conhecidos a seqü&#234;ncia de temperaturas

medidas pelo sensor, e o tamanho do intervalo desejado, informe qual a

maior e qual a menor temperatura média observadas, considerando o

tamanho do intervalo dado.







<h3>Entrada</h3>

<p>A entrada é composta de vários conjuntos de teste. A primeira linha

de um conjunto de teste contém dois números inteiros positivos N e M,

que indicam respectivamente o número total de mediç&#245;es de temperatura

de uma seqü&#234;ncia obtida pelo sensor, e o tamanho dos intervalos, em

minutos, em que as médias devem ser calculadas. As N linhas seguintes

cont&#234;m um número inteiro cada, representando a seqü&#234;ncia de medidas do

sensor. O final da entrada é indicado quando N = M = 0.



<h3>Saída</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas. A primeira linha identifica o conjunto de teste, no

formato &#8220;Teste n&#8221;, onde n é numerado a partir de 1. A segunda

linha deve conter dois números inteiros X e Y, separados por ao menos

um espaço em branco, representando respectivamente os valores da menor

e da maior média de temperatura, conforme determinado pelo seu

programa. O valor da média deve ser truncado, se a média n&#227;o for um

número inteiro (ou seja, deve ser impressa apenas a parte inteira). A

terceira linha deve ser deixada em branco. A grafia mostrada no

Exemplo de Saída, abaixo, deve ser seguida rigorosamente.



<h3>Exemplo</h3>



<pre>

<b>Entrada:</b>

4 2

-5

-12

0

6

7 4

35

-35

5

100

100

50

50

0 0



<b>Saída:</b>

Teste 1

-8 3



Teste 2

26 75

</pre>



<h3>Restriç&#245;es</h3>

<p><code>0 <= N <= 10000 (N = 0 apenas para indicar o fim da entrada)<br/>

-200 <= Temperatura <= 200<br/>

1 <= M <= N<br/>
</code>
</p>
