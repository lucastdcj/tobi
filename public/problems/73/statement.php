<p align="justify">

<p>Bruno é um biólogo apaixonado por sua profissão. Sua especialidade é estudar o comportamento de bactérias.
Por isso, ele possui em seu laboratório centenas de colônias de diferentes tipos desses microorganismos.</p>
<p>Nesta semana ele viu o anúncio de um evento inusitado: uma feira de bactérias. Nessa feira, vários fornecedores
estarão vendendo diferentes tipos de bactérias. Cada tipo de bactéria é vendido em uma placa de vidro, já
preparada para a formação de uma colônia de bactérias. Cada placa de vidro é vendida com apenas uma
bactéria inicialmente.</p>
<p>Bruno deu uma olhada no catálogo com os tipos de bactérias que estarão à venda na feira, e notou algumas
coisas interessantes:</p>
<li>Todos os tipos de bactérias à venda terão o mesmo preço.</li>
<li>Todas as bactérias (de todos os tipos) se subdividem todas as noites para gerar outras bactérias. Por
exemplo, a bactéria da colônia de tipo X se subdivide em 2 outras bactérias todas as noites. Assim,
no primeiro dia teremos só uma bactéria na colônia. No dia seguinte, teremos 2, e no próximo, 4. A
quantidade de divisões de uma bactéria depende do seu tipo.</li>
<li>O crescimento da colônia cessa após um determinado número de dias, por causa da escassez de alimento.
A quantidade de dias em que uma colônia cresce depende do tipo de bactéria.</li>
<p>É final de mês e Bruno já gastou quase todo o seu dinheiro. Assim, resolveu que irá comprar apenas uma colônia
de bactérias. No entanto, ele pretende comprar a colônia que forneça a maior quantidade de bactérias ao final
do período de crescimento da mesma.</p>
<p>Ele tem um catálogo mostrando os tipos de bactérias à venda. Para cada tipo de bactéria, o catálogo informa
a quantidade de bactérias geradas por uma bactéria desse tipo a cada divisão e por quantos dias a população
da colônia crescerá. Porém, a calculadora que ele tem em casa não é suficiente para que ele faça os cálculos
necessários para decidir qual é a melhor colônia a comprar.</p>

<h3>Tarefa</h3>
<p>Bruno pediu sua ajuda para decidir qual é o melhor tipo de bactéria para a compra. Lembre que para Bruno
o melhor tipo de bactéria é aquele cuja colônia, ao final do período de crescimento, terá a maior quantidade de
bactérias.</p>
<p>Você deve supor que não haverá duas colônias com a mesma população final de bactérias.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado).</p>
<p>A primeira linha da entrada contém um inteiro <i>N</i> (1 &le; <i>N</i> &le; 50.000) representando a quantidade tipos de
bactérias no catálogo. Cada uma das <i>N</i> linhas seguintes contém informações sobre um tipo de bactéria: a
primeira dessas linhas contém a informação da bactéria de tipo 0, a segunda dessas linhas contém a informação
sobre a bactéria de tipo 1, e assim por diante. A última dessas linhas contém a informação da bactéria de tipo
<i>N</i> - 1.</p>
<p>A informação para cada tipo de bactéria é composta por dois números inteiros <i>D</i> e <i>C</i> (1 &le; <i>D</i> &le; 2.000 e
1 &le; <i>C</i> &le; 5.000), onde <i>D</i> é quantidade de bactérias que cada bactéria deste tipo gera ao se dividir numa noite,
e <i>C</i> é a quantidade de dias que a população de bactérias crescerá.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, um número inteiro entre 0 e <i>N</i> - 1 representando o tipo da
bactéria que Bruno deverá comprar.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 20 pontos, <i>N</i> &le; 1.000, D<sup>C</sup> &le; 1.000.000.</li>
  <li>Em um conjunto de casos de teste que totaliza 80 pontos, <i>N</i> &le; 2.000, <i>D</i> &le; 2.000, <i>C</i> &le; 5.000.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
4
145 15
2 4999
3 3211
135 20      
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
2
2 5
3 4
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
1
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
2 1
4 5
30 4
20 6
2 154
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
4
      </pre>
    </td>
  </tr>
</table>

</p>
