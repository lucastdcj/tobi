<p align="justify">
<p align="justify">&nbsp;</p>

<p>Joyce &eacute; uma menina que gosta muito de ouvir m&uacute;sica, e possui uma enorme cole&ccedil;&atilde;o de m&uacute;sicas num DVD. Ela &eacute; uma menina organizada e deixa suas m&uacute;sicas em pastas, mas como o n&uacute;mero de m&uacute;sicas e de pastas &eacute; grandre, Joyce construiu um cat&aacute;logo para melhor localiz&aacute;-las.</p>

<p>Para o cat&aacute;logo Joyce utilizou uma conven&ccedil;&atilde;o usual em sistemas operacionais, em que a descri&ccedil;&atilde;o da localiza&ccedil;&atilde;o de cada arquivo &eacute; formada pela sequ&ecirc;ncia dos nomes das pastas no caminho da raiz do DVD at&eacute; o arquivo, separados pelo caractere barra (&lsquo;<code>/</code>&rsquo;). Por exemplo, na figura abaixo, a descri&ccedil;&atilde;o da m&uacute;sica Sampa.mp3 no cat&aacute;logo &eacute; <code>MPB/Caetano/Sampa.mp3</code>.</p>

<img src="http://www.spoj.com/content/marcoskwkm:catalogo.jpg" alt="" />

<p>Utilizando essa conven&ccedil;&atilde;o, o cat&aacute;logo do DVD mostrado na figura &eacute;:</p>

<blockquote align="left"><code>Rock/AngraCarryOn.mp3</code><br /> <code>MPB/Caetano/Sampa.mp3</code><br /> <code>MPB/Cartola/Alvorada.mp3</code></blockquote>

<p>Como o DVD de Joyce tem muitas m&uacute;sicas e pastas, o cat&aacute;logo &eacute; muito grande. Joyce notou no entanto que o cat&aacute;logo poderia ser menor (ter um n&uacute;mero menor de caracteres) caso ela utilizasse outro conceito usual na nomea&ccedil;&atilde;o de arquivos em sistemas operacionais: usar uma pasta como refer&ecirc;ncia, ao inv&eacute;s da raiz.</p>

<p>Se uma pasta diferente da raiz for escolhida como refer&ecirc;ncia, ent&atilde;o para todos os arquivos que estejam diretamente nessa pasta ou em alguma subpasta n&atilde;o ser&aacute; mais necess&aacute;rio escrever o nome da pasta refer&ecirc;ncia no cat&aacute;logo. Para as demais pastas, &eacute; necess&aacute;rio indicar o caminho utilizando as pastas acima (na dire&ccedil;&atilde;o da raiz) utilizando a conven&ccedil;&atilde;o &lsquo;<code>../</code>&rsquo; para a pasta imediatamente acima da pasta refer&ecirc;ncia. No exemplo da figura acima, no caso de a refer&ecirc;ncia ser a pasta <code>Caetano</code>, a m&uacute;sica <code>Sampa.mp3</code> seria simplesmente descrita como <code>Sampa.mp3</code>. J&aacute; a m&uacute;sica <code>Alvorada.mp3</code> seria descrita como <code>../Cartola/Alvorada.mp3</code>.</p>

<p>Assim, se a pasta Caetano for utilizada como refer&ecirc;ncia, o cat&aacute;logo ser&aacute;:</p>

<blockquote align="left"><code>../../Rock/AngraCarryOn.mp3</code><br /> <code>Sampa.mp3</code><br /> <code>../Cartola/Alvorada.mp3</code></blockquote>

<p>Nesse caso, a descri&ccedil;&atilde;o do cat&aacute;logo tem 59 carateres, menor do que quando a refer&ecirc;ncia utilizada &eacute; a raiz do DVD.</p>

<p>Seu objetivo &eacute;, dada a informa&ccedil;&atilde;o de todas as m&uacute;sicas do cat&aacute;logo, determinar o n&uacute;mero m&iacute;nimo de caracteres necess&aacute;rios para descrever o cat&aacute;logo.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m um inteiro <em>N</em>, indicando quantos arquivos Joyce possui no DVD. Cada uma das <em>N</em> linhas seguintes cont&eacute;m a descri&ccedil;&atilde;o de um arquivo, a partir da raiz.</p>

<h3>Sa&iacute;da</h3>

<p>Seu programa deve imprimir uma &uacute;nica linha, contendo apenas um inteiro, o n&uacute;mero m&iacute;nimo de caracteres necess&aacute;rios para descrever o cat&aacute;logo.</p>

<h3>Restri&ccedil;&otilde;es</h3>

<ul>

<li>1 &le; N &le; 10<sup>5</sup> </li>

<li>N&uacute;mero de pastas na entrada &le; 10<sup>5</sup> </li>

<li>O nome de cada pasta e de cada arquivo &eacute; composto por no m&aacute;ximo 20 caracteres, entre letras min&uacute;sculas, mai&uacute;sculas e ponto (.) </li>

<li>Cada pasta possui no m&aacute;ximo 100 pastas como filhas diretas. </li>

</ul>

<h3>Exemplos</h3>

<pre><strong>Entrada</strong>

3

Rock/AngraCarryOn.mp3

MPB/Caetano/Sampa.mp3

MPB/Cartola/Alvorada.mp3



<strong>Sa&iacute;da</strong>

59



<strong>Entrada</strong>

2

Preferidas/chacoalha/uia.mp3

Preferidas/chacoalha/eia.mp3



<strong>Sa&iacute;da</strong>

14



<strong>Entrada</strong>

6

delta/india/juliet/lima

bravo/echo

bravo/foxtrot

charlie/hotel

delta/india/kilo

bravo/golf



<strong>Sa&iacute;da</strong>

76

</pre>
