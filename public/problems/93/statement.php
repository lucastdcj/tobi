<p align="justify">

<p>Ogros marcianos, como todos sabem, são extremamente fortes. Numa feira de circo marciano, ogros são chamados para
 bater um martelo num aparelho que mede sua força. O ogro ganha um determinado prêmio dependendo
da faixa de força que alcançou (por exemplo, se a força alcançada foi entre 0 e 5, ganha 10 pontos. Se for entre
6 e 10, ganha 30). São possíveis <i>N</i> premiações, para <i>N</i> faixas de força alcançadas.</p>
<p>Você deve escrever um programa que recebe quais são as faixas de forças e suas respectivas premiações. Em
seguida, o programa recebe a força alcançada por M ogros, e deve calcular quanto cada ogro recebeu de premiação.</p>

<h3>Entrada</h3>
<p><i>A</i> entrada contém um único conjunto de testes, que deve ser lido do  <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha contém dois inteiros <i>N</i> e <i>M</i> (2 &le; <i>N</i> &le; 10.000, 1 &le; <i>M</i> &le; 10.000), representando
respectivamente o número de faixas de premiações e o número de ogros cuja força foi medida.</p>
<p>A segunda linha de um caso de teste contem <i>N</i> - 1 inteiros <i>A</i><sub>i</sub> (<i>A</i><sub>i-1</sub> < <i>A</i><sub>i</sub> < <i>A</i><sub>i+1</sub>, 
1 &le; <i>A</i><sub>i</sub> &le; 1.000.000.000). A primeira faixa de premiação é dada por forças menores que <i>A</i><sub>1</sub>. A i-ésima faixa
 de premiação é composta das forças que são maiores ou iguais a <i>A</i><sub>i-1</sub> e menores que Ai . A n-ésima pontuação é composta das forças maiores
ou iguais a <i>A</i><sub>N-1</sub>.</p>
<p><i>A</i> terceira linha contem <i>N</i> inteiros <i>F</i><sub>i</sub> (1 &le; <i>F</i><sub>i</sub> &le; 1.000.000.000, <i>F</i><sub>i</sub>-1 < <i>F</i><sub>i</sub> < <i>F</i><sub>i+1</sub>) 
em ordem crescente, representando a premiação de cada faixa de premiação, nesta ordem.</p>
<p>A quarta e última linha de um caso de teste contêm <i>M</i> inteiros <i>O</i><sub>i</sub>
(1 &le; <i>O</i><sub>i</sub> &le; 1.000.000.000), um para cada ogro, representando qual força cada ogro alcançou.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo <i>M</i> inteiros, um para cada ogro, na
ordem dada pela entrada, representando qual premiação cada ogro recebeu pela sua força alcançada.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3 4
3 5
1 4 7
2 3 9 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1 4 7 4
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
2 10
4
5 200
1 3 4 5 5 6 2 1 3 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
5 5 200 200 200 200 5 5 5 200
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
10 1
1 2 3 4 5 6 7 8 9
1 10 100 101 102 103 104 105 106 200
5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
103
      </pre>
    </td>
  </tr>
</table>

</p>
