<p align="justify">

<p>Pedrinho é um rapaz muito aventureiro, que nas férias viaja pelo mundo em busca de lugares afastados e com
bonitas vistas.</p>
<p>Na sua viagem atual, Pedrinho está andando por uma escura floresta quando se depara com um perigoso
desfiladeiro. Do outro lado do desfiladeiro ele sabe que existe um acampamento onde poderá descansar durante
a noite para continuar suas aventuras no dia seguinte.</p>
<p>Para chegar até o acampamento, ele terá que utilizar pontes que estão suspensas sobre o desfiladeiro. As pontes
foram construídas interligando altos pilares cravados no fundo do desfiladeiro.</p>
<center> 
  <img src="task_images/2009f1p2_pontes.png">
</center>
<p>O piso das pontes é feita de tábuas de tamanhos iguais. Mas as pontes são velhas, e algumas tábuas caíram.
Felizmente, todas as tábuas que sobraram estão em perfeitas condições, ou seja, não existe o perigo de Pedrinho
pisar em uma delas e a tábua cair. Além disso, em nenhuma das pontes duas tábuas consecutivas caíram, de
forma que os buracos deixados pelas tábuas que caíram podem ser pulados com segurança.</p>
<p>No local onde Pedrinho se encontra existe uma placa mostrando as ligações entre as pontes e também quantas
tábuas estão faltando em cada uma das pontes. Pedrinho está cansado e não há muita visibilidade durante a
noite. Ele precisa, portanto, tomar muito cuidado para não cair em algum dos buracos.</p>
<p>Pedrinho possui um laptop na mochila, mas só o usa para comunicar-se com os amigos. Ele liga sua internet
via satélite, encontra você on-line, e pede sua ajuda.</p>

<h3>Tarefa</h3>
<p>Sua tarefa é escrever um programa que receba as informações sobre as pontes (as ligações entre elas e a quantidade
de tábuas faltando em cada uma) e calcule qual é o menor número de buracos que Pedrinho precisa pular para
chegar ao outro lado do desfiladeiro.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado).</p>
<p>A primeira linha da entrada contém dois número inteiros <i>N</i> e <i>M</i> (1 &le; <i>N</i> &le; 1.000, 2 &le; <i>M</i> &le; 10.000) representando
o número de pilares no desfiladeiro e o número de pontes, respectivamente. Cada uma das <i>M</i> linhas seguintes
contém 3 inteiros <i>S</i>, <i>T</i>, <i>B</i> (0 &le; <i>S</i> &le; <i>N</i> + 1, 0 &le; <i>T</i> &le; <i>N</i> + 1 e 0 &le; <i>B</i> &le; 1.000), indicando que existe uma ponte
ligando os pilares <i>S</i> e <i>T</i> , e que possui <i>B</i> buracos. Não existe linha representando ponte com <i>S</i> = <i>T</i> . O valor
de pilar 0 representa a borda do desfiladeiro onde Pedrinho está, e o valor de pilar <i>N</i> + 1 representa a borda
do desfiladeiro onde está o acampamento. Não existem duas pontes distintas ligando o mesmo par de locais
(pilares ou bordas do desfiladeiro).</p>
<p>Você pode supor que sempre existirá um caminho de pontes entre o lado do desfiladeiro em que Pedrinho se
encontra até o lado do desfiladeiro onde está o acampamento.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, um número inteiro representando a menor quantidade de buracos
que Pedrinho terá que pular para conseguir chegar ao acampamento.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>N</i> &le; 100 e M &le; 100.</li>
  <li>Em um conjunto de casos de teste que totaliza 70 pontos, <i>N</i> &le; 500 e M &le; 5.000.</li> 
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
2 5
0 1 1
0 2 3
0 3 9
1 3 2
2 3 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
3
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
4 9
0 1 1
0 3 4
0 4 2
1 2 5
1 5 3
2 5 5
3 4 2
3 5 5
4 5 8
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
4
      </pre>
    </td>
  </tr>
</table>


</p>
