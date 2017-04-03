<p align="justify">

<p>A robótica causou uma grande revolução nos processos industriais no mundo todo; atualmente, vários tipos de
robôs são usados na fabricação de carros, equipamentos eletrônicos e até mesmo utensílios domésticos.</p>
<p>Uma fábrica possui um robô de manutenção, que constantemente precisa ser deslocado entre setores diferentes
para executar vários serviços. A movimentação do robô é feita por controle remoto: ele pode andar qualquer
distância, mas apenas nas quatro direções cardeais (norte, sul, leste e oeste).</p>
<p>Robôs são feitos de metal, e por isso é ideal que eles evitem contato direto com a água. Assim, em dias chuvosos,
é ideal que a trajetória do robô passe por dentro de galpões, debaixo de marquises e toldos, etc. para evitar sua
exposição à chuva.</p>
<p>A sua tarefa é escrever um programa que, dadas as informações sobre as áreas cobertas e ponto inicial e final
do robô, determine uma trajetória para o robô que minimize a porção do trajeto feita sob chuva.</p>

<h3>Entrada</h3>
<p>A entrada contém um único conjunto de testes, que deve ser lido do <i>dispositivo de entrada padrão</i> (normalmente
o teclado). A primeira linha da entrada contém quatro inteiros <i>X</i><sub><i>i</i></sub>, <i>Y</i><sub><i>i</i></sub>, <i>X</i><sub><i>f</i></sub> 
e <i>Y</i><sub><i>f</i></sub> (0 &le; <i>X</i><sub><i>i</i></sub>, <i>Y</i><sub><i>i</i></sub>, <i>X</i><sub><i>f</i></sub>, <i>Y</i><sub><i>f</i></sub> &le; 10<sup>6</sup>),
indicando, respectivamente, a posição atual e a posição final do robô - o robô começa na posição (<i>X</i><sub><i>i</i></sub>, <i>Y</i><sub><i>i</i></sub>) e
deve terminar na posição (<i>X</i><sub><i>f</i></sub>, <i>Y</i><sub><i>f</i></sub> ).</p>
<p>A linha seguinte da entrada contém um único inteiro <i>N</i> (0 &le; <i>N</i> &le; 1000), indicando o número de áreas cobertas
na fábrica. Cada uma das <i>N</i> linhas seguintes contém quatro inteiros <i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>, <i>X</i><sub>2</sub> e <i>Y</i><sub>2</sub> 
(0 &le; <i>X</i><sub>1</sub> < <i>X</i><sub>2</sub> &le; 10<sup>6</sup>, 0 &le; <i>Y</i><sub>1</sub> < <i>Y</i><sub>2</sub> &le; 10<sup>6</sup>), indicando uma região coberta.</p>
<p>Uma região coberta é um retângulo de lados paralelos aos eixos tal que (<i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>) e (<i>X</i><sub>2</sub>, <i>Y</i><sub>2</sub>) 
são vértices opostos do retângulo. Duas áreas cobertas podem ter regiões comuns. O robô pode entrar e sair de uma área coberta
por qualquer ponto de seu perímetro, e pode trafegar livremente dentro da área coberta.</p>

<h3>Sa&iacute;da</h3>
<p>Seu programa deve imprimir, na <i>saída padrão</i>, uma única linha, contendo um número inteiro indicando a menor
distância que o robô precisa percorrer sob chuva.</p>

<h3>Informa&ccedil;&otilde;es sobre a pontua&ccedil;&atilde;o</h3>
<ul>
  <li>Em um conjunto de casos de teste que totaliza 30 pontos, <i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>, <i>X</i><sub>2</sub>, 
  <i>Y</i><sub>2</sub>, <i>X</i><sub><i>i</i></sub>, <i>X</i><sub><i>f</i></sub>, <i>Y</i><sub><i>i</i></sub>, <i>Y</i><sub><i>f</i></sub> &le; 10 e <i>N</i> &le; 5.</li>
  <li>Em um conjunto de casos de teste que totaliza 55 pontos, <i>X</i><sub>1</sub>, <i>Y</i><sub>1</sub>, <i>X</i><sub>2</sub>, 
  <i>Y</i><sub>2</sub>, <i>X</i><sub><i>i</i></sub>, <i>X</i><sub><i>f</i></sub>, <i>Y</i><sub><i>i</i></sub>, <i>Y</i><sub><i>f</i></sub> &le; 1000 e <i>N</i> &le; 100.</li>  
</ul>

<h3>Exemplos</h3>

<table width="100%" cellspace="2" border="1">
  <tr>
    <td valign="top" width="50%">
      <b>Entrada</b>
      <pre>
0 0 4 3
0     
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
7
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
2 5 5 0
1
0 0 1 5
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
5
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
4 5 5 0
2
0 0 1 5
0 0 3 2
      </pre>
    </td>
    <td valign="top" width="50%">
      <b>Sa&iacute;da</b>
      <pre>
5
      </pre>
    </td>
  </tr>
</table>


</p>
