<p align="justify">Pão a metro é um tipo de sanduíche gigante que é uma excelente opção de lanche para torneios de programação,
embora a experiência já tenha mostrado que o oferecimento de sanduiches pode gerar reclamação dos competidores.
 Outro grande problema é que algumas pessoas são mais gulosas que outras e, dessa maneira, acabam
pegando pedaços maiores que os pedaços dos outros. Para a final da OBI, a coordenação estava pensando em
providenciar pão a metro para os competidores, porém tais problemas os fizeram recuar na idéia.</p>
<br />
<p align="justify">Embora a idéia tenha sido momentaneamente abandonada, uma idéia simples surgiu: cortar previamente
o pão em fatias de tamanho iguais e distribuí-las entre as pessoas. O único problema com tal idéia é que se
o número de pessoas for muito grande, fica impraticável ter apenas um pão. Por exemplo, se quisermos que
1.000 pessoas recebam 20 centímetros de sanduíche, seria necessário um sanduíche de 20.000 centímetros, ou
200 metros!</p>
<br />
<p align="justify">Alguém levantou a seguinte hipótese: se houvesse <i>N</i> pessoas e fossem encomendados <i>K</i> sanduíches de
empresas diferentes, cada qual com uma determinada metragem (tamanho) <i>M</i><sub>i</sub>
(1 &le; <i>i</i> &le; <i>K</i>), seria possível
retirar desses pães <i>N</i> fatias de mesmo tamanho, possivelmente sobrando partes nao utilizadas. A questão seria:
qual o tamanho inteiro máximo que essas fatias poderão ter?</p>
<p align="justify">Por exemplo, se tivermos <i>K</i> = 4, com os tamanhos (em centímetros) <i>M</i><sub>1</sub> = 120, <i>M</i><sub>2</sub> = 89, <i>M</i><sub>3</sub> = 230 e <i>M</i><sub>4</sub> = 177 e 
<i>N</i> = 10, podemos retirar <i>N</i> fatias iguais de tamanho máximo 57, pois assim conseguimos 2 fatias
no primeiro pão, 1 no segundo, 4 no terceiro e 3 no quarto, totalizando as 10 fatias necessárias. Se tentarmos
cortar fatias de tamanho 58, só será possível obter 3 fatias do terceiro pão, totalizando 9 e, portanto, 57 é
realmente o melhor que podemos obter. Note que não podemos usar duas ou mais fatias menores de diferentes
pães para formarmos uma fatia do tamanho selecionado. (ficaria muito deselegante dar um lanche recortado às
pessoas).</p>
<br />
<h3>Tarefa</h3>
<p align="justify">Escreva um programa que, dados os tamanhos de pão disponíveis (em centímetros) e a quantidade de pessoas a
serem atendidas, retorne o tamanho inteiro máximo (em cent ímetros) da fatia que pode ser cortada de maneira
a atender todas as pessoas.</p>

<h3>Entrada</h3>
<p align="justify">A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente o
teclado). A primeira linha da entrada contém um inteiro <i>N</i> que indica a quantidade pessoas (1 &le; <i>N</i> &le; 10.000).
A segunda linha contém um inteiro <i>K</i> (1 &le; <i>K</i> &le; 10.000) que é a quantidade de sanduíches disponível. Na
terceira linha há <i>K</i> inteiros <i>M</i> (1 &le; <i>M</i> &le; 10.000) separados por um espaço em branco representando o tamanho
de cada pão.</p>

<h3>Sa&iacute;da</h3>
<p align="justify">Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo o tamanho inteiro máximo da fatia
que pode ser cortada.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
10
4
120 89 230 177
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
57
      </pre>
    </td>
  </tr>
</table>

<p align="justify"></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3
2
45 85
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
42
      </pre>
    </td>
  </tr>
</table>

<p align="justify"></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
7
7
100 98 99 505 102 97 101
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
101
      </pre>
    </td>
  </tr>
</table>
