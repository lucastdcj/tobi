<p align="justify">

<p>Um novo processador, denominado Faíska, está sendo desenvolvido para a empresa SBC. Este novo processador
tem apenas duas instruções: <i>inversão</i> e <i>soma</i>, descritas a seguir.</p>

<ul>
  <li><i>Inversão</i>: dados dois endereços de memória <i>X</i> e <i>Y</i> , a operação <b><i>inverte(<i>X</i>,<i>Y</i>)</i></b> inverte a posição de palavras
da memória de forma que</li>
<pre>-a palavra no endereço <i>X</i> troca de posição com a palavra de 
memória da posição <i>Y</i> ;
-a palavra no endereço <i>X</i> + 1 troca de posição com a palavra de 
memória da posição <i>Y</i> - 1;
-a palavra no endereço <i>X</i> + 2 troca de posição com a palavra de 
memória da posição <i>Y</i> - 2;
-e assim por diante, até que <i>X</i> &ge; <i>Y</i>.
</pre>    
  <li><i>Soma</i>: dados dois endereços de memória <i>X</i> e <i>Y</i> , a operação <b><i>soma(X,Y)</i></b> imprime a soma das palavras de
memória entre os endereços <i>X</i> e <i>Y</i> (inclusive).</li>  
</ul>

<p>Por exemplo, se a memória contém inicialmente, a partir da primeira posição de memória (endereço igual a 1) os
valores [1,2,3,4,5,6,7,8], a operação <i><b>inverte(3,7)</b></i> deixa a memória igual a [1,2,7,6,5,4,3,8]. Então,
nesse estado, a execução de soma(1,3) produz a saída 10.</p>


<h3>Tarefa</h3>
<p>Sua tarefa é escrever um programa que, dada uma sequência de instruções do Faíska, simule a execução e produza
o mesmo resultado que o Faíska produziria.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado).</p>
<p>A primeira linha da entrada contém dois números inteiros <i>N</i> e <i>M</i>, representando respectivamente o número
palavras na memória (1 &le; <i>N</i> &le; 10<sup>9</sup>) e o número de instruções do programa (1 &le; <i>M</i> &le; 3000). Cada uma das
<i>M</i> linhas seguintes contém uma instrução do Faíska. Cada instrução é composta de um caractere descrevendo
a instrução ('I' para inversão e 'S' para soma), seguido de um espaço, seguido de dois inteiros indicando os
argumentos da instrução.</p>
<p>Inicialmente a configuração da memória é tal que cada palavra tem como conteúdo o seu próprio endereço. Em
outras palavras, o conteúdo inicial da memória é [1,2,3,...,N]. Há pelo menos uma instrução soma em cada
caso de teste.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma sequência de números inteiros, um em cada linha, indicando
a saída gerada pelo Faíska.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 100 e <i>M</i> &le; 100.</li>
  <li>Em um conjunto de casos de teste que totaliza 70 pontos, <i>N</i> &le; 10<sup>4</sup> e <i>M</i> &le; 10<sup>3</sup>.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
10 2
I 1 5
S 3 7
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
19    
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
15 4
S 2 11
I 10 15
I 1 10
S 5 10
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
65
21
      </pre>
    </td>
  </tr>
</table>

</p>
