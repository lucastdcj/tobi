<p align="justify">

<p>Móbiles são objetos muito populares hoje em dia, sendo encontrados até em berços, para diversão de bebês,
mas foram concebidos há muito tempo (em 1931) pelo então jovem artista americano Alexander Calder como
esculturas em movimento. Um móbile é uma estrutura composta de peças unidas por fios. O móbile é preso
por um fio a uma argola pela qual ele é suspenso, permitindo que a estrutura movimente-se livremente. A
argola é presa a uma única peça, chamada de peça-raiz do móbile. A peça-raiz pode ter zero ou mais sub-móbiles pendurados nela, cada sub-móbile sendo composto por uma peça-raiz na qual por sua vez podem estar
pendurados zero ou mais sub-móbiles, e assim sucessivamente. Abaixo podemos ver dois exemplos de móbiles:</p>
<center> 
  <img src="task_images/2007f1p2_mobile.png">
</center>
<p>Victor é dono de uma fabrica de móbiles que emprega centenas de artesãos. Cada móbile produzido na fábrica
é confeccionado por um artesão, que cria móbiles de acordo com o seu gosto pessoal, utilizando peças de formatos
distintos. Entretanto, Victor tem notado que nem todos os seus artesãos possuem a mesma habilidade artística,
de forma que às vezes o móbile produzido nem sempre é bem balanceado, segundo a sua concepção. Para
Victor, um móbile é bem balanceado se, para cada peça, todos os sub-móbiles pendurados nela são compostos
pelo mesmo número de peças. O número de peças de um sub-móbile é determinado contando-se o número de
peças que o compõe, incluindo a sua peça-raiz. Note que cada peça do móbile, exceto a peça-raiz, é pendurada
em exatamente uma outra peça.</p>
<p>Por exemplo, o móbile da figura (a) acima é um móbile bem balanceado: a peça-raiz possui um único sub-móbile, que por sua vez possui três sub-móbiles, todos com o mesmo número de peças (uma única). Já o móbile
da figura (b) é um móbile mal balanceado: a peça-raiz possui dois sub-móbiles, um com o total de duas peças
e outro com o total de uma peça.</p>

<h3>Tarefa</h3>
<p>Dada a descrição de um móbile, você deve escrever um programa para determinar se o móbile está bem balanceado ou não.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém um inteiro <i>N</i> que indica o número de peças utilizadas no móbile
(1 &le; <i>N</i> &le; 10.000). As peças são identificadas por inteiros de 1 a <i>N</i> . Cada uma das <i>N</i> linhas seguintes contém
dois números inteiros <i>I</i> e <i>J</i> , indicando que a peça de número <i>I</i> está pendurada na peça de número <i>J</i> (a peça
raiz está pendurada na argola, que é identificada pelo o número 0).</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo a palavra bem se o móbile estiver bem
balanceado ou mal caso esteja mal balanceado. A palavra deve ser escrita com todas as letras em minúsculas.</p>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
3
1 0
2 1
3 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
bem
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
1 0
2 1
4 2
3 2
5 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
bem
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
2 0
1 2
3 1
4 3
5 4
6 4
7 5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
mal
      </pre>
    </td>
  </tr>
</table>


</p>
