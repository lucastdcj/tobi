<p align="justify">

<p>Su Zuki é um empresário japonês acostumado a fazer viagens de avião, sempre na classe econômica, e quer saber
qual seu assento com base no novo sistema da companhia aérea.</p>
<p>Todos os aviões contém uma classe executiva e uma econômica, de forma que as primeiras fileiras do avião
pertencem à classe executiva e as restantes à classe econômica.</p>
<p>Cada assento do avião é indicado por um número correspondente a sua fileira e por uma letra que indica a sua
posição na fileira, sendo <i>A</i> a posição mais à esquerda da fileira, <i>B</i> a posição à direita do assento <i>A</i>, <i>C</i> o assento
à direita do assento <i>B</i>, e assim por diante, seguindo o alfabeto de 26 letras. Por exemplo, a assento 9<i>B</i> está
localizado na nona fileira, logo à direita do assento 9<i>A</i>. A figura abaixo mostra a numeração utilizada em um
avião com nove fileiras de três assentos cada.</p>
<center> 
  <img src="./../../../task_images/2008f1p2_aviao.png" width="110px" height="300px">
</center>
<p>A companhia aérea adotou, para a classe econômica, um sistema no qual o bilhete indica a posição do passageiro
na fila de embarque e não seu assento no vôo. A fila de embarque contém apenas passageiros da classe econômica.</p>
<p>Su Zuki descobriu que o primeiro passageiro da fila de embarque deve sempre sentar-se no assento localizado
na primeira fileira da classe econômica, posição <i>A</i>. O segundo passageiro deve sentar-se nesta mesma fileira,
posição <i>B</i>, e assim por diante, até que todos os assentos dessa fileira estejam ocupados. Esse processo é repetido
a cada fileira da classe econômica, até que acabem os assentos desta classe ou todos os passageiros da fila já
tenham embarcado.</p>
<p>Caso a classe econômica já esteja lotada e ainda haja passageiros na fila, esses passageiros embarcarão somente
no próximo vôo.</p>
<p>Como viajante frequente, Su Zuki conhece bem os diversos modelos de aviões e é capaz de dizer o número total
de fileiras no avião, o número de posições por fileira, e a partir de que fileira começa a classe econômica. Com
base nessas informações, ele pediu a sua ajuda para descobrir, a partir de sua posição na fila, se ele tem assento
garantido neste vôo e, caso tenha, qual seu assento.</p>


<h3>Entrada</h3>
<p>A entrada contém um único teste, a ser lido da <i>entrada padrão</i>. O teste contém uma linha com quatro inteiros
<i>F</i>, <i>C</i>, <i>E</i>, <i>B</i> (2 &le; <i>F</i> &le; 1.000, 1 &le; <i>C</i> &le; 26, 1 &le; <i>E</i> &le; <i>F</i> , 2 &le; <i>B</i> &le; 50.000) indicando, respectivamente, o número
total de fileiras no avião, o número de posições por fileira, o número da primeira fileira da classe econômica e a
posição na fila de embarque do Sr. Zuki.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo um inteiro e uma letra maiúscula,
indicando a fileira e a posição em que o Su Zuki irá sentar-se, ou a frase "PROXIMO VOO" (em maiúsculas e
sem acentos) caso não haja assentos suficientes para o Sr. Zuki no vôo.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 5 2 12
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
4 <i>B</i>
      </pre>
    </td>
  </tr>
</table>

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
50 12 13 185
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
28 E
      </pre>
    </td>
  </tr>
</table>

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
12 10 6 100
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
PROXIMO VOO
      </pre>
    </td>
  </tr>
</table>


</p>
