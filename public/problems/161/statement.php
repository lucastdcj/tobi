<p align="justify">
<p align="justify">&nbsp;</p>

<p>Bruno &eacute; um menino que gosta muito de ver televis&atilde;o. No entanto ele se depara com um problema muito chato. Sempre que come&ccedil;a um novo programa no canal preferido dele, a TV Nlog&ocirc;nia, acontece de o volume do som deste programa estar diferente do anterior, &agrave;s vezes com volume menor, outras vezes com volume maior. Quando est&aacute; com volume menor, ele aumenta o volume pressionando uma quantidade de vezes seguidas o bot&atilde;o de aumentar para o volume ficar ideal; a mesma coisa acontece quando est&aacute; um volume maior, e ele diminui o volume pressionando alguma quantidade de vezes seguidas o bot&atilde;o de diminuir o volume para ficar com o volume que ele goste no momento.</p>

<p>O aparelho de TV dele tem umas peculiaridades: ele possui volume m&iacute;nimo, com valor 0 (tamb&eacute;m chamado de mudo), e volume m&aacute;ximo, com valor 100. A TV nunca ultrapassa os volumes m&aacute;ximo e m&iacute;nimo. Por exemplo, se o volume j&aacute; estiver no m&aacute;ximo e ele pressionar o bot&atilde;o de aumentar o som, o volume n&atilde;o se altera. Da mesma forma, se o volume estiver no valor m&iacute;nimo e ele pressionar o bot&atilde;o de diminuir o som, o volume n&atilde;o se altera.</p>

<p>Agora Bruno quer sua ajuda: ele lembra qual era o volume inicial da TV, e quantas vezes ele pressionou cada bot&atilde;o. Mas, como foram v&aacute;rias mudan&ccedil;as de volume, ele n&atilde;o sabe qual &eacute; o volume atual da TV. Por isso, pediu que voc&ecirc; o ajude a calcular qual &eacute; o volume atual, dados o volume inicial e a lista de trocas de volume que ele realizou.</p>

<h3>Entrada</h3>

<p>A primeira linha da entrada cont&eacute;m dois n&uacute;meros inteiros <em>V</em> e <em>T</em>, que indicam, respectivamente, o volume inicial e o n&uacute;mero de trocas de volume.</p>

<p>A segunda linha cont&eacute;m <em>T</em> n&uacute;meros inteiros <em>A<sub>i</sub></em> que mostram as modifica&ccedil;&otilde;es de volume realizadas, na ordem em que estas modifica&ccedil;&otilde;es foram feitas. O primeiro n&uacute;mero indica a primeira modifica&ccedil;&atilde;o de volume, o segundo n&uacute;mero indica a segunda modifica&ccedil;&atilde;o, e assim por diante. Para cada modifica&ccedil;&atilde;o, um n&uacute;mero maior do que zero significa quantas vezes Bruno pressionou o bot&atilde;o de aumentar o som; um n&uacute;mero menor do que zero significa quantas vezes ele pressionou o bot&atilde;o de diminuir o som. Ou seja, se o n&uacute;mero &eacute; igual a 5, significa que nessa modifica&ccedil;&atilde;o ele pressionou cinco vezes o bot&atilde;o de aumentar o som; se o n&uacute;mero &eacute; igual a -3, significa que nessa modifica&ccedil;&atilde;o ele pressionou o bot&atilde;o de diminuir o som tr&ecirc;s vezes.</p>

<h3>Sa&iacute;da</h3>

<p>Seu programa deve imprimir apenas uma linha, contendo apenas um inteiro <em>F</em>, que indica qual o volume atual da TV ap&oacute;s as mudan&ccedil;as de volume.</p>

<h3>Restri&ccedil;&otilde;es</h3>

<ul>

<li>0 &le; <em>V</em> &le; 100 </li>

<li>0 &le; <em>T</em> &le; 1000 </li>

<li>Para cada varia&ccedil;&atilde;o de volume <em>A<sub>i</sub></em>, -100 &le; <em>A<sub>i</sub></em> &le; 100 </li>

</ul>

<h3>Exemplos</h3>

<pre><strong>Entrada</strong>

50 4

11 20 -15 -13



<strong>Sa&iacute;da</strong>

53



<strong>Entrada</strong>

50 5

30 30 30 40 -78



<strong>Sa&iacute;da</strong>

22

</pre>
