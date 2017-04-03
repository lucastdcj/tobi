<p align="justify">

<p>Jo&#227;ozinho é um menino que costuma ir &#224; praia todos os finais de

semana com seus pais. Eles freqüentam sempre a mesma praia, mas cada

semana o pai de Jo&#227;ozinho estaciona o carro em um local diferente ao

longo da praia, e instala sua família em um ponto na praia em frente

ao carro.  Jo&#227;ozinho é muito comil&#227;o, e adora de tomar sorvete na

praia. Contudo, alguns dias acontece de nenhum sorveteiro passar pelo

local onde eles est&#227;o. Intrigado com isto, e n&#227;o querendo mais ficar

sem tomar seu sorvete semanal, Jo&#227;ozinho foi até a Associaç&#227;o dos

Sorveteiros da Praia (ASP), onde ficou sabendo que cada sorveteiro

passa o dia percorrendo uma mesma regi&#227;o da praia, indo e

voltando. Além disto, cada sorveteiro percorre todos os dias a mesma

regi&#227;o. J&#245;aozinho conseguiu ainda a informaç&#227;o dos pontos de início e

fim da regi&#227;o percorrida por cada um dos sorveteiros.</p>



<p>Com base nestes dados, Jo&#227;ozinho quer descobrir os locais da praia

onde o pai dele deve parar o carro, de forma que pelo menos um

sorveteiro passe naquele local. Só que o volume de dados é muito

grande, e Jo&#227;ozinho está pensando se seria possível utilizar o

computador para ajudá-lo nesta tarefa. No entanto Jo&#227;ozinho n&#227;o sabe

programar, e está pedindo a sua ajuda.</p>



<h3>Tarefa</h3>



<p>Voc&#234; deve escrever um programa que leia os dados obtidos pelo

Jo&#227;ozinho e imprima uma lista de intervalos da praia por onde passa

pelo menos um sorveteiro.</p>



<h3>Entrada</h3>



<p>Seu programa deve ler vários conjuntos de teste. A primeira linha

de um conjunto de teste contém dois inteiros n&#227;o negativos, <code>P</code> e

<code>S</code>, que

indicam respectivamente o comprimento em metros da praia e o número de

sorveteiros. Seguem-se <code>S</code> linhas, cada uma contendo dois números

inteiros <code>U</code> e <code>V</code> que descrevem o intervalo de trabalho de cada um dos

sorveteiros, em metros contados a partir do início da praia 

<code>(U &lt; V, 0 &#8804; U &#8804; P e 0 &#8804; V &#8804; P)</code>. O final da entrada é indicado

por <code>S = 0</code> e <code>P = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

200 2

0 21

110 180

1000 3

10 400

80 200

400 1000

10 2

1 4

5 6

0 0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste da entrada seu programa deve produzir

uma lista dos intervalos da praia que s&#227;o servidos por pelo menos um

sorveteiro. A lista deve ser precedida de uma linha que identifica o

conjunto de teste, no formato "<code>Teste n</code>", onde <code>n</code> é numerado a partir de

<code>1</code>. Cada intervalo da lista deve aparecer em uma linha separada, sendo

descrito por dois números inteiros <code>U</code> e <code>V</code>, representando

respectivamente o início e o final do intervalo <code>(U &lt;V)</code>. O final da

lista de intervalos deve ser indicado por uma linha em branco. A

grafia mostrada no Exemplo de Saída, abaixo, deve ser seguida

rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

0 21

110 180



Teste 2

10 1000



Teste 3

1 4

5 6

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>

<p>0 &#8804; P &#8804; 10000 (P = 0 apenas para indicar o final da entrada)<br/>

0 &#8804; S &#8804; 5000 (S = 0 apenas para indicar o final da entrada)<br/>

0 &#8804; U &lt;V &#8804; P</p>


</p>
