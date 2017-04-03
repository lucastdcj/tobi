<p align="justify">

<p>A Sociedade Brasileira das Cores (SBC) &eacute; uma editora de livros de colorir. As crian&ccedil;as adoram os livros da
SBC porque figuras, depois de pintadas, ficam muito coloridas e bonitas. Isso acontece porque a SBC se
preocupa em n&atilde;o deixar grandes regi&otilde;es cont&iacute;nuas em suas figuras, que devem ser pintadas com uma cor s&oacute;.</p>

<p>At&eacute; agora, o processo de verificar se uma figura tinha uma regi&atilde;o cont&iacute;nua grande era completamente visual,
mas a SBC resolveu automatizar esse processo e voc&ecirc; foi contratado para programar uma parte desse sistema.</p>

<p>Uma figura &eacute; representada por uma grade, de dimens&atilde;o <i>N</i> por <i>M</i>. Cada quadrado dessa grade &eacute; representado
por uma coordenada (<i>i</i>, <i>j</i>), com 1 &le; <i>i</i> &le; <i>N</i> e 1 &le; <i>j</i> &le; <i>M</i>. Por exemplo, a coordenada (1, 5) representa o
quadrado na primeira linha e quinta coluna, enquanto que a coordenada (3, 7) representa o quadrado na terceira
linha e s&eacute;tima coluna. As linhas s&atilde;o contadas de baixo para cima e as colunas da esquerda para a direita.</p>

<p>Cada quadrado pode estar vazio ou cheio. Assumimos que uma crian&ccedil;a s&oacute; vai pintar sobre quadrados vazios
e se ela pintar um quadrado de uma cor, ela ir&aacute; pintar os oito vizinhos da mesma cor, desde que eles estejam
vazios e que ela n&atilde;o saia da &aacute;rea da figura.</p>

<p>Dada a figura e a coordenada onde uma crian&ccedil;a vai come&ccedil;ar a pintar, sua tarefa &eacute; descobrir quantos quadrados
ela ir&aacute; pintar.</p>


<h2>Entrada</h2>

<p>A primeira linha da entrada cont&eacute;m 5 n&uacute;meros inteiros, <i>N</i>, <i>M</i>, <i>X</i>, <i>Y</i> e <i>K</i>. Os n&uacute;meros inteiros <i>N</i> e <i>M</i> s&atilde;o
respectivamente o n&uacute;mero de linhas e colunas da grade, enquanto que (<i>X</i>, <i>Y</i>) &eacute; a coordenada onde a crian&ccedil;a vai
come&ccedil;ar a pintar e <i>K</i> &eacute; o n&uacute;mero de quadrados cheios na figura.</p>

<p>Seguem-se <i>K</i> linhas, cada uma com dois inteiros A e B, que s&atilde;o as coordenadas de um quadrado cheio.</p>

<p>Garantimos que o quadrado na posi&ccedil;&atilde;o (<i>X</i>, <i>Y</i>) est&aacute; sempre vazio.</p>

<h2>Sa&iacute;da</h2>
<p>Seu programa deve imprimir uma linha contendo o n&uacute;mero de quadrados pintados pela crian&ccedil;a.</p>


<h2>Restri&ccedil;&otilde;es</h2>

  <ul>
    <li>1 &le; <i>N</i>, <i>M</i> &le; 200.</li>
    <li>1 &le; <i>K</i> &le; 10 000.</li>
    <li>1 &le; <i>X</i>, A &le; <i>N</i>.</li>
    <li>1 &le; <i>Y</i>, B &le; <i>M</i>.</li>
  </ul>


<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
1 5 1 2 2
1 1
1 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
2
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
5 5 3 3 7
2 2
2 3
2 4
3 2
3 4
4 2
4 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
18
      </pre>
    </td>
  </tr>
  
</table>

<p>Neste exemplo de caso de teste, temos uma figura de dimens&otilde;es 5×5. A crian&ccedil;a come&ccedil;a a pintar na
posi&ccedil;&atilde;o (3, 3). Na figura abaixo ilustramos este caso. A posi&ccedil;&atilde;o que a crian&ccedil;a inicia est&aacute; marcada
com a letra "X", e os quadrados que a crian&ccedil;a consegue pintar est&atilde;o destacandos em cinza claro.
Note que ela consegue pintar o quadrado (4, 4), pois este quadrado &eacute; um dos quadrados que ela
consegue pintar ap&oacute;s ter pintado o quadrado (3, 3).</p>

<p><center><img src="task_images/2011f2p1_colorir1.png"></center></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
10 10 5 5 22
2 2
2 3
2 4
2 5
2 6
2 7
2 8
3 2
3 8
4 2
4 8
5 2
5 8
6 2
6 8
7 2
7 3
7 4
7 5
7 6
7 7
7 8
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
20
      </pre>
    </td>
  </tr>
  
</table>

<p>Neste exemplo de caso de teste, temos uma figura de dimens&otilde;es 10 × 10. A crian&ccedil;a come&ccedil;a a pintar
na posi&ccedil;&atilde;o (5, 5). Na figura abaixo ilustramos este caso. A posi&ccedil;&atilde;o que a crian&ccedil;a inicia est&aacute; marcada
com a letra "X", e os quadrados que a crian&ccedil;a consegue pintar est&atilde;o destacandos em cinza claro.</p>

<center><img src="task_images/2011f2p1_colorir2.png"></center>



</p>
