<p align="justify">

<p>As Ilhas Weblands formam um reino independente nos mares do

Pacífico. Como é um reino recente, a sociedade é muito influenciada

pela informática. A moeda oficial é o Bit; existem notas de B$ 50,00,

B$10,00, B$5,00 e B$1,00. Voc&#234; foi contratado(a) para ajudar na

programaç&#227;o dos caixas automáticos de um grande banco das Ilhas

Weblands.



<h3>Tarefa</h3>

<p>Os caixas eletrônicos das Ilhas Weblands operam com todos os tipos de notas disponíveis, mantendo

um estoque de cédulas para cada valor (B$ 50,00, B$10,00, B$5,00 e B$1,00). Os clientes

do banco utilizam os caixas eletrônicos para efetuar retiradas de um certo número inteiro de Bits.



<p>Sua tarefa é escrever um programa que, dado o valor de Bits desejado pelo cliente, determine o

número de cada uma das notas necessário para totalizar esse valor, de modo a minimizar a quantidade

de cédulas entregues. Por exemplo, se o cliente deseja retirar B$50,00, basta entregar uma

única nota de cinquenta Bits. Se o cliente deseja retirar B$72,00, é necessário entregar uma nota

de B$50,00, duas de B$10,00 e duas de B$1,00.



<h3>Entrada</h3>

<p>A entrada é composta de vários conjuntos de teste. Cada conjunto de

teste é composto por uma única linha, que contém um número inteiro

positivo <code>V</code>, que indica o valor solicitado pelo cliente. O final da

entrada é indicado por <code>V = 0</code>.



<h3>Saída</h3>

<p>Para cada conjunto de teste da entrada seu programa deve produzir

tr&#234;s linhas na saída. A primeira linha deve conter um identificador do

conjunto de teste, no formato <code>&#8220;Teste n&#8221;</code>, onde <code>n</code> é numerado a

partir de 1. Na segunda linha devem aparecer quatro inteiros <code>I</code>, <code>J</code>, <code>K</code> e

<code>L</code> que representam o resultado encontrado pelo seu programa: <code>I</code> indica o

número de cédulas de B$50,00, <code>J</code> indica o número de cédulas de B$10,00,

<code>K</code> indica o número de cédulas de B$5,00 e <code>L</code> indica o número de cédulas

de B$1,00. A terceira linha deve ser deixada em branco. A grafia

mostrada no Exemplo de Saída, abaixo, deve ser seguida rigorosamente.



<h3>Exemplo</h3>



<pre>

<b>Entrada:</b>

1

72

0



<b>Saída:</b>

Teste 1

0 0 0 1



Teste 2

1 2 0 2

</pre>



<h3>Restriç&#245;es</h3>

<p><code>0 <= V <= 10000</code> (V = 0 apenas para indicar o fim da entrada)



</p>
