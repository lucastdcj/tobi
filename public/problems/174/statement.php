<p align="justify">
<p align="justify">&nbsp;</p>

<p>Um novo rob&ocirc; de limpeza para um grande sal&atilde;o retangular est&aacute; sendo desenvolvido. O rob&ocirc; vai percorrer o caminho definido por uma linha marcada no ch&atilde;o, que &eacute; coberto com ladrilhos quadrados, brancos e pretos: ladrilhos pretos indicam o caminho que o rob&ocirc; deve percorrer. Ao movimentar-se, o rob&ocirc; pode andar apenas em linha reta, para a frente. Parado, o rob&ocirc; pode girar para as quatro dire&ccedil;&otilde;es (Norte, Sul, Leste e Oeste).</p>

<p>Dados um mapa indicando a cor de cada ladrilho no ch&atilde;o e a posi&ccedil;&atilde;o inicial do rob&ocirc;, voc&ecirc; deve escrever um programa que determine a posi&ccedil;&atilde;o final do rob&ocirc;.</p>

<h3>Entrada</h3>

<p>A primeira linha cont&eacute;m dois inteiros L e C indicando as dimens&otilde;es do sal&atilde;o (n&uacute;mero de linhas e n&uacute;mero de colunas), medidas em ladrilhos. A segunda linha cont&eacute;m dois inteiros A e B indicando respectivamente a linha e a coluna da posi&ccedil;&atilde;o inicial do rob&ocirc; (as linhas s&atilde;o numeradas de 1 a L, de cima para baixo; as colunas s&atilde;o numeradas de 1 a C, da esquerda para a direita). Cada uma das L linhas seguintes cont&eacute;m C inteiros, zeros ou uns. Nessa representa&ccedil;&atilde;o, o valor &lsquo;1&rsquo; indica que o ladrilho corresponte &eacute; preto. O ladrilho da linha A e coluna B sempre &eacute; preto. O caminho do rob&ocirc; &eacute; definido unicamente: em nenhum momento o rob&ocirc; necessita fazer uma escolha sobre em qual dire&ccedil;&atilde;o ir (em outras palavras, todo ladrilho preto tem no m&aacute;ximo dois vizinhos pretos e o ladrilho inicial tem um vizinho preto).</p>

<h3>Sa&iacute;da</h3>

<p>Seu programa deve imprimir apenas uma linha, contendo dois n&uacute;meros inteiros, respectivamente a linha e a coluna da posi&ccedil;&atilde;o final do rob&ocirc;.</p>

<h3>Restri&ccedil;&otilde;es</h3>

<ul>

<li>1 &le; <em>L</em>, <em>C</em> &le; 1000 </li>

<li>1 &le; <em>A</em> &le; <em>L</em>, 1 &le; <em>B</em> &le; <em>C</em> </li>

<li>A posi&ccedil;&atilde;o final &eacute; diferente da posi&ccedil;&atilde;o inicial. </li>

</ul>

<h3>Exemplos</h3>

<pre><strong>Entrada</strong>

3 5

1 1

1 0 0 0 1

1 0 0 1 1

1 1 1 1 0



<strong>Sa&iacute;da</strong>

1 5



<strong>Entrada</strong>

4 7

3 4

0 0 1 1 1 1 1

1 1 1 0 0 0 1

1 0 0 1 0 1 1

1 1 0 1 1 1 0



<strong>Sa&iacute;da</strong>

4 2  

</pre>

