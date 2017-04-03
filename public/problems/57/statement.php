<p align="justify">

<p>Incentivado por um filme de animação recente, vovô resolveu realizar seu sonho de criança, fazendo sua pequena
casa voar amarrada a balões de hélio. Comprou alguns balões coloridos de boa qualidade, para fazer alguns
testes, e começou a planejar a grande aventura. A primeira tarefa é determinar qual a quantidade de hélio
máxima que pode ser injetada em cada balão de maneira que ele não estoure.</p>

<p>Suponha que os valores possíveis de quantidade de hélio em cada balão variem entre os valores 1 e <i>N</i>. Claro que
vovô poderia testar todas as possibilidades, mas esse tipo de solução ineficiente não é apropriada, ainda mais
considerando que vovô comprou apenas <i>K</i> balões para os testes.</p>

<p>Por exemplo, suponha que <i>N</i> = 5 e <i>K</i> = 2. <i>N</i>esse caso, a melhor solução seria testar primeiro em 3. Caso o
balão estoure, vovô só teria mais um balão, então teria de testar 1 e 2 no pior caso, somando ao todo 3 testes.
Caso o balão não estoure, vovô poderia testar 4 e depois 5 (ou 5 e depois 4), também somando 3 ao todo.</p>

<h3>Tarefa</h3>

<p>Dados a capacidade máxima da bomba e o número de balões, indicar o número mínimo de testes que devem ser
feitos, no pior caso, para determinar o ponto em que um balão estoura.</p>

<h3>Entrada</h3>

<p>A única linha da entrada contém dois inteiros, <i>N</i> e <i>K</i>, separados por espaço em branco (1 &le; <i>K</i> &le; <i>N</i> &le; 1.000.000.000).</p>

<h3>Saída</h3>
<p>Seu programa deve imprimir uma única linha, contendo um inteiro que representa o número mínimo de testes
que devem ser feitos no pior caso para determinar o ponto em que o balão estoura.
</p>

<h3>Informações sobre a pontuação</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 40 pontos, (1 &le; <i>K</i> &le; <i>N</i> &le; 200).</li> 
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
5 2     </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
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
20 2      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
6
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
11 5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
4
      </pre>
    </td>
  </tr>
</table>

</p>
