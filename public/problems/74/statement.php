<p align="justify">

<p>As cadeiras do auditório da escola são organizadas em um quadriculado com <i>L</i> linhas e <i>C</i> colunas. As linhas
são numeradas de 1 a <i>L</i>, as colunas são numeradas de 1 a <i>C</i>, e as cadeiras são numeradas de 1 a <i>L</i>x<i>C</i>, de tal
modo que uma cadeira na linha <i>i</i> coluna <i>j</i> tem o número (<i>i</i> - 1) × <i>C</i> + <i>j</i>.</p>
<p>Durante a aula de teatro, a professora fez com que os alunos executassem uma sequência de mudanças na
configuração da sala. Cada uma dessas mudanças intercambiou ou duas colunas ou duas linhas. A figura abaixo
ilustra uma configuração original com três linhas e quatro colunas, a posição das cadeiras após uma mudança
(intercâmbio das colunas 1 e 4), e a posição das cadeiras após mais uma mudança (intercâmbio das linhas 2 e
3).</p>
<center> 
  <img src="http://www.t-obi.com/public/img/problems/74/2009f2p2_cadeiras.png" width="500px" height="210px">
</center>
<p>Ao final da aula, como era de se esperar, a numeração das cadeiras ficou bem bagunçada. O problema é
que a próxima aula é de Matemática, e o professor é muito exigente, e quer começar a aula com as cadeiras
perfeitamente posicionadas da maneira original.</p>

<h3>Tarefa</h3>
<p>Sua tarefa é escrever um programa que, dada a posição de cada cadeira ao final da aula de teatro, determine
qual é a menor sequência de mudanças que devem ser executadas para retornar as cadeiras aos seus devidos
lugares, considerando que cada mudança faça o intercâmbio ou de duas linhas ou de duas colunas de cadeiras.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado).</p>
<p>A primeira linha da entrada contém dois números inteiros <i>L</i> e <i>C</i>, representando respectivamente o número de
linhas e o número de colunas de cadeiras do auditório (1 &le; <i>L</i> &le; 200 e 1 &le; <i>C</i> &le; 200). Cada uma das <i>L</i> linhas
seguintes contém <i>C</i> números inteiros entre 1 e <i>L</i>×<i>C</i>, separados por um espaço em branco, indicando a posição
das cadeiras ao final da aula de teatro. O <i>j</i>-ésimo número dado na linha <i>i</i> é o número da cadeira que se encontra
na linha <i>i</i> e coluna <i>j</i>.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, na primeira linha um inteiro K representando o número de
mudanças necessárias para retornar as cadeiras para sua posição original. Cada uma das K linhas seguintes
contém a descrição de uma mudança, na forma de um caractere M (que pode ser 'L' ou 'C'), seguido de um
espaço em branco, seguido de um inteiro <i>X</i>, seguido de um espaço em branco, seguido de um inteiro <i>Y</i> . Se o
caractere descrevendo a mudança é 'L', <i>X</i> e <i>Y</i> representam linhas que devem ser intercambiadas; se o caractere
descrevendo a mudança é 'C', <i>X</i> e <i>Y</i> representam colunas que devem ser intercambiadas.</p>
<p>Para todos os casos testes existe solução com K &le; 1000. Se mais de uma solução existe com o mesmo número
de mudanças, imprima qualquer uma delas.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>L</i> &le; 10 e <i>C</i> &le; 10.</li>
  <li>Em um conjunto de casos de teste que totaliza 70 pontos, <i>L</i> &le; 100 e <i>C</i> &le; 100.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
2 2
4 3
2 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2
<i>L</i> 1 2
<i>C</i> 1 2
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
3 4
1 2 3 4
5 6 7 8
9 10 11 12
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
0
      </pre>
    </td>
  </tr>
</table>

</p>
