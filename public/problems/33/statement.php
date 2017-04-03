<p align="justify">

<p>Caio estava brincando de construir tri&acirc;ngulos com palitos de diferentes tamanhos. Ele fazia isso juntando as
pontas de tr&ecirc;s palitos sobre uma mesa. Ele notou que podia agrupar os tri&acirc;ngulos formados em tr&ecirc;s grupos:</p>

<ul>
  <li>Tri&acirc;ngulos <i>acut&acirc;ngulos</i>, que s&atilde;o aqueles em que todos os &acirc;ngulos internos medem menos de 90&deg;;</li>
  <li>Tri&acirc;ngulos <i>ret&acirc;ngulos</i>, que s&atilde;o aqueles que possuem um &acirc;ngulo interno que mede exatamente 90&deg;;</li>
  <li>Tri&acirc;ngulos <i>obtus&acirc;ngulos</i>, que s&atilde;o aqueles que possuem um &acirc;ngulo interno que mede mais de 90&deg;.</li>
</ul>

<p>Ele tamb&eacute;m percebeu que nem sempre &eacute; poss&iacute;vel formar um tri&acirc;ngulo com tr&ecirc;s palitos.</p>


<center>
  <table border="1">
    <tr>
      <td width="150px" height="140"><center><img src="task_images/2011f1p1_triangulo1.png" width="100" height="100"></center></td>
      <td width="150px" height="140"><center><img src="task_images/2011f1p1_triangulo2.png" width="100" height="100"></center></td>
      <td width="150px" height="140"><center><img src="task_images/2011f1p1_triangulo3.png" width="100" height="100"></center></td>
    </tr>
    <tr>
      <td align="center">Um tri&acirc;ngulo acut&acirc;ngulo</td>
      <td align="center">Um tri&acirc;ngulo ret&acirc;ngulo</td>
      <td align="center">Um tri&acirc;ngulo obtus&acirc;ngulo</td>
    </tr>
  </table>
</center>

<p> Sua tarefa &eacute;, dados os comprimentos <i>A</i>, <i>B</i> e <i>C</i> de tr&ecirc;s palitos, dizer se &eacute; poss&iacute;vel formar um tri&acirc;ngulo com esses
palitos e, em caso afirmativo, dizer a qual grupo o tri&acirc;ngulo formado pertence.</p>


<h2>Entrada</h2>

<p>A entrada consiste de uma &uacute;nica linha, contendo tr&ecirc;s inteiros <i>A</i>, <i>B</i> e <i>C</i> separados por espa&ccedil;o.</p>


<h2>Sa&iacute;da</h2>
<p>
Imprima uma linha contendo apenas uma letra min&uacute;scula:</p>

<ul>
  <li>'n' se n&atilde;o for poss&iacute;vel formar um tri&acirc;ngulo;</li>
  <li>'a' se o tri&acirc;ngulo formado for <i>acut&acirc;ngulo</i>;</li>
  <li>'r' se o tri&acirc;ngulo formado for <i>ret&acirc;ngulo</i>;</li>
  <li>'o' se o tri&acirc;ngulo formado for <i>obtus&acirc;ngulo</i>.</li>
</ul>

<h2>Restri&ccedil;&otilde;es</h2>

  <ul>
    <li>1 &le; <i>A</i> &le; 10<sup>4</sup></li>
    <li>1 &le; <i>B</i> &le; 10<sup>4</sup></li>
    <li>1 &le; <i>C</i> &le; 10<sup>4</sup></li>
  </ul>



<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
1 1 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
a
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
1 2 1
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
n
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
5 4 3
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
r
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
6 3 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
o
      </pre>
    </td>
  </tr>
  
</table>



</p>
