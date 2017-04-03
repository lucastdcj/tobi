<p align="justify">

<p>Estela é uma secretária dedicada da OBI (Organização Burocrática Internacional), um megaconglomerado
empresarial voltado a criação de documentos e preenchimento de formulários. Todo dia ela recebe milhares de
pastas suspensas e seu objetivo é organizá-las de uma forma que seja simples recuperar uma pasta do arquivo.</p>
<p>Cada pasta possui uma pequena aba, que fica anexada à pasta e é visível quando a pasta está suspensa
em seu arquivo. Todo funcionário fixa a aba em uma das posições especificadas pelo manual de fixação de
abas, embora ele possa escolher, ao acaso, qualquer uma das posições descritas no manual. Tais posições são
numeradas de 1 até <i>P</i> .</p>
<p>Estela notou que fica consideravelmente mais fácil encontrar as pastas se elas forem arquivadas da seguinte
forma: primeiro uma pasta com aba na posição 1, depois uma com aba na posição 2, e assim sucessivamente,
até que uma pasta com aba na posição <i>P</i> seja arquivada. Logo após, repete-se o processo, arquivando uma
pasta com aba na posição 1. Para Estela, um conjunto de pastas é arquivado de forma perfeita se todas as
pastas desse conjunto forem arquivadas da forma descrita anteriormente, ou seja:</p>
<ul>
  <li>Imediatamente após toda pasta com aba na posição <i>I</i> , <i>I</i> < <i>P</i> , existe uma pasta com aba na posição <i>I</i> + 1
ou não há nenhuma pasta.</li>
  <li>Imediatamente após toda pasta com aba na posição <i>P</i> , existe uma pasta com aba na posição 1 ou não há
nenhuma pasta.</li>
  <li>Todas as pastas do conjunto são armazenadas.</li>
</ul>

<h3>Tarefa</h3>
<p>Dado um conjunto de pastas e a posição de suas abas, determinar se é possível arquivar esse conjunto de pastas
de forma perfeita.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém dois inteiros <i>P</i> e <i>N</i> que indicam, respectivamente, o número
de posições possíveis para se colar as abas (1 &le; <i>P</i> &le; 1.000) o número pastas a serem armazenadas (1 &le; <i>N</i> &le;
1.000.000). As <i>N</i> linhas seguintes contém um inteiro <i>I</i> (1 &le; <i>I</i> &le; <i>P</i> ) cada representando a posição onde a aba
da <i>I</i> -ésima pasta foi colada.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo a letra <b>S</b> se for possível fazer um
arquivamento perfeito ou <b>N</b> caso contrário</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
2 2
1
2
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
3 6
1
2
3
1
2
1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
<i>N</i>
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
4 7
1
1
2
2
3
3
4
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
