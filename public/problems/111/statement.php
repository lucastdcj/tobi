<p align="justify">

<p>Por quest&#245;es de segurança, muitos bancos hoje em dia est&#227;o

alterando a forma como seus clientes digitam as senhas nos caixas

eletrônicos, pois alguém pode postar-se atrás do cliente e ver as

teclas &#224; medida em que ele as digita.</p>



<p>Uma alternativa bastante utilizada tem sido associar os dez dígitos

a cinco letras, de forma que cada letra esteja associada a dois

dígitos, conforme o exemplo abaixo:</p>



<pre>

 ___ ___    ___ ___    ___ ___    ___ ___    ___ ___   

|   |   |  |   |   |  |   |   |  |   |   |  |   |   |  

|   | 1 |  |   | 3 |  |   | 0 |  |   | 5 |  |   | 2 |  

|   |   |  |   |   |  |   |   |  |   |   |  |   |   |  

| A |---|  | B |---|  | C |---|  | D |---|  | E |---|  

|   |   |  |   |   |  |   |   |  |   |   |  |   |   |  

|   | 7 |  |   | 9 |  |   | 8 |  |   | 6 |  |   | 4 |  

|___|___|  |___|___|  |___|___|  |___|___|  |___|___|  

</pre>



<p>As associaç&#245;es entre números e letras s&#227;o mostradas como bot&#245;es

numa tela sensível ao toque, permitindo que o cliente selecione os

bot&#245;es correspondentes &#224; senha. Considerando a disposiç&#227;o dos bot&#245;es

da figura acima, a senha 384729 seria digitada como BCEAEB (note que a

mesma seqü&#234;ncia de letras seria digitada para outras senhas, como por

exemplo 982123).  Cada vez que o cliente usa o caixa eletrônico, as

letras utilizadas s&#227;o as mesmas (de 'A&#8217; a 'E&#8217;), com os bot&#245;es nas

mesmas posiç&#245;es, mas os dígitos s&#227;o trocados de lugar. Assim, caso um

intruso veja (mesmo que mais de uma vez) a seqü&#234;ncia de letras

digitada, n&#227;o é possível notar facilmente qual a senha do cliente do

banco.</p>



<h3>Tarefa</h3>



<p>Dada uma seqü&#234;ncia de associaç&#245;es entre letras e números, e as

letras digitadas pelo cliente do banco para cada uma dessas

associaç&#245;es, voc&#234; deve escrever um programa para determinar qual é a

senha do cliente.</p>



<h3>Entrada</h3>



<p>A entrada é composta de vários conjuntos de testes. A primeira

linha de um conjunto de testes contém um inteiro N, que indica o

número de associaç&#245;es entre letras e números e as senhas digitadas (<code>2

<= N <= 10</code>). As N linhas seguintes cont&#234;m as entradas da seguinte

forma: 10 dígitos, em ordem de associaç&#227;o, para as letras de 'A&#8217; a 'E&#8217;

(2 dígitos para a letra A, 2 para a B e assim sucessivamente) e 6

letras que representam a senha codificada conforme os dígitos

anteriores. As N associaç&#245;es fornecidas em um conjunto de testes ser&#227;o

sempre suficientes para definir univocamente a senha do cliente. O

final da entrada é indicado por <code>N = 0</code>.</p>



<pre>

<b>Exemplo de Entrada</b>

2

1 7 3 9 0 8 5 6 2 4 B C E A E B

9 0 7 5 8 4 6 2 3 1 E C C B D A

3

0 1 2 3 4 5 6 7 8 9 B C D D E E

1 3 5 4 6 8 7 9 0 2 E B C D C D

3 2 0 4 5 9 7 6 8 1 A C D D E C

0

</pre>



<h3>Saída</h3>



<p>Para cada conjunto de teste da entrada, seu programa deve produzir

tr&#234;s linhas na saída. A primeira linha deve conter um identificador do

conjunto de teste, no formato "Teste n", onde n é numerado

seqüencialmente a partir de 1. A segunda linha deve conter a senha do

cliente, com um espaço após cada dígito. A terceira linha deve ser

deixada em branco. A grafia mostrada no Exemplo de Saída, abaixo, deve

ser seguida rigorosamente.</p>



<pre>

<b>Exemplo de Saída</b>

Teste 1

3 8 4 7 2 9



Teste 2

2 5 6 7 8 9

</pre>



<p>(esta saída corresponde ao exemplo de entrada acima)</p>



<h3>Restriç&#245;es</h3>



<p><code>2 <= N <= 10</code> (N = 0 apenas para indicar o fim da entrada)</p>




</p>
