<p align="justify">
<p align="justify">&nbsp;</p>

<p>Fernando ficou sabendo de um novo jogo chamado quadradinho de 8. Nesse jogo, &eacute; apresentado ao jogador uma fileira de quadrados, um do lado do outro. Em cada quadrado h&aacute; um n&uacute;mero escrito. Veja abaixo um exemplo de fileira de quadrados:</p>

<img src="http://www.spoj.com/content/marcoskwkm:quadradinho.jpg" alt="" />

<p>Para ganhar, o jogador deve escolher alguns quadrados de forma que eles juntos formem apenas um ret&acirc;ngulo cont&iacute;guo e que a soma de seus n&uacute;meros seja divis&iacute;vel por 8. Na fileira de quadrados acima, o jogador ganha se escolher os quadrados com os n&uacute;meros 6, 0 e 2. O jogador perde se escolher os quadrados com 3, 4 e 9, apesar da soma ser divisivel por 8, os quadrados n&atilde;o est&atilde;o juntos, eles acabam formando dois ret&acirc;ngulos separados.</p>

<p>Voc&ecirc; deve estar pensando agora que Fernando quer sua ajuda para que voc&ecirc; mostre a ele como ganhar o jogo, mas Fernando &eacute; um garoto muito esperto e sabe resolver o jogo rapidamente. Ele quer na verdade que voc&ecirc; o ajude a descobrir de quantas formas &eacute; poss&iacute;vel ganhar esse jogo.</p>

<h3>Entrada</h3>

<p>&nbsp;</p>

<p>A entrada possui duas linhas. A primeira linha cont&eacute;m apenas um inteiro <em>N</em> que indica o n&uacute;mero de quadrados na fileira de um jogo. A segunda linha cont&eacute;m <em>N</em> inteiros indicando na ordem os n&uacute;meros presentes nos quadrados da fileira de um jogo.</p>

<p>&nbsp;</p>

<h3>Sa&iacute;da</h3>

<p>Seu programa deve imprimir uma &uacute;nica linha, contendo apenas um inteiro, o n&uacute;mero de maneiras de ganhar o jogo apresentado na entrada. Se n&atilde;o for poss&iacute;vel que o jogador ganhe o jogo, imprima 0.</p>

<h3>Restri&ccedil;&otilde;es</h3>

<ul>

<li>1 &le; <em>N</em> &le; 1000000 </li>

<li>Os n&uacute;meros nos quadrados s&atilde;o inteiros n&atilde;o negativos menores ou iguais a 1000. </li>

</ul>

<h3>Exemplos</h3>

<pre><strong>Entrada</strong>

6

3 4 6 0 2 9



<strong>Sa&iacute;da</strong>

3



<strong>Entrada</strong>

7

1 1 1 1 1 1 1



<strong>Sa&iacute;da</strong>

0



<strong>Entrada</strong>

5

8 0 8 0 8



<strong>Sa&iacute;da</strong>

15

</pre>


