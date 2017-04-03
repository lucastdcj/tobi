<p align="justify">

<p>Juliana é uma famosa doceira reconhecida internacionalmente pelos seus bombons, exportados para todo o
mundo. Embora não revele a ninguém as suas receitas, ela já deu entrevistas contando alguns de seus segredos.
Sua fábrica de bombons utiliza somente chocolates comprados de um único produtor suíço, que envia barras
gigantescas que são cortadas por grandes máquinas.</p>
<p>Dada uma barra grande de chocolate, Juliana realiza divisões sucessivas da barra até obter uma barra
que contém a quantidade exata de chocolate para aquela receita. Após cada divisão, ela seleciona um dos
pedaços resultantes e armazena os demais para uso futuro. As divisões são determinadas por critérios técnicos
relacionados ao tamanho das barras e aos equipamentos disponiveis em um dado momento.</p>
<p>Por exemplo, se ela deseja obter uma barra de 100g de chocolate a partir de uma barra de 3Kg, primeiro
ela divide a barra ao meio. Em seguida, um dos pedaços é dividido em cinco partes iguais e por fim, um
desses pedaços de 300g é dividido em 3 pedaços, resultando no pedaço de 100g necessário para a receita. Nesse
processo, 1 pedaço é utilizado para a receita e 7 pedaços de diferentes tamanhos serão guardados para uso
futuro. A figura abaixo ilustra esse cenário.</p>
<center> 
  <img src="task_images/2007f1p2_choc.png">
</center>

<h3>Tarefa</h3>
<p>Dada uma sequência de divisões realizadas por Juliana em uma barra de chocolate, determinar quantos pedaços
serão armazenados em estoque para uso futuro.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém um inteiro <i>N</i> que indica o número de divisões feitas na barra de
chocolate original (1 &le; <i>N</i> &le; 1.000). A linha seguinte contém <i>N</i> inteiros <i>I</i> (2 &le; <i>I</i> &le; 10) representando o número
de pedaços em que o pedaço atual foi dividido. Sempre que é feita uma divisão, um pedaço é utilizado para a
próxima divisão e os demais são separados para serem armazenados em estoque.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo o número de pedaços de chocolate
que serão armazenados em estoque.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3
2 3 5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
7
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
5
2 2 2 3 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
7
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
7
2 3 4 5 6 7 8
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
28
      </pre>
    </td>
  </tr>
</table>

</p>
