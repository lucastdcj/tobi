<p align="justify">

<p>É de conhecimento público e notório que já fomos visitados por alienígenas diversas vezes. A grande dificuldade
que temos, porém, é a comunicação com eles, por causa de grandes diferenças entre as línguas. Além disso,
assim como nós, eles também têm várias línguas diferentes.</p>

<p>Com o intuito de auxiliar no processo de tradução, foi criado um método de mapeamento dos símbolos do
alfabeto de cada língua alienígena, atribuindo um número inteiro para cada símbolo. Sendo assim, para um
alfabeto alienígena com <i>N</i> elementos, atribui-se números de 1 a <i>N</i> a cada um.</p>

<p>O problema é que o encarregado de transcrever os textos alienígenas para números não foi muito cuidadoso e
usou o mesmo espaçamento entre dígitos e números. Assim, por exemplo, digamos que para um alfabeto com
32 símbolos, uma sequência que deveria ser "31 20 4 19" virou "3120419". Como se pode notar, há diferentes
maneiras válidas de interpretar essa sequência além da original, como por exemplo "3 1 20 4 19" e "31 20 4 19".
 Repare que a transcrição nunca usa zeros à esquerda de um número e, portanto, a sequência "3 12 04 19"
é inválida, assim como "31 20 41 9" por conter um número (49) que não corresponde a um símbolo.</p>

<h3>Tarefa</h3>

<p>Dados a quantidade de símbolos do alfabeto e uma sequência transcrita, determine quantas sequências válidas
podem ser formadas.</p>

<h3>Entrada</h3>

<p>A entrada é composta por duas linhas. A primeira contém um número inteiro <i>N</i> (1 < <i>N</i> < 10<sup>100</sup>) que indica
a quantidade de símbolos do alfabeto. A segunda linha contém uma cadeia de dígitos de tamanho mínimo 1 e
tamanho máximo 100.000 que corresponde a sequência transcrita.</p>

<h3>Saída</h3>
<p>Seu programa deve imprimir uma linha com o resto da divis?ão da quantidade de sequências válidas por
1.000.000.007.</p>

<h3>Informações sobre a pontuação</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, a cadeia de caracteres tem no máximo 20 dígitos
e <i>N</i> < 100.</li>
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
32
3120419
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

<p></p>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
32
4021333251231253
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
0
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
500
12345
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Saída</b>
      <pre>
13
      </pre>
    </td>
  </tr>
</table>

</p>
