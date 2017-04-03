<p align="justify">

<p>A Subindo Bem Confortavelmente (SBC) é uma empresa tradicional, com mais de 50 anos de experiência
na fabricação de elevadores. Todos os projetos da SBC seguem as mais estritas normas de segurança, mas
infelizmente uma série de acidentes com seus elevadores manchou a reputação da empresa.</p>

<p>Ao estudar os acidentes, os engenheiros da companhia concluíram que, em vários casos, o acidente foi causado
pelo excesso de passageiros no elevador. Por isso, a SBC decidiu fiscalizar com mais rigor o uso de seus elevadores:
foi instalado um sensor em cada porta que detecta a quantidade de pessoas que saem e entram em cada andar
do elevador.</p>

<p>A SBC tem os registros do sensor de todo um dia de funcionamento do elevador (que sempre começa vazio).
Eles sabem que as pessoas são educadas e sempre deixam todos os passageiros que irão sair em um andar saírem
antes de outros passageiros entrarem no elevador, mas ainda assim eles têm tido dificuldade em decidir se a
capacidade máxima do elevador foi excedida ou não.</p>

<h3>Tarefa</h3>
<p>Escreva um programa que, dada uma sequência de leituras do sensor e a capacidade máxima do elevador,
determina se a capacidade máxima do elevador foi excedida em algum momento.</p>


<h3>Entrada</h3>
<p>A primeira linha da entrada contém dois inteiros <i>N</i> e <i>C</i>, indicando o número de leituras realizadas pelo sensor
e a capacidade máxima do elevador, respectivamente (1 &le; <i>N</i> &le; 1000 e 1 &le; <i>C</i> &le; 1000). As <i>N</i> linhas seguintes
contêm, cada uma, uma leitura do sensor. Cada uma dessas linhas contém dois inteiros <i>S</i> e <i>E</i>, indicando quantas
pessoas saíram e quantas pessoas entraram naquele andar, respectivamente (0 &le; <i>S</i> &le; 1000 e 0 &le; <i>E</i> &le; 1000).</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir uma única linha contendo o caractere 'S', caso a capacidade do elevador tenha sido
excedida em algum momento, ou o caractere 'N' caso contrário.</p>



<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 10
0 5
2 7
3 3
5 2
7 0
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
N
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
5 10
0 3
0 5
0 2
3 4
6 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
S
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
6 4
0 5
3 5
4 5
1 0
1 1
1 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
S
      </pre>
    </td>
  </tr>
</table>

</p>
