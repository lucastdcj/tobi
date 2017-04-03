<p align="justify">

<p>Quando limpavam o por&#227;o da casa recentemente herdada, os primos Jo&#227;o e José descobriram um

antigo mapa guardado no baú que havia sido de seu bisavô. O mapa parecia descrever uma ilha,

era muito antigo, e em meio a indicaç&#245;es de caminhos pela ilha, continha apenas um nome: Huyn

Chong Chong. Curiosos, Jo&#227;o e José pesquisaram o nome na bilbioteca do colégio e na Internet.

Para sua surpresa e excitaç&#227;o, o nome era relacionado a uma antiga lenda de um tesouro escondido

por piratas no século XVIII.



<p>Encantados com a lenda, os primos acreditaram ter encontrado o mapa que os levaria ao tesouro,

escondido na ilha de Huyn Chong Chong, próximo &#224; Coréia do Sul. O tesouro, dizia a lenda, continha

uma arca cheia de pedras preciosas muito raras e valiosas. Certos de que encontrariam o

tesouro, os primos embarcaram rumo &#224; ilha. Cada um dos primos se imaginava mais esperto do

que o outro, e acreditava que encontraria o tesouro primeiro. Assim, eles combinaram que cada

um ficaria com a parte do tesouro que encontrasse. Os primos ent&#227;o se separaram, e começaram a

procurar o tesouro, especialmente a arca. Cada um dos primos tomou o caminho que imaginava

que o levaria até a arca, e seguindo a indicaç&#227;o do mapa, ambos foram encontrando várias jóias

pelo caminho. Coincidentemente, os dois primos cheragam ao mesmo tempo no local onde a arca

estava escondida. Como os dois encontraram a arca ao mesmo tempo, eles tinham agora que decidir

como dividir o tesouro. Depois de analisar algumas alternativas, os primos concordaram em

fazer a divis&#227;o da seguinte forma. Cada um ficaria com a parte do tesouro que encontrou antes de

chegar &#224; arca, e o conteúdo da arca seria dividido de forma que os dois ficassem com partes do

tesouro total de mesmo valor. Para fazer a divis&#227;o desta forma, ao chegar de volta ao Brasil, os primos

mandaram avaliar cada jóia do tesouro. Contudo, eles est&#227;o agora em dúvida se é possível

fazer a divis&#227;o conforme eles haviam combinado. Voc&#234;, como amigo dos dois primos (agora milionários),

e esperando receber alguma recompensa, dispôs-se a ajudá-los a descobrir se é possível

fazer tal divis&#227;o.



<h3>Tarefa</h3>

<p>S&#227;o dados:

<ul>

 <li>o valor dos objetos coletados por Jo&#227;o e por José antes de encontrarem a arca;</li>

 <li>uma lista de valores, correspondentes aos objetos encontrados dentro da arca.</li>

</ul>



<p>Como as jóias s&#227;o muito valiosas, estes valores s&#227;o dados em unidades de R$ 1.000,00, ou seja, o

valor 10 significa R$ 10.000,00. Voc&#234; deve escrever um programa que determina se é possível

dividir os objetos da arca de forma que, considerados também os valores dos objetos encontrados

anteriormente (que ficar&#227;o com quem os encontrou), os primos recebam partes do tesouro com o

mesmo valor.



<h3>Entrada</h3>

<p>Seu programa deve ler vários conjuntos de testes. A primeira linha de um conjunto de testes contém

tr&#234;s números inteiros X, Y e N. Os valores X eY representam respectivamente a soma dos valores

encontrados por Jo&#227;o e por José antes de chegarem &#224; arca. O valor N indica o número de

objetos encontrados na arca. Seguem-se N linhas, cada uma contendo um número inteiro V, correspondendo

ao valor de um dos objetos da arca. O final da entrada é indicado por X = Y = N = 0.



<h3>Saída</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir tr&#234;s linhas na saída. A primeira

linha deve conter um identificador do conjunto de teste, no formato &#8220;Teste n&#8221;, onde n é numerado

a partir de 1. A segunda linha deve conter o caractere &#8216;S&#8217; caso seja possível dividir o tesouro como

combinado pelos dois primos, ou o caractere &#8216;N&#8217; caso contrário. A terceira linha deve ser deixada

em branco. A grafia mostrada no Exemplo de Saída, abaixo, deve ser seguida rigorosamente.



<h3>Exemplo</h3>



<pre>

<b>Entrada:</b>

10 20 4

3

8

7

2

1 1 6

2

7

7

12

5

3

0 0 0



<b>Saída:</b>

Teste 1

S



Teste 2

N

</pre>



<h3>Restriç&#245;es</h3>

<p>0 <= X <= 50 (X = 0 apenas para indicar o final da entrada)<br>

0 <= Y <= 50 (Y = 0 apenas para indicar o final da entrada)<br>

0 <= N <= 100 (N = 0 apenas para indicar o final da entrada)<br>

1 <= V <= 100




</p>
