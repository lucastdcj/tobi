<p align="justify">

A Companhia de Táxi Tabajara (CTT) é uma das maiores empresas de transporte do país. Possui uma 

vasta frota de carros e opera em todas as grandes cidades. Recentemente a CTT modernizou a sua 

frota, adquirindo um lote de 500 carros bi-combustíveis (carros que podem utilizar como combustível tanto álcool quanto gasolina). Além do maior conforto para os passageiros e o menor gasto com manutenç&#227;o, com os novos carros é possível uma reduç&#227;o adicional de custo: como o preço da gasolina está sujeito a variaç&#245;es muito bruscas e pode ser vantagem, em certos momentos, utilizar álcool como combustível. Entretanto, os carros possuem um melhor desempenho utilizando gasolina, ou seja, em geral, um carro percorre mais quilômetros por litro de gasolina do que por litro de álcool. 



<h3>Tarefa</h3>



<p>Voc&#234; deve escrever um programa que, dados o preço do litro de álcool, o preço do litro de gasolina e os quilômetros por litro que um carro bi-combustível realiza com cada um desses combustíveis, determine se é mais econômico abastecer os carros da CTT com álcool ou com gasolina. No caso de n&#227;o haver diferença de custo entre abastecer com álcool ou gasolina a CTT prefere utilizar gasolina.</p>



<h3>Entrada</h3>



<p>A entrada é composta por uma linha contendo quatro números reais com precis&#227;o de duas casas decimais A, G, Ra e Rg , representando respectivamente o preço por litro do álcool, o preço por litro 

da gasolina, o rendimento (km/l) do carro utilizando álcool e o rendimento (km/l) do carro utilizando 

gasolina.</p>



<h3>Saída</h3>



<p>A saída deve ser composta por uma única linha contendo o caractere &#8216;A&#8217; se é mais econômico abastecer a frota com álcool ou o caractere &#8216;G&#8217; se é mais econômico ou indiferente abastecer a frota com gasolina.</p>



<table width="100%" align="center">

<tr>

<td>

<h3>Exemplo 1</h3>

<pre>

<b>Entrada:</b>

1.20 2.30 10.00 15.00



<b>Saída:</b>

A

</pre>

</td>



<td>

<h3>Exemplo 2</h3>

<pre>

<b>Entrada:</b>

1.00 1.00 9.00 9.01



<b>Saída:</b>

G

</pre>

</td>



<td>

<h3>Exemplo 3</h3>

<pre><b>Entrada:</b>

1.00 1.00 11.00 11.00



<b>Saída:</b>

G

</pre>

</td>

</tr>

</table>



<h3>Restriç&#245;es</h3>



<p>0.01 <= A <= 10.00<br>

0.01 <= G <= 10.00<br>

0.01 <= Ra <= 20.00<br>

0.01 <= Rg <= 20.00


</p>
